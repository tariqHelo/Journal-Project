<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;
use Carbon\Carbon;


class CalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
                    'title'     =>  'Win Rate'.':'. ' '.($rate->where('profit' , '>' , 0)->count()/$rate->count())*100 .'%',
                //    'title'     =>   'Win Rate'.':'. ' '.$rate->avg('profit') .'%',
                   'start'     => ($rate[0]->entry_date),
                   'className' => "fc-event-solid-info fc-event-success",
                  //count of tarde // Done
                  //pnl sum all profit //Done
                  //win rate //Done
            ];
        });
    //    $profit->CountPos/ ($profit->CountNeg + $profit->CountPos)*100
       $allItems = $events->merge($pnl)->merge($rate);
       // return($allItems);
       return response()->json(['events' => $allItems]);
       //win rate => // % of Quantity positive Trades vs Negative Trades (Positive Profit vs Negative Profit) 
             // Count of 5 Trades have positive Profit,
             // Count of 5 Trades have negative Profit —>
             // Win Rate = 50% // Same for the Calendar, just for the specific Date 
    }
}
