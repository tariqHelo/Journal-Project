@extends('layouts.admin')

@section('content')
 @include('shared.msg')
    <div class="card card-custom">
        <div class="card-body">
            {{-- <canvas id="myChart"></canvas> --}}
            <div id="calendar"></div>
        </div>
    </div>
    <!--end::Card-->
    <div class="example example-compact my-5">

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
    </div>
   @section('js')
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
            
            var KTCalendarBasic = function() {
                return {
                    //main function to initiate the module
                    init: function() {
                        var todayDate = moment().startOf('day');
                        var YM = todayDate.format('YYYY-MM');
                        // var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
                        var TODAY = todayDate.format('YYYY-MM-DD');
                        // var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');
                        var calendarEl = document.getElementById('calendar');
                        fetch("{{route('calender.index')}}")
                            .then((response) => response.json())
                            .then((data) => {
                            console.log(data.events);
                            const calendar = new FullCalendar.Calendar(calendarEl, {
                            plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid', 'list' ],
                            themeSystem: 'bootstrap',
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

                            // editable: true,
                            // eventLimit: true, // allow "more" link when too many events
                            // navLinks: true,
                            events: data.events
                        });
                        calendar.render();
                        });
                        
                    }
                };
            }();
            // jQuery(document).ready(function() {
            //     KTCalendarBasic.init();
            // });
    </script>	
   @endsection 
@endsection
