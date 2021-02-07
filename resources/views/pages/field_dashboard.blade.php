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
                            <li><a href="#"><i class="fa fa-stack"></i> Overall</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-pagelines"></i> 2005</a></li>
                            <li><a href="#"><i class="fa fa-pagelines"></i> 2006</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-pagelines"></i> 2025</a></li>
                            <li><a href="#"><i class="fa fa-pagelines"></i> 2027</a></li>
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
                           <h3 class="no-margin text-center">652.25 (L)</h3>
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
                           <h3 class="no-margin text-center">652.25 (L)</h3>
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
                           <h3 class="no-margin text-center">652.25 (KG)</h3>
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
                           <h3 class="no-margin text-center">652.25 (KG)</h3>
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

        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="panel text-center bg-brown-700" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                    <div class="panel-body">
                        <h6 class="text-semibold no-margin-bottom mt-5">20th Jan 2021</h6>
                        <div class="opacity-75 content-group">KANDY</div>
                        <div class="opacity-75 content-group">01.13 PM</div>
                        <i class="icon-cloud" style="font-size: 54px"></i>
                    </div>

                    <div class="panel-body panel-body-accent pb-15">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Rainfall</div>
                                <h5 class="text-semibold no-margin">55.0mm</h5>
                            </div>

                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Temp</div>
                                <h5 class="text-semibold no-margin">23°C</h5>
                            </div>

                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Humidity</div>
                                <h5 class="text-semibold no-margin">93%</h5>
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
                                        <i class="icon-cloud icon-2x opacity-75"></i>
                                    </div>

                                    <div class="media-body text-right">
                                        <div class="row text-center">
                                            <span class="text-uppercase text-bold text-size-mini">12th Jan 2021</span>
                                        </div>
                                        <div class="row text-center">
                                            <span class="text-uppercase text-size-mini">Kandy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Rainfall</div>
                                        <h5 class="text-semibold no-margin">55.0mm</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Temp</div>
                                        <h5 class="text-semibold no-margin">23°C</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Humidity</div>
                                        <h5 class="text-semibold no-margin">93%</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="panel panel-body bg-teal-400" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                                <div class="media no-margin">
                                    <div class="media-left media-middle">
                                        <i class="icon-cloud icon-2x opacity-75"></i>
                                    </div>

                                    <div class="media-body text-right">
                                        <div class="row text-center">
                                            <span class="text-uppercase text-bold text-size-mini">12th Jan 2021</span>
                                        </div>
                                        <div class="row text-center">
                                            <span class="text-uppercase text-size-mini">Kandy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Rainfall</div>
                                        <h5 class="text-semibold no-margin">55.0mm</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Temp</div>
                                        <h5 class="text-semibold no-margin">23°C</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Humidity</div>
                                        <h5 class="text-semibold no-margin">93%</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="panel panel-body bg-teal-400" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                                <div class="media no-margin">
                                    <div class="media-left media-middle">
                                        <i class="icon-cloud icon-2x opacity-75"></i>
                                    </div>

                                    <div class="media-body text-right">
                                        <div class="row text-center">
                                            <span class="text-uppercase text-bold text-size-mini">12th Jan 2021</span>
                                        </div>
                                        <div class="row text-center">
                                            <span class="text-uppercase text-size-mini">Kandy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Rainfall</div>
                                        <h5 class="text-semibold no-margin">55.0mm</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Temp</div>
                                        <h5 class="text-semibold no-margin">23°C</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Humidity</div>
                                        <h5 class="text-semibold no-margin">93%</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="panel panel-body bg-teal-400" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                                <div class="media no-margin">
                                    <div class="media-left media-middle">
                                        <i class="icon-cloud icon-2x opacity-75"></i>
                                    </div>

                                    <div class="media-body text-right">
                                        <div class="row text-center">
                                            <span class="text-uppercase text-bold text-size-mini">12th Jan 2021</span>
                                        </div>
                                        <div class="row text-center">
                                            <span class="text-uppercase text-size-mini">Kandy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Rainfall</div>
                                        <h5 class="text-semibold no-margin">55.0mm</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Temp</div>
                                        <h5 class="text-semibold no-margin">23°C</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Humidity</div>
                                        <h5 class="text-semibold no-margin">93%</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="panel panel-body bg-teal-400" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                                <div class="media no-margin">
                                    <div class="media-left media-middle">
                                        <i class="icon-cloud icon-2x opacity-75"></i>
                                    </div>

                                    <div class="media-body text-right">
                                        <div class="row text-center">
                                            <span class="text-uppercase text-bold text-size-mini">12th Jan 2021</span>
                                        </div>
                                        <div class="row text-center">
                                            <span class="text-uppercase text-size-mini">Kandy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Rainfall</div>
                                        <h5 class="text-semibold no-margin">55.0mm</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Temp</div>
                                        <h5 class="text-semibold no-margin">23°C</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Humidity</div>
                                        <h5 class="text-semibold no-margin">93%</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="panel panel-body bg-teal-400" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                                <div class="media no-margin">
                                    <div class="media-left media-middle">
                                        <i class="icon-cloud icon-2x opacity-75"></i>
                                    </div>

                                    <div class="media-body text-right">
                                        <div class="row text-center">
                                            <span class="text-uppercase text-bold text-size-mini">12th Jan 2021</span>
                                        </div>
                                        <div class="row text-center">
                                            <span class="text-uppercase text-size-mini">Kandy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Rainfall</div>
                                        <h5 class="text-semibold no-margin">55.0mm</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Temp</div>
                                        <h5 class="text-semibold no-margin">23°C</h5>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="text-uppercase text-size-mini opacity-75">Humidity</div>
                                        <h5 class="text-semibold no-margin">93%</h5>
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
                        <button type="button" class="btn btn-link daterange-ranges heading-btn text-semibold">
                            <i class="icon-calendar3 position-left"></i> <span>January 10 - February 8</span> <b class="caret"></b>
                        </button>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="row ">
                                    <div class="col-sm-6 col-md-12">
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
                                    <div class="col-sm-6 col-md-12">
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
                            </div>
                            <div class="col-sm-8">
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
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="row ">
                                    <div class="col-sm-6 col-md-12">
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
                                    <div class="col-sm-6 col-md-12">
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
                            </div>
                            <div class="col-sm-8">
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
        </div>
    </div>


    {{--page content ends--}}


@endsection

