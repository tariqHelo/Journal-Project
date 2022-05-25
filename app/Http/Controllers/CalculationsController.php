<?php

namespace App\Http\Controllers;
use App\Models\Journal;
use Illuminate\Http\Request;


class CalculationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
         $calcs = collect(Journal::query()->get())->values()->map(function ($calc)  {
            return  [
                'pnL_per_lot'     => $pnL= $calc->profit / $calc->size ,
                'ticks'           => $ticks= $calc->entry_price % $calc->exit_price,
                'Value'           => ($pnL / $ticks),
                'TP_Ticks'        => $calc->entry_price % $calc->t_p,
                'SL_Ticks'        => $calc->entry_price % $calc->s_l,
                'Risk_Ticks'      => (' '),
                'Account_Balance' => ( ''),
                'Trade_Duration'  => '',
            ];
        });
        //dd($calcs);
        return view('admin.calcutions.index')->withCalcs($calcs);
    }

}
