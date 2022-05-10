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
        $event = Journal::query()->whereDate('created_at', '=', (new Carbon)->format('Y-m-d'))->get();
        $events = collect($event)->map(function ($events) {
            return [
                 'created_at' => $events->created_at,
                //  'amount' => $accounts->amount,
                //  'bank_name' => $accounts->bank->name,
            ];
        });
 //       dd($event);
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
        //                         },
        //                         {
        //                             title: 'Dinner',
        //                             start: YM + '-12',
        //                             description: 'Lorem ipsum dolor sit amet, conse ctetur',
        //                         },
        //                         {
        //                             id: 999,
        //                             title: 'Repeating Event',
        //                             start: YM + '-09T16:00:00',
        //                             description: 'Lorem ipsum dolor sit ncididunt ut labore',
        //                             className: "fc-event-danger"
        //                         },
        //                         {
        //                             id: 1000,
        //                             title: 'Repeating Event',
        //                             description: 'Lorem ipsum dolor sit amet, labore',
        //                             start: YM + '-16T16:00:00'
        //                         },
        //                         {
        //                             title: 'Count  ' + "Win Rate",
        //                             start: TODAY ,
        //                              className: "fc-event-info",
        //                             // end: TODAY + 'T12:30:00',
        //                             description: 'Lorem ipsum dolor eiu idunt ut labore'
        //                         },
        //                         {
        //                             title: 'Pnl',
        //                             start: TODAY ,
        //                             className: "fc-event-info",
        //                             description: 'Lorem ipsum dolor sit amet, ut labore'
        //                         },
        //                         {
        //                             title: 'Max DO',
        //                             start: TODAY ,
        //                             className: "fc-event-warning",
        //                             description: 'Lorem ipsum conse ctetur adipi scing'
        //                         },
        //                         {
        //                             title: 'Max Gain',
        //                             start: TODAY ,
        //                             className: "fc-event-info",
        //                             description: 'Lorem ipsum dolor sit amet, conse ctetur'
        //                         },
        //                         {
        //                             title: 'Dinner',
        //                             start: TOMORROW ,
        //                             className: "fc-event-solid-danger fc-event-light",
        //                             description: 'Lorem ipsum dolor sit ctetur adipi scing'
        //                         },
        //                         {
        //                             title: 'wwwww',
        //                             start: TOMORROW ,
        //                             className: "fc-event-solid-danger fc-event-light",
        //                             description: 'Lorem ipsum dolor sit ctetur adipi scing'
        //                         },
        //                         {
        //                             title: 'Birthday Party',
        //                             start: TOMORROW + 'T07:00:00',
        //                             className: "fc-event-primary",
        //                             description: 'Lorem ipsum dolor sit amet, scing'
        //                         },
        //                         {
        //                             title: 'Click for Google',
        //                             url: 'http://google.com/',
        //                             start: YM + '-28',
        //                             className: "fc-event-solid-info fc-event-light",
        //                             description: 'Lorem ipsum dolor sit amet, labore'
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
