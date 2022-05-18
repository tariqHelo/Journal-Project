<?php

namespace App\Http\Controllers;
use App\Models\Journal;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Support\Collection
     */
    public function index()
    {   
        $profit = Journal::query()->toBase()
             ->selectRaw("SUM(profit) AS pnl")
          //  ->selectRaw("Date(created_at) = CURDATE()")
            ->selectRaw("count(*) AS trades")
            ->selectRaw("count(case when type = 'sal' then 1 end) as sal")
            ->selectRaw("count(case when type = 'buy' then 1 end) as buy")
            ->selectRaw("MAX(profit) as max")
            ->selectRaw("MIN(profit) as min")
            ->selectRaw("AVG(profit) AS AvgPnl")
            ->selectRaw("AVG(profit) / count(*)  AS AvgDaily") 
            ->selectRaw("count(case when profit < 0 then 1 end) as neg")
            ->selectRaw("count(case when profit > 0 then 1 end) as pos")
            ->first();
        //dd($profit);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
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