@extends('layouts.admin')

@section('content')
 @include('shared.msg')
    <div class="card card-custom">
        <div class="card-body">
            <div id="calendar"></div>
        </div>
    </div>
    <!--end::Card-->
    {{-- <div class="example example-compact my-5">

        <div class="example-code">
            <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="example_code_html" role="tabpanel">
                    <div class="example-highlight">
                        <pre>
                            <code class="language-html">
                                            &lt;div class="card card-custom"&gt;
                                            &lt;div class="card-header"&gt;
                                            &lt;div class="card-title"&gt;
                                            &lt;h3 class="card-label"&gt;
                                                Basic Calendar
                                            &lt;/h3&gt;
                                            &lt;/div&gt;
                                            &lt;div class="card-toolbar"&gt;
                                            &lt;a href="#" class="btn btn-light-primary font-weight-bold"&gt;
                                            &lt;i class="ki ki-plus "&gt;&lt;/i&gt; Add Event
                                            &lt;/a&gt;
                                            &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class="card-body"&gt;
                                            &lt;div id="kt_calendar"&gt;&lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;/div&gt;
                                </code>
                        </pre>
                    </div>
                </div>
                <div class="tab-pane" id="example_code_js">
                    <div class="example-highlight">
                        <pre style="height:400px">
                            <code class="language-js">
                                 <div id="kt_calendar"></div>         
                            </code>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
   @section('js')
    <script>
            var KTCalendarBasic = function() {
                return {
                    //main function to initiate the module
                    init: function() {
                        var todayDate = moment().startOf('day');
                        var YM = todayDate.format('YYYY-MM');
                        var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
                        var TODAY = todayDate.format('YYYY-MM-DD');
                        var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

                        var calendarEl = document.getElementById('calendar');
                        
                        var calendar = new FullCalendar.Calendar(calendarEl, {
                            plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid', 'list' ],
                            themeSystem: 'bootstrap',

                            isRTL: KTUtil.isRTL(),

                            header: {
                                left: 'prev,next today',
                                center: 'title',
                                right: 'dayGridMonth,timeGridWeek,timeGridDay'
                            },

                            height: 800,
                            contentHeight: 780,
                            aspectRatio: 3,  // see: https://fullcalendar.io/docs/aspectRatio

                            nowIndicator: true,
                            now: TODAY + 'T09:25:00', // just for demo

                            views: {
                                dayGridMonth: { buttonText: 'month' },
                                timeGridWeek: { buttonText: 'week' },
                                timeGridDay: { buttonText: 'day' }
                            },

                            defaultView: 'dayGridMonth',
                            defaultDate: TODAY,

                            editable: true,
                            eventLimit: true, // allow "more" link when too many events
                            navLinks: true,
                            events: [
                                {
                                    title: 'All Day Event',
                                    start: YM + '-01',
                                    description: 'Toto lorem ipsum dolor sit incid idunt ut',
                                    className: "fc-event-danger fc-event-solid-warning"
                                },
                                {
                                    title: 'Reporting',
                                    start: YM + '-14T13:30:00',
                                    description: 'Lorem ipsum dolor incid idunt ut labore',
                                    end: YM + '-14',
                                    className: "fc-event-success"
                                },
                                {
                                    title: 'Company Trip',
                                    start: YM + '-02',
                                    description: 'Lorem ipsum dolor sit tempor incid',
                                    className: "fc-event-primary"
                                },
                                {
                                    title: 'ICT Expo 2017 - Product Release',
                                    start: YM + '-03',
                                    description: 'Lorem ipsum dolor sit tempor inci',
                                    className: "fc-event-light fc-event-solid-primary"
                                },
                                {
                                    title: 'Dinner',
                                    start: YM + '-12',
                                    description: 'Lorem ipsum dolor sit amet, conse ctetur',
                                },
                                {
                                    id: 999,
                                    title: 'Repeating Event',
                                    start: YM + '-09T16:00:00',
                                    description: 'Lorem ipsum dolor sit ncididunt ut labore',
                                    className: "fc-event-danger"
                                },
                                {
                                    id: 1000,
                                    title: 'Repeating Event',
                                    description: 'Lorem ipsum dolor sit amet, labore',
                                    start: YM + '-16T16:00:00'
                                },
                                {
                                    title: 'Count  ' + "Win Rate",
                                    start: TODAY ,
                                     className: "fc-event-info",
                                    // end: TODAY + 'T12:30:00',
                                    description: 'Lorem ipsum dolor eiu idunt ut labore'
                                },
                                {
                                    title: 'Pnl',
                                    start: TODAY ,
                                    className: "fc-event-info",
                                    description: 'Lorem ipsum dolor sit amet, ut labore'
                                },
                                {
                                    title: 'Max DO',
                                    start: TODAY ,
                                    className: "fc-event-warning",
                                    description: 'Lorem ipsum conse ctetur adipi scing'
                                },
                                {
                                    title: 'Max Gain',
                                    start: TODAY ,
                                    className: "fc-event-info",
                                    description: 'Lorem ipsum dolor sit amet, conse ctetur'
                                },
                                {
                                    title: 'Dinner',
                                    start: TOMORROW ,
                                    className: "fc-event-solid-danger fc-event-light",
                                    description: 'Lorem ipsum dolor sit ctetur adipi scing'
                                },
                                {
                                    title: 'wwwww',
                                    start: TOMORROW ,
                                    className: "fc-event-solid-danger fc-event-light",
                                    description: 'Lorem ipsum dolor sit ctetur adipi scing'
                                },
                                {
                                    title: 'Birthday Party',
                                    start: TOMORROW + 'T07:00:00',
                                    className: "fc-event-primary",
                                    description: 'Lorem ipsum dolor sit amet, scing'
                                },
                                {
                                    title: 'Click for Google',
                                    url: 'http://google.com/',
                                    start: YM + '-28',
                                    className: "fc-event-solid-info fc-event-light",
                                    description: 'Lorem ipsum dolor sit amet, labore'
                                }
                            ],
                        });

                        calendar.render();
                    }
                };
            }();
            // jQuery(document).ready(function() {
            //     KTCalendarBasic.init();
            // });
    </script>	
   @endsection 
@endsection
