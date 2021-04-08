@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <i class="icon-arrow-left52 position-left"></i><span class="text-semibold">Labour Chart</span>
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

        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Search by labour name<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse" class=""></a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body" style="">
                <form action="{{url('labour-chart')}}" class="main-search">
                    <div class="input-group content-group">
                        <div class="has-feedback has-feedback-left">
                            <input type="text" class="form-control input-xlg" value="" id="search" name="search">

                        </div>

                        <div class="input-group-btn">
                            <button type="submit" class="btn bg-green-800 btn-xlg">Search</button>
                        </div>
                    </div>

                    <div class="row search-option-buttons">
                        <div class="col-sm-12 text-center">
                            <ul class="list-inline no-margin-bottom">
                                <li><a href="{{url('labour-register')}}" type="button" class="btn bg-green-800 btn-labeled btn-rounded"><b><i class="icon-pen-plus"></i></b> Register Labour</a></li>
                                <li><a href="#" class="btn btn-link"><i class="icon-reload-alt position-left"></i> Refine your search</a></li>
                            </ul>
                        </div>

                    </div>
                </form>
            </div>
        </div>

            <div class="row">
                @foreach ($labours as $key => $labour)

                    <div class="col-sm-3">
                            <!-- User details (with sample pattern) -->
                            <div class="content-group">
                                <div class="panel-body bg-yellow-600 border-radius-top text-center">

                                    <a href="#" class="display-inline-block content-group-sm">
                                        <img src="{{ asset($labour->image) }}" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px;">
                                    </a>

                                    <h5 class="text-semibold no-margin-bottom">
                                            {{ $labour->fname . ' ' .$labour->lname}}
                                    </h5>

                                    <span class="display-block">EPF No: {{ $labour->epf }}</span>
                                    <span class="display-block">NIC: {{ $labour->nic }}</span>

                                </div>

                                <div class="panel panel-body no-border-top no-border-radius-top" style="padding: 5px!important;">

                                    <!-- Tabs nav -->
                                    <ul class="nav nav-tabs nav-justified no-margin no-border-radius bg-teal-400 border-top border-top-teal-300">
                                        <li class="active">
                                            <a href="#contact{{ $key }}" class="text-size-small text-uppercase text-semibold" data-toggle="tab">
                                                Contact Details
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#performance{{ $key }}" class="text-size-small text-uppercase text-semibold" data-toggle="tab">
                                                Performance Details
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- /tabs nav -->


                                    <!-- Tabs content -->
                                    <div class="tab-content panel-body">
                                        <div class="tab-pane active fade in" id="contact{{ $key }}">

                                            @if ($labour->gender == 0)

                                            <div class="cju-form-group mt-5">
                                                <label class="text-semibold">Gender :</label>
                                                <span class="pull-right-sm"> Male</span>
                                            </div>

                                            @else

                                                <div class="cju-form-group mt-5">
                                                    <label class="text-semibold">Gender :</label>
                                                    <span class="pull-right-sm"> Female</span>
                                                </div>
                                            @endif

                                            <div class="cju-form-group">
                                                <label class="text-semibold">D.O.B. : </label>
                                                <span class="pull-right-sm"> {{$labour-> dob }}</span>
                                            </div>
                                            <div class="cju-form-group">
                                                <label class="text-semibold">Contact No. :</label>
                                                <span class="pull-right-sm">{{$labour->contact}}</span>
                                            </div>

                                            <div class="cju-form-group">
                                                <label class="text-semibold">Address :</label>
                                                <span class="pull-right-sm">{{$labour->address}}</span>
                                            </div>


{{--                                            <div class="cju-form-group">--}}
{{--                                                <div class="row text-center text-size-mini">--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#view_modal" type="button" class="btn bg-green-800 btn-labeled btn-rounded"><b><i class="icon-quill4"></i></b>Edit</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

                                        </div>

                                        <div class="tab-pane fade" id="performance{{ $key }}">
                                            <div class="cju-form-group mt-5">
                                                <label class="text-semibold">Total No. of Liters :</label>
                                                <span class="pull-right-sm">{{$labour->tot_latex_liters}}</span>
                                            </div>

                                            <div class="cju-form-group">
                                                <label class="text-semibold">Total No. of Latex Kgs. :</label>
                                                <span class="pull-right-sm">{{$labour->tot_latex_kg}}</span>
                                            </div>

                                            <div class="cju-form-group">
                                                <label class="text-semibold">Total No. of Scrap Kgs. :</label>
                                                <span class="pull-right-sm">{{$labour->tot_scrap_kg}}</span>
                                            </div>

                                            <div class="cju-form-group">
                                                <label class="text-semibold">Total Over Kgs. :</label>
                                                <span class="pull-right-sm">{{$labour->tot_over_kg}}</span>
                                            </div>

                                            <div class="cju-form-group">
                                                <label class="text-semibold">Salary Paid:</label>
                                                <span class="pull-right-sm">{{$labour->salary_paid}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /tabs content -->
                                </div>
                            </div>
                            <!-- /user details (with sample pattern) -->
                        </div>

                @endforeach
            </div>

        <!-- Pagination -->
        <div class="text-center content-group-lg pt-20">
            {{ $labours-> links() }}
        </div>
        <!-- /pagination -->

    </div>
    {{--page content ends--}}


@endsection

