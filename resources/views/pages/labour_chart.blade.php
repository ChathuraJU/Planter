@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <span class="text-semibold">Labour Chart</span>
                    </h5>
                </div>

            </div>

            <div class="breadcrumb-line" id="mydiv">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="icon-home2 position-left"></i> Home</a></li>
                    <li><a href="#">Labour</a></li>
                    <li class="active">Labour Chart</li>
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
                <div class="panel panel-body bg-yellow-600 has-bg-image">
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
                <div class="panel panel-body bg-yellow-600 has-bg-image">
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
                <div class="panel panel-body bg-yellow-600 has-bg-image">
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

        <div class="panel panel-flat">
            <div class="panel-body">
                <form action="#" class="main-search">
                    <div class="input-group content-group">
                        <div class="has-feedback has-feedback-left">
                            <input type="text" class="form-control input-xlg" value="Search by Name">

                        </div>

                        <div class="input-group-btn">
                            <button type="submit" class="btn bg-green-800 btn-xlg">Search</button>
                        </div>
                    </div>

                </form>

                <div class="row">
                    <div class="col-sm-3">
                        <!-- User details (with sample pattern) -->
                        <div class="content-group" style="min-height: ">
                            <div class="panel-body bg-yellow-600 border-radius-top text-center">

                                <a href="#" class="display-inline-block content-group-sm">
                                    <img src="{{ asset('images/users/1.jpg') }}" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px;">
                                </a>

                                <h5 class="text-semibold no-margin-bottom">
                                    Name
                                </h5>

                                <span class="display-block">EPF No</span>
                                <span class="display-block">NIC</span>

                            </div>

                            <div class="panel panel-body no-border-top no-border-radius-top" style="padding: 5px!important;">

                                <!-- Tabs nav -->
                                <ul class="nav nav-tabs nav-justified no-margin no-border-radius bg-teal-400 border-top border-top-teal-300">
                                    <li class="active">
                                        <a href="#contact" class="text-size-small text-uppercase text-semibold" data-toggle="tab">
                                            Contact Details
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#performance" class="text-size-small text-uppercase text-semibold" data-toggle="tab">
                                            Performance Details
                                        </a>
                                    </li>
                                </ul>
                                <!-- /tabs nav -->


                                <!-- Tabs content -->
                                <div class="tab-content panel-body">
                                    <div class="tab-pane active fade in" id="contact">
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">Full name:</label>--}}
                                        {{--<span class="pull-right-sm">Victoria Anna Davidson</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">EPF No. :</label>--}}
                                        {{--<span class="pull-right-sm"></span>--}}
                                        {{--</div>--}}
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">NIC No. :</label>--}}
                                        {{--<span class="pull-right-sm"></span>--}}
                                        {{--</div>--}}
                                        <div class="cju-form-group mt-5">
                                            <label class="text-semibold">Gender :</label>
                                            <span class="pull-right-sm"></span>
                                        </div>
                                        <div class="cju-form-group">
                                            <label class="text-semibold">D.O.B. :</label>
                                            <span class="pull-right-sm"></span>
                                        </div>
                                        <div class="cju-form-group">
                                            <label class="text-semibold">Contact No. :</label>
                                            <span class="pull-right-sm">+944584538458</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Address :</label>
                                            <span class="pull-right-sm">Kandyu Srilankaa</span>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="performance">
                                        <div class="cju-form-group mt-5">
                                            <label class="text-semibold">Total No. of Liters :</label>
                                            <span class="pull-right-sm">200L</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total No. of Latex Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total No. of Scrap Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total Over Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Salary Paid:</label>
                                            <span class="pull-right-sm">25000 LKR</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /tabs content -->
                            </div>
                        </div>
                        <!-- /user details (with sample pattern) -->
                    </div>
                    <div class="col-sm-3">
                        <!-- User details (with sample pattern) -->
                        <div class="content-group">
                            <div class="panel-body bg-green-600 border-radius-top text-center">

                                <a href="#" class="display-inline-block content-group-sm">
                                    <img src="{{ asset('images/users/1.jpg') }}" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px;">
                                </a>

                                <h5 class="text-semibold no-margin-bottom">
                                    Name
                                </h5>

                                <span class="display-block">EPF No</span>
                                <span class="display-block">NIC</span>

                            </div>

                            <div class="panel panel-body no-border-top no-border-radius-top" style="padding: 5px!important;">

                                <!-- Tabs nav -->
                                <ul class="nav nav-tabs nav-justified no-margin no-border-radius bg-teal-400 border-top border-top-teal-300">
                                    <li class="active">
                                        <a href="#contact" class="text-size-small text-uppercase text-semibold" data-toggle="tab">
                                            Contact Details
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#performance" class="text-size-small text-uppercase text-semibold" data-toggle="tab">
                                            Performance Details
                                        </a>
                                    </li>
                                </ul>
                                <!-- /tabs nav -->


                                <!-- Tabs content -->
                                <div class="tab-content panel-body">
                                    <div class="tab-pane active fade in" id="contact">
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">Full name:</label>--}}
                                        {{--<span class="pull-right-sm">Victoria Anna Davidson</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">EPF No. :</label>--}}
                                        {{--<span class="pull-right-sm"></span>--}}
                                        {{--</div>--}}
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">NIC No. :</label>--}}
                                        {{--<span class="pull-right-sm"></span>--}}
                                        {{--</div>--}}
                                        <div class="cju-form-group mt-5">
                                            <label class="text-semibold">Gender :</label>
                                            <span class="pull-right-sm"></span>
                                        </div>
                                        <div class="cju-form-group">
                                            <label class="text-semibold">D.O.B. :</label>
                                            <span class="pull-right-sm"></span>
                                        </div>
                                        <div class="cju-form-group">
                                            <label class="text-semibold">Contact No. :</label>
                                            <span class="pull-right-sm">+944584538458</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Address :</label>
                                            <span class="pull-right-sm">Kandyu Srilankaa</span>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="performance">
                                        <div class="cju-form-group mt-5">
                                            <label class="text-semibold">Total No. of Liters :</label>
                                            <span class="pull-right-sm">200L</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total No. of Latex Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total No. of Scrap Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total Over Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Salary Paid:</label>
                                            <span class="pull-right-sm">25000 LKR</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /tabs content -->
                            </div>
                        </div>
                        <!-- /user details (with sample pattern) -->
                    </div>
                    <div class="col-sm-3">
                        <!-- User details (with sample pattern) -->
                        <div class="content-group">
                            <div class="panel-body bg-green-600 border-radius-top text-center">

                                <a href="#" class="display-inline-block content-group-sm">
                                    <img src="{{ asset('images/users/1.jpg') }}" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px;">
                                </a>

                                <h5 class="text-semibold no-margin-bottom">
                                    Name
                                </h5>

                                <span class="display-block">EPF No</span>
                                <span class="display-block">NIC</span>

                            </div>

                            <div class="panel panel-body no-border-top no-border-radius-top" style="padding: 5px!important;">

                                <!-- Tabs nav -->
                                <ul class="nav nav-tabs nav-justified no-margin no-border-radius bg-teal-400 border-top border-top-teal-300">
                                    <li class="active">
                                        <a href="#contact" class="text-size-small text-uppercase text-semibold" data-toggle="tab">
                                            Contact Details
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#performance" class="text-size-small text-uppercase text-semibold" data-toggle="tab">
                                            Performance Details
                                        </a>
                                    </li>
                                </ul>
                                <!-- /tabs nav -->


                                <!-- Tabs content -->
                                <div class="tab-content panel-body">
                                    <div class="tab-pane active fade in" id="contact">
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">Full name:</label>--}}
                                        {{--<span class="pull-right-sm">Victoria Anna Davidson</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">EPF No. :</label>--}}
                                        {{--<span class="pull-right-sm"></span>--}}
                                        {{--</div>--}}
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">NIC No. :</label>--}}
                                        {{--<span class="pull-right-sm"></span>--}}
                                        {{--</div>--}}
                                        <div class="cju-form-group mt-5">
                                            <label class="text-semibold">Gender :</label>
                                            <span class="pull-right-sm"></span>
                                        </div>
                                        <div class="cju-form-group">
                                            <label class="text-semibold">D.O.B. :</label>
                                            <span class="pull-right-sm"></span>
                                        </div>
                                        <div class="cju-form-group">
                                            <label class="text-semibold">Contact No. :</label>
                                            <span class="pull-right-sm">+944584538458</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Address :</label>
                                            <span class="pull-right-sm">Kandyu Srilankaa</span>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="performance">
                                        <div class="cju-form-group mt-5">
                                            <label class="text-semibold">Total No. of Liters :</label>
                                            <span class="pull-right-sm">200L</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total No. of Latex Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total No. of Scrap Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total Over Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Salary Paid:</label>
                                            <span class="pull-right-sm">25000 LKR</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /tabs content -->
                            </div>
                        </div>
                        <!-- /user details (with sample pattern) -->
                    </div>
                    <div class="col-sm-3">
                        <!-- User details (with sample pattern) -->
                        <div class="content-group">
                            <div class="panel-body bg-green-600 border-radius-top text-center">

                                <a href="#" class="display-inline-block content-group-sm">
                                    <img src="{{ asset('images/users/1.jpg') }}" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px;">
                                </a>

                                <h5 class="text-semibold no-margin-bottom">
                                    Name
                                </h5>

                                <span class="display-block">EPF No</span>
                                <span class="display-block">NIC</span>

                            </div>

                            <div class="panel panel-body no-border-top no-border-radius-top" style="padding: 5px!important;">

                                <!-- Tabs nav -->
                                <ul class="nav nav-tabs nav-justified no-margin no-border-radius bg-teal-400 border-top border-top-teal-300">
                                    <li class="active">
                                        <a href="#contact" class="text-size-small text-uppercase text-semibold" data-toggle="tab">
                                            Contact Details
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#performance" class="text-size-small text-uppercase text-semibold" data-toggle="tab">
                                            Performance Details
                                        </a>
                                    </li>
                                </ul>
                                <!-- /tabs nav -->


                                <!-- Tabs content -->
                                <div class="tab-content panel-body">
                                    <div class="tab-pane active fade in" id="contact">
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">Full name:</label>--}}
                                        {{--<span class="pull-right-sm">Victoria Anna Davidson</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">EPF No. :</label>--}}
                                        {{--<span class="pull-right-sm"></span>--}}
                                        {{--</div>--}}
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">NIC No. :</label>--}}
                                        {{--<span class="pull-right-sm"></span>--}}
                                        {{--</div>--}}
                                        <div class="cju-form-group mt-5">
                                            <label class="text-semibold">Gender :</label>
                                            <span class="pull-right-sm"></span>
                                        </div>
                                        <div class="cju-form-group">
                                            <label class="text-semibold">D.O.B. :</label>
                                            <span class="pull-right-sm"></span>
                                        </div>
                                        <div class="cju-form-group">
                                            <label class="text-semibold">Contact No. :</label>
                                            <span class="pull-right-sm">+944584538458</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Address :</label>
                                            <span class="pull-right-sm">Kandyu Srilankaa</span>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="performance">
                                        <div class="cju-form-group mt-5">
                                            <label class="text-semibold">Total No. of Liters :</label>
                                            <span class="pull-right-sm">200L</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total No. of Latex Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total No. of Scrap Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total Over Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Salary Paid:</label>
                                            <span class="pull-right-sm">25000 LKR</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /tabs content -->
                            </div>
                        </div>
                        <!-- /user details (with sample pattern) -->
                    </div>
                    <div class="col-sm-3">
                        <!-- User details (with sample pattern) -->
                        <div class="content-group">
                            <div class="panel-body bg-green-600 border-radius-top text-center">

                                <a href="#" class="display-inline-block content-group-sm">
                                    <img src="{{ asset('images/users/1.jpg') }}" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px;">
                                </a>

                                <h5 class="text-semibold no-margin-bottom">
                                    Name
                                </h5>

                                <span class="display-block">EPF No</span>
                                <span class="display-block">NIC</span>

                            </div>

                            <div class="panel panel-body no-border-top no-border-radius-top" style="padding: 5px!important;">

                                <!-- Tabs nav -->
                                <ul class="nav nav-tabs nav-justified no-margin no-border-radius bg-teal-400 border-top border-top-teal-300">
                                    <li class="active">
                                        <a href="#contact" class="text-size-small text-uppercase text-semibold" data-toggle="tab">
                                            Contact Details
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#performance" class="text-size-small text-uppercase text-semibold" data-toggle="tab">
                                            Performance Details
                                        </a>
                                    </li>
                                </ul>
                                <!-- /tabs nav -->


                                <!-- Tabs content -->
                                <div class="tab-content panel-body">
                                    <div class="tab-pane active fade in" id="contact">
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">Full name:</label>--}}
                                        {{--<span class="pull-right-sm">Victoria Anna Davidson</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">EPF No. :</label>--}}
                                        {{--<span class="pull-right-sm"></span>--}}
                                        {{--</div>--}}
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">NIC No. :</label>--}}
                                        {{--<span class="pull-right-sm"></span>--}}
                                        {{--</div>--}}
                                        <div class="cju-form-group mt-5">
                                            <label class="text-semibold">Gender :</label>
                                            <span class="pull-right-sm"></span>
                                        </div>
                                        <div class="cju-form-group">
                                            <label class="text-semibold">D.O.B. :</label>
                                            <span class="pull-right-sm"></span>
                                        </div>
                                        <div class="cju-form-group">
                                            <label class="text-semibold">Contact No. :</label>
                                            <span class="pull-right-sm">+944584538458</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Address :</label>
                                            <span class="pull-right-sm">Kandyu Srilankaa</span>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="performance">
                                        <div class="cju-form-group mt-5">
                                            <label class="text-semibold">Total No. of Liters :</label>
                                            <span class="pull-right-sm">200L</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total No. of Latex Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total No. of Scrap Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total Over Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Salary Paid:</label>
                                            <span class="pull-right-sm">25000 LKR</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /tabs content -->
                            </div>
                        </div>
                        <!-- /user details (with sample pattern) -->
                    </div>
                    <div class="col-sm-3">
                        <!-- User details (with sample pattern) -->
                        <div class="content-group">
                            <div class="panel-body bg-green-600 border-radius-top text-center">

                                <a href="#" class="display-inline-block content-group-sm">
                                    <img src="{{ asset('images/users/1.jpg') }}" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px;">
                                </a>

                                <h5 class="text-semibold no-margin-bottom">
                                    Name
                                </h5>

                                <span class="display-block">EPF No</span>
                                <span class="display-block">NIC</span>

                            </div>

                            <div class="panel panel-body no-border-top no-border-radius-top" style="padding: 5px!important;">

                                <!-- Tabs nav -->
                                <ul class="nav nav-tabs nav-justified no-margin no-border-radius bg-teal-400 border-top border-top-teal-300">
                                    <li class="active">
                                        <a href="#contact" class="text-size-small text-uppercase text-semibold" data-toggle="tab">
                                            Contact Details
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#performance" class="text-size-small text-uppercase text-semibold" data-toggle="tab">
                                            Performance Details
                                        </a>
                                    </li>
                                </ul>
                                <!-- /tabs nav -->


                                <!-- Tabs content -->
                                <div class="tab-content panel-body">
                                    <div class="tab-pane active fade in" id="contact">
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">Full name:</label>--}}
                                        {{--<span class="pull-right-sm">Victoria Anna Davidson</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">EPF No. :</label>--}}
                                        {{--<span class="pull-right-sm"></span>--}}
                                        {{--</div>--}}
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">NIC No. :</label>--}}
                                        {{--<span class="pull-right-sm"></span>--}}
                                        {{--</div>--}}
                                        <div class="cju-form-group mt-5">
                                            <label class="text-semibold">Gender :</label>
                                            <span class="pull-right-sm"></span>
                                        </div>
                                        <div class="cju-form-group">
                                            <label class="text-semibold">D.O.B. :</label>
                                            <span class="pull-right-sm"></span>
                                        </div>
                                        <div class="cju-form-group">
                                            <label class="text-semibold">Contact No. :</label>
                                            <span class="pull-right-sm">+944584538458</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Address :</label>
                                            <span class="pull-right-sm">Kandyu Srilankaa</span>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="performance">
                                        <div class="cju-form-group mt-5">
                                            <label class="text-semibold">Total No. of Liters :</label>
                                            <span class="pull-right-sm">200L</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total No. of Latex Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total No. of Scrap Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total Over Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Salary Paid:</label>
                                            <span class="pull-right-sm">25000 LKR</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /tabs content -->
                            </div>
                        </div>
                        <!-- /user details (with sample pattern) -->
                    </div>
                    <div class="col-sm-3">
                        <!-- User details (with sample pattern) -->
                        <div class="content-group">
                            <div class="panel-body bg-green-600 border-radius-top text-center">

                                <a href="#" class="display-inline-block content-group-sm">
                                    <img src="{{ asset('images/users/1.jpg') }}" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px;">
                                </a>

                                <h5 class="text-semibold no-margin-bottom">
                                    Name
                                </h5>

                                <span class="display-block">EPF No</span>
                                <span class="display-block">NIC</span>

                            </div>

                            <div class="panel panel-body no-border-top no-border-radius-top" style="padding: 5px!important;">

                                <!-- Tabs nav -->
                                <ul class="nav nav-tabs nav-justified no-margin no-border-radius bg-teal-400 border-top border-top-teal-300">
                                    <li class="active">
                                        <a href="#contact" class="text-size-small text-uppercase text-semibold" data-toggle="tab">
                                            Contact Details
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#performance" class="text-size-small text-uppercase text-semibold" data-toggle="tab">
                                            Performance Details
                                        </a>
                                    </li>
                                </ul>
                                <!-- /tabs nav -->


                                <!-- Tabs content -->
                                <div class="tab-content panel-body">
                                    <div class="tab-pane active fade in" id="contact">
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">Full name:</label>--}}
                                        {{--<span class="pull-right-sm">Victoria Anna Davidson</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">EPF No. :</label>--}}
                                        {{--<span class="pull-right-sm"></span>--}}
                                        {{--</div>--}}
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">NIC No. :</label>--}}
                                        {{--<span class="pull-right-sm"></span>--}}
                                        {{--</div>--}}
                                        <div class="cju-form-group mt-5">
                                            <label class="text-semibold">Gender :</label>
                                            <span class="pull-right-sm"></span>
                                        </div>
                                        <div class="cju-form-group">
                                            <label class="text-semibold">D.O.B. :</label>
                                            <span class="pull-right-sm"></span>
                                        </div>
                                        <div class="cju-form-group">
                                            <label class="text-semibold">Contact No. :</label>
                                            <span class="pull-right-sm">+944584538458</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Address :</label>
                                            <span class="pull-right-sm">Kandyu Srilankaa</span>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="performance">
                                        <div class="cju-form-group mt-5">
                                            <label class="text-semibold">Total No. of Liters :</label>
                                            <span class="pull-right-sm">200L</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total No. of Latex Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total No. of Scrap Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total Over Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Salary Paid:</label>
                                            <span class="pull-right-sm">25000 LKR</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /tabs content -->
                            </div>
                        </div>
                        <!-- /user details (with sample pattern) -->
                    </div>
                    <div class="col-sm-3">
                        <!-- User details (with sample pattern) -->
                        <div class="content-group">
                            <div class="panel-body bg-green-600 border-radius-top text-center">

                                <a href="#" class="display-inline-block content-group-sm">
                                    <img src="{{ asset('images/users/1.jpg') }}" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px;">
                                </a>

                                <h5 class="text-semibold no-margin-bottom">
                                    Name
                                </h5>

                                <span class="display-block">EPF No</span>
                                <span class="display-block">NIC</span>

                            </div>

                            <div class="panel panel-body no-border-top no-border-radius-top" style="padding: 5px!important;">

                                <!-- Tabs nav -->
                                <ul class="nav nav-tabs nav-justified no-margin no-border-radius bg-teal-400 border-top border-top-teal-300">
                                    <li class="active">
                                        <a href="#contact" class="text-size-small text-uppercase text-semibold" data-toggle="tab">
                                            Contact Details
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#performance" class="text-size-small text-uppercase text-semibold" data-toggle="tab">
                                            Performance Details
                                        </a>
                                    </li>
                                </ul>
                                <!-- /tabs nav -->


                                <!-- Tabs content -->
                                <div class="tab-content panel-body">
                                    <div class="tab-pane active fade in" id="contact">
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">Full name:</label>--}}
                                        {{--<span class="pull-right-sm">Victoria Anna Davidson</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">EPF No. :</label>--}}
                                        {{--<span class="pull-right-sm"></span>--}}
                                        {{--</div>--}}
                                        {{--<div class="cju-form-group mt-5">--}}
                                        {{--<label class="text-semibold">NIC No. :</label>--}}
                                        {{--<span class="pull-right-sm"></span>--}}
                                        {{--</div>--}}
                                        <div class="cju-form-group mt-5">
                                            <label class="text-semibold">Gender :</label>
                                            <span class="pull-right-sm"></span>
                                        </div>
                                        <div class="cju-form-group">
                                            <label class="text-semibold">D.O.B. :</label>
                                            <span class="pull-right-sm"></span>
                                        </div>
                                        <div class="cju-form-group">
                                            <label class="text-semibold">Contact No. :</label>
                                            <span class="pull-right-sm">+944584538458</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Address :</label>
                                            <span class="pull-right-sm">Kandyu Srilankaa</span>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="performance">
                                        <div class="cju-form-group mt-5">
                                            <label class="text-semibold">Total No. of Liters :</label>
                                            <span class="pull-right-sm">200L</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total No. of Latex Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total No. of Scrap Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Total Over Kgs. :</label>
                                            <span class="pull-right-sm">230Kg</span>
                                        </div>

                                        <div class="cju-form-group">
                                            <label class="text-semibold">Salary Paid:</label>
                                            <span class="pull-right-sm">25000 LKR</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /tabs content -->
                            </div>
                        </div>
                        <!-- /user details (with sample pattern) -->
                    </div>
                </div>
            </div>
        </div>



    </div>
    {{--page content ends--}}


@endsection

