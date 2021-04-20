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
                    <div class="heading-elements">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                <input type="text" class="form-control daterange-basic" value="">
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

                                <!-- Basic column chart -->
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">Latex Liters</h5>
                                    </div>

                                    <div class="panel-body">

                                    </div>
                                </div>
                                <!-- /basic column chart -->

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

                                <!-- Basic column chart -->
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">Latex Kilos</h5>
                                    </div>

                                    <div class="panel-body">
                                    </div>
                                </div>
                                <!-- /basic column chart -->

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



        {{-- chart >> latex liters--}}

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

        {{-- chart >> latex Killos--}}

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
    </script>
@endsection

