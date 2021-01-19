@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <span class="text-semibold">Hospital Configuration</span>
                    </h5>
                </div>

                <div class="heading-elements">
                    <button class="btn btn-link btn-icon btn-sm heading-btn"><i class="icon-gear"></i></button>
                </div>
            </div>

            <div class="breadcrumb-line" id="mydiv">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="icon-home2 position-left"></i> Home</a></li>
                    <li><a href=#">Configurations</a></li>
                    <li class="active">Hospital Configurations</li>
                </ul>

                <ul class="breadcrumb-elements">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-cog5 position-left"></i>
                            Actions
                            <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#"><i class="icon-inbox pull-right"></i> Action</a></li>
                            <li><a href="#"><i class="icon-googleplus5 pull-right"></i> Another action</a></li>
                            <li><a href="#"><i class="icon-grid-alt pull-right"></i> Something else</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-spinner2 spinner pull-right"></i> One more line</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    {{--page header ends--}}

    {{--page content starts here--}}
    <div class="content">
        {{--page top cards--}}
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-body bg-blue-600 has-bg-image">
                    <div class="media no-margin">
                        <div class="media-body">
                            <h3 class="no-margin">PMMS00001</h3>
                            <span class="text-uppercase text-size-small">Employee ID</span>
                        </div>

                        <div class="media-right media-middle">
                            <i class="icon-vcard icon-3x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-body bg-blue-600 has-bg-image">
                    <div class="media no-margin">
                        <div class="media-body">
                            <h3 class="no-margin">IT Unit</h3>
                            <span class="text-uppercase text-size-small">Division</span>
                        </div>

                        <div class="media-right media-middle">
                            <i class="icon-location4 icon-3x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-body bg-blue-600 has-bg-image">
                    <div class="media no-margin">
                        <div class="media-body">
                            <h3 class="no-margin">{{ date('Y-m-d H:i:s') }}</h3>
                            <span class="text-uppercase text-size-small">Date / Time</span>
                        </div>

                        <div class="media-right media-middle">
                            <i class="icon-calendar icon-3x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--/page top cards--}}


        <div class="row">
            <div class="col-sm-12">

                <!-- Wizard with validation -->
                <div class="panel panel-white">

                        <form class="stepy-basic" action="#">
                            <fieldset title="1">
                                <legend class="text-semibold">Basic data</legend>
                                <div class="row mspwizarddiv">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>Hospital Name: <span class="text-danger">*</span></label>
                                                <input type="text" name="hospital-name" class="form-control mspborder required" placeholder="Name of the Hospital">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>Address: <span class="text-danger">*</span></label>
                                                <input type="text" name="hospital-address" class="form-control mspborder required" placeholder="John Doe">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>Letter Head : </label>
                                                <div>
                                                    <input type="file" id="letter-head" name="letter-head">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <img src="{{asset('images/thankyou.jpg')}}" height ="250px"  />
                                        </div>
                                    </div>
                                </div>

                            </fieldset>

                            <fieldset title="2">
                                <legend class="text-semibold">Contact Details</legend>
                                <div class="row mspwizarddiv">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label for="hotline1"> Hotline 01 : <span class="text-danger">*</span> </label>
                                                <input type="text" name="hotline1" id="hotline1" class="form-control mspborder required" placeholder="+94-81-2256-978" data-mask="(+99)-99-9999-999">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label for="hos_tel1"> Phone No. 01 :</label>
                                                <input type="text" name="hos_tel1" id="hos_tel1" class="form-control mspborder required" placeholder="+94-81-2256-978" data-mask="(+99)-99-9999-999">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label for="hosfax1"> Fax 01 :</label>
                                                <input type="text" name="hosfax1" id="hosfax1" class="form-control mspborder required" placeholder="+94-81-2256-978" data-mask="(+99)-99-9999-999">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label for="hosemail1"> Email 01 :</label>
                                                <input type="text" name="hosemail1" id="hosemail1" class="form-control mspborder required" placeholder="prasad@gmail.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label for="hotline2"> Hotline 02  : <span class="text-danger">*</span> </label>
                                                <input type="text" name="hotline2" id="hotline2" class="form-control mspborder required" placeholder="+94-81-2256-978" data-mask="(+99)-99-9999-999">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label for="hos_tel2"> Phone No. 02 :</label>
                                                <input type="text" name="hos_tel2" id="hos_tel2" class="form-control mspborder required" placeholder="+94-81-2256-978" data-mask="(+99)-99-9999-999">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label for="hosfax2"> Fax 02 :</label>
                                                <input type="text" name="hosfax2" id="hosfax2" class="form-control mspborder required" placeholder="+94-81-2256-978" data-mask="(+99)-99-9999-999">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label for="hosemail2"> Email 02:</label>
                                                <input type="text" name="hosemail2" id="hosemail2" class="form-control mspborder required" placeholder="prasad@gmail.com">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </fieldset>

                            <button type="submit" class="btn btn-primary stepy-finish">Submit <i class="icon-check position-right"></i></button>
                        </form>


                </div>
                <!-- /wizard with validation -->


            </div>
        </div>

        <div class="row">
            <!-- Basic initialization -->
            <div class="col-sm-12">
                <div class="panel panel-flat mspdatatablediv">
                    <div class="panel-body" hidden>

                    </div>
                    <div>

                        <table style="font-size: 13px;" class="table table-msphover datatable-button-html5-basic" id="organization-details">
                            <thead>
                                <tr class="bg-teal-400" style="font-size: 16px; font-weight: bold;">
                                    <th>#</th>
                                    <th>Hospital Name</th>
                                    <th>Address</th>
                                    <th>Hot Line 01/02</th>
                                    <th>Phone No 01/02</th>
                                    <th>Fax 01/02</th>
                                    <th>Email 01/02</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <!-- /basic initialization -->
                    </div>
                </div>
            </div>


        </div>
    </div>
    {{--page content ends--}}


    <script>

        //----------------------------------------------------------------------------Wizard setup-----------------------------------------------------------------------------

        $.fn.stepy.defaults.legend = false;
        $.fn.stepy.defaults.transition = 'fade';
        $.fn.stepy.defaults.duration = 150;
        $.fn.stepy.defaults.backLabel = '<i class="icon-arrow-left13 position-left"></i> Back';
        $.fn.stepy.defaults.nextLabel = 'Next <i class="icon-arrow-right14 position-right"></i>';

        $(".stepy-basic").stepy({
            titleClick: true,
            validate: true,
            block: true,
            next: function (index) {

            },
            back: function (index) {

            },
            finish: function () {

            }
        });

        $('.stepy-step').find('.button-next').addClass('btn btn-primary');
        $('.stepy-step').find('.button-back').addClass('btn btn-default');

        //----------------------------------------------------------------------------Wizard setup -----------------------------------------------------------------------------
   </script>
@endsection

