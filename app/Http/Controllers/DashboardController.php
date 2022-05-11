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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       $date = Carbon::now();
       $event = Journal::query()->whereDate('entry_date', '2022-05-08')->select('created_at')->get();
       $events = collect($event)->map(function ($events) {
            return [
                [
                 //  'title' => (Count)=>it's mean how many inputs for every day,
                 //   'start' => this side contain Date Today or yesterdat,
                ],
                [
                 //  'title' => (Sum Count)=> if has multiple values entered from day,
                 //   'start' => this side contain Date Today or yesterdat,
                ],
                [
                 //  'title' => (Win Rate)= "Empty",
                 //   'start' => this side contain Date Today or yesterdat,
                ],

                 
            ];
        });
      // dd($event);
        //   events:
        //    [
        //                         {
        //                             title: 'All Day Event',
        //                             start: YM + '-01',
        //                             description: 'Toto lorem ipsum dolor sit incid idunt ut',
        //                             className: "fc-event-danger fc-event-solid-warning"
        //                         },
        //                         {
        //                             title: 'Reporting',
        //                             start: YM + '-14T13:30:00',
        //                             description: 'Lorem ipsum dolor incid idunt ut labore',
        //                             end: YM + '-14',
        //                             className: "fc-event-success"
        //                         },
        //                         {
        //                             title: 'Company Trip',
        //                             start: YM + '-02',
        //                             description: 'Lorem ipsum dolor sit tempor incid',
        //                             className: "fc-event-primary"
        //                         },
        //                         {
        //                             title: 'ICT Expo 2017 - Product Release',
        //                             start: YM + '-03',
        //                             description: 'Lorem ipsum dolor sit tempor inci',
        //                             className: "fc-event-light fc-event-solid-primary"
        //                         }
        //    ],
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
