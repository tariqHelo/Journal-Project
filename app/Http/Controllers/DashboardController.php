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
        $t = Carbon::now();
       $data = Journal::query()->get()->groupBy(function($t) {
            return Carbon::parse($t->entry_date)->format('Y-m-d');
        });
       $events = collect($data)->values()->map(function ($events)  {
            return  [
                   'title'     =>  'Count'.':' .' '.$events->count(),
                   'start'     => ($events[0]->entry_date),
                   'className' => "fc-event-danger fc-event-solid-warning",
            ];
        });
       $pnl = collect($data)->values()->map(function ($pnl)  {
            return  [
                   'title'     =>   'PnL'.':' .' $'.$pnl->sum('profit'),
                   'start'     => ($pnl[0]->entry_date),
                   'className' => "fc-event-light fc-event-solid-primary",
                  //count of tarde // Done
                  //pnl sum all profit //Done
                  //win rate 
            ];
        });
        $rate = collect($data)->values()->map(function ($rate)  {
            return  [
                    'title'     =>  'Win Rate'.':'. ' '.$rate->count() / $rate->sum('profit').'%',
                //    'title'     =>   'Win Rate'.':'. ' '.$rate->avg('profit') .'%',
                   'start'     => ($rate[0]->entry_date),
                   'className' => "fc-event-solid-info fc-event-light",
                  //count of tarde // Done
                  //pnl sum all profit //Done
                  //win rate //Done
            ];
        });

     $allItems = $events->merge($pnl)->merge($rate);
     dd($allItems);
     return response()->json(['events' => $allItems]);
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
        //
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