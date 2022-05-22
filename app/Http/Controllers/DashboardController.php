<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Support\Collection
     */
    public function index()
    {   
        $q = Journal::query();
        $profit = $q->toBase()
             ->selectRaw("SUM(profit) AS pnl")
             ->selectRaw("SUM(CASE WHEN profit > 0 THEN profit ELSE 0 END) AS SumPos")
             ->selectRaw("SUM(CASE WHEN profit < 0 THEN profit ELSE 0 END) AS SumNeg")
             ->selectRaw("count(*) AS trades")
             ->selectRaw("count(case when type = 'sal' then 1 end) as sal")
             ->selectRaw("count(case when type = 'buy' then 1 end) as buy")
             ->selectRaw("count(CASE WHEN (type = 'buy' AND profit > 0) THEN  1 END) as ss1")
             ->selectRaw("count(CASE WHEN (type = 'buy' AND profit < 0) THEN  1 END) as ss2")
             ->selectRaw("count(CASE WHEN (type = 'sal' AND profit > 0) THEN  1 END) as ss3")
             ->selectRaw("count(CASE WHEN (type = 'sal' AND profit < 0) THEN  1 END) as ss5")
             ->selectRaw("MAX(profit) as max")
             ->selectRaw("MIN(profit) as min")
             ->selectRaw("AVG(profit) AS AvgPnl")
             ->selectRaw("AVG(profit) = '2022-05-22'  AS AvgD") 
             ->selectRaw("count(case when profit < 0 then 1 end) as CountNeg")
             ->selectRaw("count(case when profit > 0 then 1 end) as CountPos")
             ->selectRaw("AVG(CASE WHEN profit > 0 THEN profit ELSE 0 END) as AVGPos")
             ->selectRaw("AVG(CASE WHEN profit < 0 THEN profit ELSE 0 END) as AVGNeg")
            //  ->selectRaw("CAST(count(case when profit > 0 then 1 end)/count(*)*100 AS INTEGER) as a")
             ->first(); 
            // CURDATE()
       // dd($profit);
         //$AvgD = Journal::active()->avg('profit');
         $Distribution = Journal::orderBy('entry_date')->get()->groupBy(function($item) {
            return [
                  'count_of_day' => $item->created_at->format('l'),
                //   'sum_of_day' => $item->created_at,
                
            ];
         });
         dd($Distribution);
        $symbols = $q->get()->groupBy('symbol')->map(function ($d) {
            return [
                'key' => $d[0]->symbol,
                'sum' => $d->sum('profit')
            ];
        });
       
        return view('layouts.admin')
        ->withProfit($profit);
     //win rate => // % of Quantity positive Trades vs Negative Trades (Positive Profit vs Negative Profit) 
             // Count of 5 Trades have positive Profit,
             // Count of 5 Trades have negative Profit —>
             // Win Rate = 50% // Same for the Calendar, just for the specific Date 

             //Sum of Table 1 Column N for each day (based on Entry Date)
             //Count of Entries for each unique Symbol (Table 1 - Column D / e.g.: EURUSD: 1, GBPUSD: 1
             //Sum of Table 1 Column N for each Symbol
             //Count of Trades including a Tag

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.statistics.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
//    $events=[
//        ['title' => 'All Day Event','start' => '2022-05-12' , 'className' => "fc-event-danger fc-event-solid-warning"],
//        ['title' => 'ss','start' => '2022-05-12'],
//        ['title' => 'Count2','start' => '2022-05-08'],
//        ['title' => 'Count3','start' => '2022-05-07'],
//        ['title' => 'Count4','start' => '2022-05-03'],
//        ['title' => 'Count5','start' => '2022-05-02'],
//        ['title' => 'Count6','start' => '2022-05-01'],
//        ['title' => 'Count7','start' => '2022-05-10'],
//        ['title' => 'Count8','start' => '2022-05-09'],
//        ['title' => 'Count9','start' => '2022-05-08'],
//    ];