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
       $date = Carbon::now();

       //daily records via hours
       $events = Journal::query()->whereDate('created_at', today())->get()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('h');
        });

       $hoursData =  collect($events)->values()->map(function ($event) {
           return [
               'hour' => Carbon::parse($event[0]->created_at)->format('h a'),
               'count' => $event->count(),
               'pnl' => $event->sum('profit')
           ];
        });


        //weekly records via days

        $week_events = Journal::query()->whereBetween('created_at', [now()->startOfWeek(Carbon::SATURDAY), now()->endOfWeek(Carbon::FRIDAY)])->get()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('d');
        });
        $weekData =  collect($week_events)->values()->map(function ($event) {
            return [
                'day' => Carbon::parse($event[0]->created_at)->format('l'),
                'count' => $event->count(),
                'pnl' => $event->sum('profit'),
            ];
        });

        //montly records via days

        $month_events = Journal::query()->whereBetween('created_at', [now()->startOfMonth(), now()->endOfMonth()])->get()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('d');
        });
        $monthData =  collect($month_events)->values()->map(function ($event) {
            return [
                'day' => Carbon::parse($event[0]->created_at)->format('l'),
                'date' => Carbon::parse($event[0]->created_at)->format('Y.m.d'),
                'count' => $event->count(),
                'pnl' => $event->sum('profit'),
            ];
        });
       return [
           'daily' => $hoursData,
           'weekly' => $weekData,
           'monthly' => $monthData,
       ];

       return view('admin.calender.index');
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
