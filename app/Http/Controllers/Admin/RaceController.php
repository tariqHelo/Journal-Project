<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\RaceImport;
use App\Models\Race;
use App\Http\Requests\StoreRaceRequest;
use App\Http\Requests\UpdateRaceRequest;
use Illuminate\Http\Request;

class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $races = Race::all();
        return view('admin.race.index')
        ->withRaces($races);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.race.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRaceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
         $request = request()->file('file');
         // dd($request);

       try {
             \Excel::import(new RaceImport,$request);
             \Session::flash("msg","s:File added successfully");
       } catch (\Throwable $th) {
           \Session::flash("msg","w: An error occurred during the entry process, please make sure that the file is correct");
       }
        return redirect()->route('races.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Race  $race
     * @return \Illuminate\Http\Response
     */
    public function show(Race $race)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Race  $race
     * @return \Illuminate\Http\Response
     */
    public function edit(Race $race)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRaceRequest  $request
     * @param  \App\Models\Race  $race
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRaceRequest $request, Race $race)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Race  $race
     * @return \Illuminate\Http\Response
     */
    public function destroy(Race $race)
    {
        //
    }
}
