<?php

namespace App\Http\Controllers;
use App\Models\Journal;
use Illuminate\Http\Request;


class StatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
           $data =  Journal::query()->get();
          // dd($data);
        //   ->select('size' ,'profit', 'exit_price' , 'entry_price' ,'s_l' ,'t_p')
        //    $pnL   = $data->profit / $data->size;
        //    $ticks = $data->entry_price % $data->exit_price;
        //    $TP_Ticks =  $calc->entry_price % $calc->t_p;
           
           

         $result = collect($data)->values()->map(function ($result, $key)  {
            return  [
                
                'key'             => ++$key,
                'entry_date'      => $result->entry_date,
                'pnL_per_lot'     => $pnl   = ($result->profit / $result->size) , //Profit / Size
                'ticks'           => $ticks = ($result->entry_price % $result->exit_price),//Difference between Entry Price and Exit Price 
                'Value'           => $value = 20, //PnL per Lot / Ticks
                'TP_Ticks'        => $TP =  $result->entry_price % $result->t_p, // Difference Entry price and T/P
                'SL_Ticks'        => $result->entry_price % $result->s_l, //Difference between Entry price and S/L
                   
                  ///////////

                'Risk/Reward'         => round($result->size * $value * $TP / $result->size * $value,2), // Planned Profit / $ Risk
                'R'                   => round($result->profit / $result->size * $value,2),// $-Profit / $-Risk
                'Risk'                => round($result->size * $value,2), //Size * Value * Risk Ricks
                'Planned'             => round($result->size * $value * $TP,2), //Size * Value * TP Ticks
                'Profit'              => round($result->profit,2), // Entered by User
            ];
        });

        //dd($result);
        
        return view('admin.Statistics.index')->withResult($result);
    }
}
