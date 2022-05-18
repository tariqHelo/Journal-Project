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
                'pnL_per_lot'     => $pnl   = round($result->profit / $result->size) , //Profit / Size
                'ticks'           => $ticks = round($result->entry_price % $result->exit_price), //Difference between Entry Price and Exit Price 
                'Value'           => $value =  ($pnl / $ticks), //PnL per Lot / Ticks
                'TP_Ticks'        => $TP =  $result->entry_price % $result->t_p, // Difference Entry price and T/P
                'SL_Ticks'        => $result->entry_price % $result->s_l, //Difference between Entry price and S/L

                // $pnL   = ($result->profit / $result->size),
                // $ticks = ($result->entry_price % $result->exit_price),
                // $value =   ($pnL / $ticks),
                // $TP_Ticks =  $result->entry_price % $result->t_p,

                'Risk/Reward'         => ($result->size * $value * $TP / $result->size * $value), // Planned Profit / $ Risk
                'R'                   => ($result->profit / $result->size * $value),// $-Profit / $-Risk
                'Risk'                => ($result->size * $value), //Size * Value * Risk Ricks
                'Planned'             => ($result->size * $value * $TP), //Size * Value * TP Ticks
                'Profit'              => $result->profit, // Entered by User
            ];
        });

       // dd($result);
        
        return view('admin.Statistics.index')->withResult($result);
    }
}
