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
        $profits = Journal::query()->toBase()
            ->selectRaw("count(case when profit < 0 then 1 end) as neg")
            ->selectRaw("count(case when profit > 0 then 1 end) as pos")
            ->selectRaw("CAST(count(case when profit > 0 then 1 end)/count(*)*100 AS INTEGER) as a")
            ->first();
        dd($profits);
      // $item = Journal::query()->where('profit' ,'<' ,0)->sum('profit');
      $profit = Journal::query()->toBase()
            ->selectRaw("count(*) AS trades, "."SUM(profit) AS pnl, "."SUM(CASE WHEN profit < 0 THEN profit ELSE 0 END) AS negative, " .
                "SUM(CASE WHEN profit > 0 THEN profit ELSE 0 END) AS positive")
            ->first();
       // dd($profit); 
        return view('layouts.admin')
        ->withProfit($profit);
     //win rate => // % of Quantity positive Trades vs Negative Trades (Positive Profit vs Negative Profit) 
             // Count of 5 Trades have positive Profit,
             // Count of 5 Trades have negative Profit —>
             // Win Rate = 50% // Same for the Calendar, just for the specific Date 

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