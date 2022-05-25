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
       // dd(20);
        $q = Journal::query();
        $profit = $q->toBase()
             ->selectRaw("SUM(profit) AS pnl")
             ->selectRaw("SUM(CASE WHEN profit > 0 THEN profit ELSE 0 END) AS SumPos")
             ->selectRaw("SUM(CASE WHEN profit < 0 THEN profit ELSE 0 END) AS SumNeg")
             ->selectRaw("count(*) AS trades")
             ->selectRaw("count(case when type = 'sal' then 1 end) as sal")
             ->selectRaw("count(case when type = 'buy' then 1 end) as buy")
             ->selectRaw("count(CASE WHEN (type = 'buy' AND profit > 0) THEN  1 END) as POSBUY")
             ->selectRaw("count(CASE WHEN (type = 'buy' AND profit < 0) THEN  1 END) as NEGBUY")
             ->selectRaw("count(CASE WHEN (type = 'sal' AND profit > 0) THEN  1 END) as POSSEL")
             ->selectRaw("count(CASE WHEN (type = 'sal' AND profit < 0) THEN  1 END) as NEGSEL")
             ->selectRaw("MAX(profit) as max")
             ->selectRaw("MIN(profit) as min")
             ->selectRaw("AVG(profit) AS AvgPnl")
             ->selectRaw("AVG(profit) AS AvgD") 
             ->selectRaw("count(case when profit < 0 then 1 end) as CountNeg")
             ->selectRaw("count(case when profit > 0 then 1 end) as CountPos")
             ->selectRaw("AVG(CASE WHEN profit > 0 THEN profit ELSE 0 END) as AVGPos")
             ->selectRaw("AVG(CASE WHEN profit < 0 THEN profit ELSE 0 END) as AVGNeg")
             ->first(); 
         $daily = $q->whereDate('created_at',today())->get();
         $day = Journal::orderBy('entry_date')->get()->groupBy(function($item) {
            return [
                  'count_of_day' => $item->created_at->format('l'),
            ];
         });
         $of_weeks = collect($day)->map(function ($d){
             return [
                 'count' => $d->count(),
                 'sum' => $d->sum('profit'),
             ];
         });
        $days = $of_weeks->keys();
        $count =$of_weeks->pluck('count');
        $sum =  $of_weeks->pluck('sum');

                   
        $symbols = Journal::get()->groupBy('symbol')->map(function ($d) {
            return [
                'count' => $d->count(),
                'key' => $d[0]->symbol,
                'sum' => $d->sum('profit')
            ];
        });
       // dd($symbols);
        $keys = $symbols->keys();
        $scount =$symbols->pluck('count');
        $ssum =$symbols->pluck('sum');
        //dd($keys);

        $result = collect($q->get())->values()->map(function ($result)  {
             return  [
             //   'id'          => $result->id, 
                'pnL_per_lot'     => $pnl = ($result->size == 0 ? 0 :($result->profit / $result->size)), //Profit / Size
                'ticks'           => $ticks = ($result->entry_price % $result->exit_price),//Difference between Entry Price and Exit Price 
                'Value'           => $value = ($ticks == 0 ? 0: ($pnl/$ticks)), //PnL per Lot / Ticks
                'TP_Ticks'        => $TP =  $result->entry_price % $result->t_p, // Difference Entry price and T/P
                'SL_Ticks'        => $result->entry_price % $result->s_l, //Difference between Entry price and S/L
                  ///////////
                'Risk/Reward'         => round($result->size * $value * $TP / $result->size * $value,2), // Planned Profit / $ Risk
                'R'                   => round($result->profit / $result->size * $value,2),// $-Profit / $-Risk
                'Risk'                => round($result->size * $value,2), //Size * Value * Risk Ricks
                'Planned'             => round($result->size * $value * $TP,2), //Size * Value * TP Ticks
                'Profit'              => ($result->profit), // Entered by User
             ];
         });
       //  dd($result);
        return view('layouts.admin')
        ->withProfit($profit)
        ->withResult($result)
        ->withDaily($daily)
        ->withDays($days)
        ->withCount($count)
        ->withSum($sum)
        ->withKeys($keys)
        ->withScount($scount)
        ->withSsum($ssum);

     //win rate => // % of Quantity positive Trades vs Negative Trades (Positive Profit vs Negative Profit) 
             // Count of 5 Trades have positive Profit,
             // Count of 5 Trades have negative Profit —>
             // Win Rate = 50% // Same for the Calendar, just for the specific Date 

             //Sum of Table 1 Column N for each day (based on Entry Date)
             //Count of Entries for each unique Symbol (Table 1 - Column D / e.g.: EURUSD: 1, GBPUSD: 1
             //Sum of Table 1 Column N for each Symbol
             //Count of Trades including a Tag

    }


}
