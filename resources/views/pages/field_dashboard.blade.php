@extends('full')

@section('main')

    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <i class="icon-arrow-left52 position-left"></i><span class="text-semibold">Field Dashboard</span>
                    </h5>
                </div>

            </div>

            <div class="breadcrumb-line" id="mydiv">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="icon-home2 position-left"></i> Home</a></li>
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Field Dashboard</li>
                </ul>
                <ul class="breadcrumb-elements">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-tree position-left"></i>
                            Select a Field
                            <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="/field-dashboard/all"><i class="fa fa-stack"></i> Overall</a></li>
                        @foreach($fields as $field)
                        <li><a href="/field-dashboard/{{$field->field_id}}"><i class="fa fa-pagelines"></i>{{$field->field_name}}</a></li>
                        @endforeach
                        </ul>
                    </li>

                </ul>

            </div>
        </div>
    </div>
    {{--page header ends--}}

    {{--page content starts here--}}
    <div class="content">
       <div class="row">
           <div class="col-sm-12 col-md-6">
               <div class="row">
                   <div class="col-sm-6 col-md-4">
                       <div class="panel panel-body bg-teal-400" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                           <div class="media no-margin">
                               <div class="media-left media-middle">
                                   <i class="icon-pulse2 icon-2x opacity-75"></i>
                               </div>

                               <div class="media-body text-right">
                                   <div class="row text-center">
                                       <span class="text-uppercase text-size-mini">Latex Liters</span>
                                   </div>
                                   <div class="row text-center">
                                       <span class="text-uppercase text-bold text-size-mini">Predicted</span>
                                   </div>
                               </div>
                           </div>
                           <hr>
                           <h3 class="no-margin text-center">{{$predictedLtr}} (L)</h3>
                       </div>
                   </div>
                   <div class="col-sm-6 col-md-4">
                       <div class="panel panel-body bg-blue-400" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                           <div class="media no-margin">
                               <div class="media-left media-middle">
                                   <i class="icon-pulse2 icon-2x opacity-75"></i>
                               </div>

                               <div class="media-body text-right">
                                   <div class="row text-center">
                                       <span class="text-uppercase text-size-mini">Latex Liters</span>
                                   </div>
                                   <div class="row text-center">
                                       <span class="text-uppercase text-bold text-size-mini">Actual</span>
                                   </div>
                               </div>
                           </div>
                           <hr>
                           <h3 class="no-margin text-center">{{$actualLtr}} (L)</h3>
                       </div>
                   </div>
                   <div class="col-sm-6 col-md-4">
                       <div class="panel panel-body bg-orange-400" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                           <div class="media no-margin">
                               <div class="media-left media-middle">
                                   <i class="icon-pulse2 icon-2x opacity-75"></i>
                               </div>

                               <div class="media-body text-right">
                                   <div class="row text-center">
                                       <span class="text-uppercase text-size-mini">Latex Liters</span>
                                   </div>
                                   <div class="row text-center">
                                       <span class="text-uppercase text-bold text-size-mini">Expected</span>
                                   </div>
                               </div>
                           </div>
                           <hr>
                           <h3 class="no-margin text-center">{{$expectedLtr}} (L)</h3>
                       </div>
                   </div>
               </div>
               <!-- Basic column chart -->
               <div class="panel panel-flat">
                   <div class="panel-body">
                       <div class="container-fluid">
                           <div id="latex-liters" style="width:100%; height:300px;"></div>
                       </div>
                   </div>
               </div>
               <!-- /basic column chart -->
           </div>
           <div class="col-sm-12 col-md-6">
               <div class="row">
                   <div class="col-sm-6 col-md-4">
                       <div class="panel panel-body bg-teal-400" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                           <div class="media no-margin">
                               <div class="media-left media-middle">
                                   <i class="icon-pulse2 icon-2x opacity-75"></i>
                               </div>

                               <div class="media-body text-right">
                                   <div class="row text-center">
                                       <span class="text-uppercase text-size-mini">Latex Kilos</span>
                                   </div>
                                   <div class="row text-center">
                                       <span class="text-uppercase text-bold text-size-mini">Predicted</span>
                                   </div>
                               </div>
                           </div>
                           <hr>
                           <h3 class="no-margin text-center">{{$predictedKg}} (KG)</h3>
                       </div>
                   </div>
                   <div class="col-sm-6 col-md-4">
                       <div class="panel panel-body bg-blue-400" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                           <div class="media no-margin">
                               <div class="media-left media-middle">
                                   <i class="icon-pulse2 icon-2x opacity-75"></i>
                               </div>

                               <div class="media-body text-right">
                                   <div class="row text-center">
                                       <span class="text-uppercase text-size-mini">Latex Kilos</span>
                                   </div>
                                   <div class="row text-center">
                                       <span class="text-uppercase text-bold text-size-mini">Actual</span>
                                   </div>
                               </div>
                           </div>
                           <hr>
                           <h3 class="no-margin text-center">{{$actualKg}} (KG)</h3>
                       </div>
                   </div>
                   <div class="col-sm-6 col-md-4">
                       <div class="panel panel-body bg-orange-400" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                           <div class="media no-margin">
                               <div class="media-left media-middle">
                                   <i class="icon-pulse2 icon-2x opacity-75"></i>
                               </div>

                               <div class="media-body text-right">
                                   <div class="row text-center">
                                       <span class="text-uppercase text-size-mini">Latex Kilos</span>
                                   </div>
                                   <div class="row text-center">
                                       <span class="text-uppercase text-bold text-size-mini">Expected</span>
                                   </div>
                               </div>
                           </div>
                           <hr>
                           <h3 class="no-margin text-center">{{$expectedKg}} (KG)</h3>
                       </div>
                   </div>
               </div>
               <!-- Basic column chart -->
               <div class="panel panel-flat">
                   <div class="panel-body">
                       <div class="container-fluid">
                           <div id="latex-kilos" style="width:100%; height:300px;"></div>
                       </div>
                   </div>
               </div>
               <!-- /basic column chart -->
           </div>
       </div>

        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="panel text-center bg-brown-700" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                    <div class="panel-body">
                        <h6 class="text-semibold no-margin-bottom mt-5" id="todData">20th Jan 2021</h6>
                        <div class="opacity-75 content-group" id="todCity">KANDY</div>
                        <img src="http://openweathermap.org/img/w/.png" id="todIcon" alt="Weather Icon">
                        <div class="opacity-75 content-group" id="todWeatherDec">Weather</div>
                    </div>

                    <div class="panel-body panel-body-accent pb-15">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Rainfall</div>
                                <h5 class="text-semibold no-margin" id="todRainfall">55.0mm</h5>
                            </div>

                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Temp</div>
                                <h5 class="text-semibold no-margin" id="todTemp">23°C</h5>
                            </div>

                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Humidity</div>
                                <h5 class="text-semibold no-margin" id="todHumidity">93%</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none md-block col-md-9">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="panel panel-body bg-teal-400" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                                <div class="media no-margin">
                                    <div class="media-left media-middle">
                                        <img src="http://openweathermap.org/img/w/.png" id="secDayIcon" alt="Weather Icon">
                                    </div>

                                    <div class="media-body text-right">
                                        <div class="row text-center">
                                            <span class="text-uppercase text-bold text-size-large" id="secDayDate">12th Jan 2021</span>
                                        </div>
                                        <div class="row text-center">
                                            <span class="text-uppercase text-size-base" id="secDayWeatherDec">Weather</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Rainfall</div>
                                        <h5 class="text-semibold no-margin" id="secDayRainfall">55.0mm</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Temp</div>
                                        <h5 class="text-semibold no-margin" id="secDayTemp">23°C</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Humidity</div>
                                        <h5 class="text-semibold no-margin" id="secDayHumidity">93%</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="panel panel-body bg-teal-400" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                                <div class="media no-margin">
                                    <div class="media-left media-middle">
                                        <img src="http://openweathermap.org/img/w/.png" id="thirdDayIcon" alt="Weather Icon">
                                    </div>

                                    <div class="media-body text-right">
                                        <div class="row text-center">
                                            <span class="text-uppercase text-bold text-size-mini" id="thirdDayDate">12th Jan 2021</span>
                                        </div>
                                        <div class="row text-center">
                                            <span class="text-uppercase text-size-base" id="thirdDayWeatherDec">Weather</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Rainfall</div>
                                        <h5 class="text-semibold no-margin" id="thirdDayRainfall">55.0mm</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Temp</div>
                                        <h5 class="text-semibold no-margin" id="thirdDayTemp">23°C</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Humidity</div>
                                        <h5 class="text-semibold no-margin" id="thirdDayHumidity">93%</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="panel panel-body bg-teal-400" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                                <div class="media no-margin">
                                    <div class="media-left media-middle">
                                        <img src="http://openweathermap.org/img/w/.png" id="fourthDayIcon" alt="Weather Icon">
                                    </div>

                                    <div class="media-body text-right">
                                        <div class="row text-center">
                                            <span class="text-uppercase text-bold text-size-mini" id="fourthDayDate">12th Jan 2021</span>
                                        </div>
                                        <div class="row text-center">
                                            <span class="text-uppercase text-size-base" id="fourthDayWeatherDec">Weather</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Rainfall</div>
                                        <h5 class="text-semibold no-margin" id="fourthDayRainfall">55.0mm</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Temp</div>
                                        <h5 class="text-semibold no-margin" id="fourthDayTemp">23°C</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Humidity</div>
                                        <h5 class="text-semibold no-margin" id="fourthDayHumidity">93%</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="panel panel-body bg-teal-400" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                                <div class="media no-margin">
                                    <div class="media-left media-middle">
                                        <img src="http://openweathermap.org/img/w/.png" id="fifthDayIcon" alt="Weather Icon">
                                    </div>

                                    <div class="media-body text-right">
                                        <div class="row text-center">
                                            <span class="text-uppercase text-bold text-size-mini" id="fifthDayDate">12th Jan 2021</span>
                                        </div>
                                        <div class="row text-center">
                                            <span class="text-uppercase text-size-base" id="fifthDayWeatherDec">Weather</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Rainfall</div>
                                        <h5 class="text-semibold no-margin" id="fifthDayRainfall">55.0mm</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Temp</div>
                                        <h5 class="text-semibold no-margin" id="fifthDayTemp">23°C</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Humidity</div>
                                        <h5 class="text-semibold no-margin" id="fifthDayHumidity">93%</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="panel panel-body bg-teal-400" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                                <div class="media no-margin">
                                    <div class="media-left media-middle">
                                        <img src="http://openweathermap.org/img/w/.png" id="sixthDayIcon" alt="Weather Icon">
                                    </div>

                                    <div class="media-body text-right">
                                        <div class="row text-center">
                                            <span class="text-uppercase text-bold text-size-mini" id="sixthDayDate">12th Jan 2021</span>
                                        </div>
                                        <div class="row text-center">
                                            <span class="text-uppercase text-size-base" id="sixthDayWeatherDec">Weather</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Rainfall</div>
                                        <h5 class="text-semibold no-margin" id="sixthDayRainfall">55.0mm</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Temp</div>
                                        <h5 class="text-semibold no-margin" id="sixthDayTemp">23</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Humidity</div>
                                        <h5 class="text-semibold no-margin" id="sixthDayHumidity">93</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="panel panel-body bg-teal-400" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                                <div class="media no-margin">
                                    <div class="media-left media-middle">
                                        <img src="http://openweathermap.org/img/w/.png" id="seventhDayIcon" alt="Weather Icon">
                                    </div>

                                    <div class="media-body text-right">
                                        <div class="row text-center">
                                            <span class="text-uppercase text-bold text-size-mini" id="seventhDayDate">12th Jan 2021</span>
                                        </div>
                                        <div class="row text-center">
                                            <span class="text-uppercase text-size-base" id="seventhDayWeatherDec">Weather</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Rainfall</div>
                                        <h5 class="text-semibold no-margin" id="seventhDayRainfall"></h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Temp</div>
                                        <h5 class="text-semibold no-margin" id="seventhDayTemp"></h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Humidity</div>
                                        <h5 class="text-semibold no-margin" id="seventhDayHumidity"></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="row">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label class="control-label col-lg-2">From Date :</label>
                                <div class="col-lg-10">
                                    <input type="date" name="fromdate" id="fromdate" placeholder="Select the from date.." class="form-control mspborder required">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label class="control-label col-lg-2">To Date :</label>
                                <div class="col-lg-10">
                                    <input type="date" name="todate" id="todate" placeholder="Select the to date.." class="form-control mspborder required">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="panel-body">
                    <div class="col-sm-12 col-md-6">

                                <div class="row ">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="panel panel-body bg-green-800" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                                            <div class="media no-margin">
                                                <div class="media-left media-middle">
                                                    <i class="icon-pulse2 icon-2x opacity-75"></i>
                                                </div>

                                                <div class="media-body text-right">
                                                    <div class="row text-center">
                                                        <span class="text-uppercase text-size-mini">Latex Liters</span>
                                                    </div>
                                                    <div class="row text-center">
                                                        <span class="text-uppercase text-bold text-size-mini">EXPECTED</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <h3 class="no-margin text-center">652.25 (L)</h3>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="panel panel-body bg-green-600" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                                            <div class="media no-margin">
                                                <div class="media-left media-middle">
                                                    <i class="icon-pulse2 icon-2x opacity-75"></i>
                                                </div>

                                                <div class="media-body text-right">
                                                    <div class="row text-center">
                                                        <span class="text-uppercase text-size-mini">Latex Liters</span>
                                                    </div>
                                                    <div class="row text-center">
                                                        <span class="text-uppercase text-bold text-size-mini">ACTUAL</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <h3 class="no-margin text-center">652.25 (L)</h3>
                                        </div>
                                    </div>
                                </div>

                        <!-- Multiple donut charts -->
                        <div class="panel panel-flat">

                            <div class="panel-body">
                                <div class="chart-container has-scroll">
                                    <div class="chart " id="pie_latex_liters" style="width:100%; height:300px;"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /multiple donut charts -->

                    </div>

                    <div class="col-sm-12 col-md-6">

                                <div class="row ">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="panel panel-body bg-green-800" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                                            <div class="media no-margin">
                                                <div class="media-left media-middle">
                                                    <i class="icon-pulse2 icon-2x opacity-75"></i>
                                                </div>

                                                <div class="media-body text-right">
                                                    <div class="row text-center">
                                                        <span class="text-uppercase text-size-mini">Latex Kilos</span>
                                                    </div>
                                                    <div class="row text-center">
                                                        <span class="text-uppercase text-bold text-size-mini">EXPECTED</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <h3 class="no-margin text-center">652.25 (KG)</h3>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="panel panel-body bg-green-600" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                                            <div class="media no-margin">
                                                <div class="media-left media-middle">
                                                    <i class="icon-pulse2 icon-2x opacity-75"></i>
                                                </div>
                                                <div class="media-body text-right">
                                                    <div class="row text-center">
                                                        <span class="text-uppercase text-size-mini">Latex Kilos</span>
                                                    </div>
                                                    <div class="row text-center">
                                                        <span class="text-uppercase text-bold text-size-mini">ACTUAL</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <h3 class="no-margin text-center">652.25 (KG)</h3>
                                        </div>
                                    </div>
                                </div>

                        <!-- Multiple donut charts -->
                        <div class="panel panel-flat">

                            <div class="panel-body">
                                <div class="chart-container ">
                                    <div class="chart " id="pie_latex_kilos" style="width:100%; height:300px;"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /multiple donut charts -->

                    </div>
                </div>

            </div>
        </div>
    </div>


    {{--page content ends--}}

    <script type="text/javascript">


        $(document).ready(function() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition((response) => {
                    console.log(response.coords.latitude);
                    $("#lon").val(response.coords.longitude);
                    $("#lat").val(response.coords.latitude);
                    $.ajax({
                        method: "GET",
                        url: `https://api.openweathermap.org/data/2.5/onecall?lat=${response.coords.latitude}&lon=${response.coords.longitude}&appid=9a049524ce8666fe5de16ab5c9d611e6`,
                    }).done(function (data) {
                        console.log(data);

                $("#todCity").html(data.current.name);
                $("#todWeatherDec").html(data.current.weather[0].description);
                $("#todRainfall").html(data.current.clouds +' '+"<span style='font-size : 11px'>mm</span>");
                var todayTemp = Number(data.current.temp - 273.15);
                $("#todTemp").html(todayTemp.toFixed(2)+''+"°<span style='font-size : 11px'>C</span>");
                // $("#todTemp").html(Math.round(data.current.temp - 273.15)+''+"");
                $("#todHumidity").html(data.current.humidity+''+"<span style='font-size : 11px'>%</span>");
                $("#todIcon").attr('src', `http://openweathermap.org/img/wn/${data.current.weather[0].icon}@2x.png`);
                var todayDate = new Date(Number(data.current.dt) * 1000).toLocaleDateString("en-US");
                $("#todData").html(todayDate);


                $("#secDayWeatherDec").html(data.daily[1].weather[0].description);
                $("#secDayRainfall").html(data.daily[1].rain +''+"<span style='font-size : 11px'>mm</spanmm");
                var secondTemp = Number(data.daily[1].temp.morn - 273.15);
                $("#secDayTemp").html(secondTemp.toFixed(2)+''+"°<span style='font-size : 11px'>C</span>");
                $("#secDayHumidity").html(data.daily[1].humidity+' '+"%");
                $("#secDayIcon").attr('src', `http://openweathermap.org/img/wn/${data.daily[1].weather[0].icon}.png`);
                var secDayDate = new Date(Number(data.daily[1].dt) * 1000).toLocaleDateString("en-US");
                $("#secDayDate").html(secDayDate);

                $("#thirdDayWeatherDec").html(data.daily[2].weather[0].description);
                $("#thirdDayRainfall").html(data.daily[2].rain +''+"<span style='font-size : 11px'>mm</spanmm");
                var thirdTemp = Number(data.daily[2].temp.morn - 273.15);
                $("#thirdDayTemp").html(thirdTemp.toFixed(2)+''+"°<span style='font-size : 11px'>C</span>");
                $("#thirdDayHumidity").html(data.daily[2].humidity+' '+"%");
                $("#thirdDayIcon").attr('src', `http://openweathermap.org/img/wn/${data.daily[2].weather[0].icon}.png`);
                var thirdDayDate = new Date(Number(data.daily[2].dt) * 1000).toLocaleDateString("en-US");
                $("#thirdDayDate").html(thirdDayDate);

                $("#fourthDayWeatherDec").html(data.daily[3].weather[0].description);
                $("#fourthDayRainfall").html(data.daily[3].rain +''+"<span style='font-size : 11px'>mm</spanmm");
                var fourthTemp = Number(data.daily[3].temp.morn - 273.15);
                $("#fourthDayTemp").html(fourthTemp.toFixed(2)+''+"°<span style='font-size : 11px'>C</span>");
                $("#fourthDayHumidity").html(data.daily[3].humidity+' '+"%");
                $("#fourthDayIcon").attr('src', `http://openweathermap.org/img/wn/${data.daily[3].weather[0].icon}.png`);
                var fourthDayDate = new Date(Number(data.daily[3].dt) * 1000).toLocaleDateString("en-US");
                $("#fourthDayDate").html(fourthDayDate);

                $("#fifthDayWeatherDec").html(data.daily[4].weather[0].description);
                $("#fifthDayRainfall").html(data.daily[4].rain +''+"<span style='font-size : 11px'>mm</spanmm");
                var fifthTemp = Number(data.daily[4].temp.morn - 273.15);
                $("#fifthDayTemp").html(fifthTemp.toFixed(2)+''+"°<span style='font-size : 11px'>C</span>");
                $("#fifthDayHumidity").html(data.daily[4].humidity+' '+"%");
                $("#fifthDayIcon").attr('src', `http://openweathermap.org/img/wn/${data.daily[4].weather[0].icon}.png`);
                var fifthDayDate = new Date(Number(data.daily[4].dt) * 1000).toLocaleDateString("en-US");
                $("#fifthDayDate").html(fifthDayDate);

                $("#sixthDayWeatherDec").html(data.daily[5].weather[0].description);
                $("#sixthDayRainfall").html(data.daily[5].rain +''+"<span style='font-size : 11px'>mm</spanmm");
                var sixthTemp = Number(data.daily[5].temp.morn - 273.15);
                $("#sixthDayTemp").html(sixthTemp.toFixed(2)+''+"°<span style='font-size : 11px'>C</span>");
                $("#sixthDayHumidity").html(data.daily[5].humidity+' '+"%");
                $("#sixthDayIcon").attr('src', `http://openweathermap.org/img/wn/${data.daily[5].weather[0].icon}.png`);
                var sixthDayDate = new Date(Number(data.daily[5].dt) * 1000).toLocaleDateString("en-US");
                $("#sixthDayDate").html(sixthDayDate);

                $("#sixthDayWeatherDec").html(data.daily[5].weather[0].description);
                $("#sixthDayRainfall").html(data.daily[5].rain +''+"<span style='font-size : 11px'>mm</spanmm");
                var sixthTemp = Number(data.daily[5].temp.morn - 273.15);
                $("#sixthDayTemp").html(sixthTemp.toFixed(2)+''+"°<span style='font-size : 11px'>C</span>");
                $("#sixthDayHumidity").html(data.daily[5].humidity+' '+"%");
                $("#sixthDayIcon").attr('src', `http://openweathermap.org/img/wn/${data.daily[5].weather[0].icon}.png`);
                var sixthDayDate = new Date(Number(data.daily[5].dt) * 1000).toLocaleDateString("en-US");
                $("#sixthDayDate").html(sixthDayDate);

                $("#seventhDayWeatherDec").html(data.daily[6].weather[0].description);
                $("#seventhDayRainfall").html(data.daily[6].rain +''+"<span style='font-size : 11px'>mm</spanmm");
                var seventhTemp = Number(data.daily[6].temp.morn - 273.15);
                $("#seventhDayTemp").html(seventhTemp.toFixed(2)+''+"°<span style='font-size : 11px'>C</span>");
                $("#seventhDayHumidity").html(data.daily[6].humidity+' '+"%");
                $("#seventhDayIcon").attr('src', `http://openweathermap.org/img/wn/${data.daily[6].weather[0].icon}.png`);
                var seventhDayDate = new Date(Number(data.daily[6].dt) * 1000).toLocaleDateString("en-US");
                $("#seventhDayDate").html(seventhDayDate);


            }).fail(function () {
                messageErrorAlert("Error while retrieving weather data");
            });
        }, (error) => {
            console.log(error);
                });
            } else {
                console.log("Geolocation is not supported by this browser.");
            }
        });

        {{-------------------------------- chart 01 ---------------- >> latex liters--}}

        // based on prepared DOM, initialize echarts instance
        var myChart = echarts.init(document.getElementById('latex-liters'));

        // specify chart configuration item and data
        var option = {
            title: {
                text: 'Latex Liters'
            },
            tooltip: {},
            xAxis: {
                data: ["Predicted","Actual","Expected"]
            },
            yAxis: {},
            series: [{
                name: 'Latex Liters',
                type: 'bar',
                data: [
                    {
                        value: {{$predictedLtr}},
                        itemStyle: {
                            color: '#32aa9f'
                        }
                    },
                    {
                        value: 0,
                        itemStyle: {
                            color: '#33b7f4'
                        }
                    },
                    {
                        value: {{$expectedLtr}},
                        itemStyle: {
                            color: '#fca930'
                        }
                    }
                ],
                showBackground: true,
                backgroundStyle: {
                    color: 'rgba(180, 180, 180, 0.2)'
                }
            }]
        };

        // use configuration item and data specified to show chart
        myChart.setOption(option);

        {{-------------------------------- chart 02 ----------------- >> latex Killos--}}

        // based on prepared DOM, initialize echarts instance
        var myChart = echarts.init(document.getElementById('latex-kilos'));

        // specify chart configuration item and data
        var option = {
            title: {
                text: 'Latex Kilos'
            },
            tooltip: {},
            xAxis: {
                data: ["Predicted","Actual","Expected"]
            },
            yAxis: {},
            series: [{
                name: 'Latex Liters',
                type: 'bar',
                data: [
                    {
                        value: {{$predictedKg}},
                        itemStyle: {
                            color: '#32aa9f'
                        }
                    },
                    {
                        value: 0,
                        itemStyle: {
                            color: '#33b7f4'
                        }
                    },
                    {
                        value: {{$expectedKg}},
                        itemStyle: {
                            color: '#fca930'
                        }
                    }
                ],
                showBackground: true,
                backgroundStyle: {
                    color: 'rgba(180, 180, 180, 0.2)'
                }
            }]
        };

        // use configuration item and data specified to show chart
        myChart.setOption(option);


        {{--------------------------------- chart 03 ----------------- >>pie latex liters--}}
        // Pie latex liters
            var latex_liters_pie = document.getElementById('pie_latex_liters');

            // Initialize chart
            var pie_latex_liters = echarts.init(latex_liters_pie);
            //
            // Chart config
            //

            // Top text label
            var labelTop = {
                show: true,
                position: 'center',
                formatter: '{b}\n',
                fontSize: 15,
                lineHeight: 50,
                rich: {
                    a: {}
                }
            };

            // Background item style
            var backStyle = {
                color: '#eee',
                emphasis: {
                    color: '#eee'
                }
            };

            // Bottom text label
            var labelBottom = {
                color: '#333',
                show: true,
                position: 'center',
                formatter: function (params) {
                    return '\n\n' + (100 - params.value) + '%'
                },
                fontWeight: 500,
                lineHeight: 35,
                rich: {
                    a: {}
                },
                emphasis: {
                    color: '#333'
                }
            };

            // Set inner and outer radius
            var radius = [52, 65];

            // Options
            pie_latex_liters.setOption({

                // Colors
                color: [
                    '#7cb342',
                    '#558b2f'
                ],

                // Global text styles
                textStyle: {
                    fontFamily: 'Roboto, Arial, Verdana, sans-serif',
                    fontSize: 13
                },

                // Add title
                title: {
                    text: 'Received Latex Liters Percentage',
                    subtext: 'As per the expected value',
                    left: 'center',
                    textStyle: {
                        fontSize: 17,
                        fontWeight: 500
                    },
                    subtextStyle: {
                        fontSize: 12
                    }
                },

                // Add legend
                legend: {
                    bottom: 0,
                    left: 'center',
                    data: ['Latex Liters'],
                    itemHeight: 10,
                    itemWidth: 10,
                    selectedMode: false
                },

                // Add series
                series: [
                    {
                        type: 'pie',
                        center: ['50%', '50%'],
                        radius: radius,
                        hoverAnimation: false,
                        data: [
                            {name: 'other', value: 40, label: labelBottom, itemStyle: backStyle},
                            {name: 'Latex Liters', value: 60, label: labelTop}
                        ]
                    },
                ]
            });


        {{-------------------------------- chart 04 ------------------- >>pie latex kilos--}}
        // Pie latex kilos
        var latex_kilos_pie = document.getElementById('pie_latex_kilos');

        // Initialize chart
        var pie_latex_kilos = echarts.init(latex_kilos_pie);


        //
        // Chart config
        //

        // Top text label
        var labelTop = {
            show: true,
            position: 'center',
            formatter: '{b}\n',
            fontSize: 15,
            lineHeight: 50,
            rich: {
                a: {}
            }
        };

        // Background item style
        var backStyle = {
            color: '#eee',
            emphasis: {
                color: '#eee'
            }
        };

        // Bottom text label
        var labelBottom = {
            color: '#333',
            show: true,
            position: 'center',
            formatter: function (params) {
                return '\n\n' + (100 - params.value) + '%'
            },
            fontWeight: 500,
            lineHeight: 35,
            rich: {
                a: {}
            },
            emphasis: {
                color: '#333'
            }
        };

        // Set inner and outer radius
        var radius = [52, 65];

        // Options
        pie_latex_kilos.setOption({

            // Colors
            color: [
                '#f69241',
                '#f3852c'
            ],

            // Global text styles
            textStyle: {
                fontFamily: 'Roboto, Arial, Verdana, sans-serif',
                fontSize: 13
            },

            // Add title
            title: {
                text: 'Received Latex Kilos Percentage',
                subtext: 'As per the expected value',
                left: 'center',
                textStyle: {
                    fontSize: 17,
                    fontWeight: 500
                },
                subtextStyle: {
                    fontSize: 12
                }
            },

            // Add legend
            legend: {
                bottom: 0,
                left: 'center',
                data: ['Latex Liters'],
                itemHeight: 10,
                itemWidth: 10,
                selectedMode: false
            },

            // Add series
            series: [
                {
                    type: 'pie',
                    center: ['50%', '50%'],
                    radius: radius,
                    hoverAnimation: false,
                    data: [
                        {name: 'other', value: 20, label: labelBottom, itemStyle: backStyle},
                        {name: 'Latex Liters', value: 80, label: labelTop}
                    ]
                },
            ]
        });

    </script>
@endsection

