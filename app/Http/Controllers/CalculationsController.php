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
       // dd(20);
        // $calc = Journal::query()->toBase()
        // ->selectRaw('(profit / size) as lot')
        // ->selectRaw('(entry_price % exit_price) as triks')
        // // ->selectRaw('(entry_price % exit_price) as deff')
        // // ->selectRaw('(entry_price % exit_price) as deff')
        // // ->selectRaw('(entry_price % exit_price) as deff')
        // ->first();
         $calc = collect(Journal::query()->get())->values()->map(function ($calc)  {
            return  [
                'pnL_per_lot'     => $calc->profit / $calc->size ,
                'ticks'           => $calc->entry_price % $calc->exit_price,
                'Value'           => (' '),
                'TP_Ticks'        => $calc->entry_price % $calc->t_p,
                'SL_Ticks'        => $calc->entry_price % $calc->s_l,
                'Risk_Ticks'      => (' '),
                'Account_Balance' => ('empty'),
                'Trade_Duration'  => ($calc->enter - $calc->s_l),
            ];
        });
        dd($calc);
        return view('admin.calcutions.index');
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
