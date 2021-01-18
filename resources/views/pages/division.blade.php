@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <span class="text-semibold">Division Configuration</span>
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
                    <li class="active">Division Configurations</li>
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
                    <form id="" action="#">
                        <div class="col-sm-12" style="margin-top: 30px; padding-bottom: 40px; margin-left: 60px;">
                            <div class="col-sm-6">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <label>Division Type:</label>
                                        <select class="select-search" id="division_type" name="division_type" data-placeholder="Select Unit/Ward">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <label>Division Name:</label>
                                        <input type="text" name="division_name" id="division_name" placeholder="Enter Division Name (Unit / Ward)" class="form-control mspborder required">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <label>Division Email:</label>
                                        <input type="text" name="division_email" id="division_email" placeholder="Enter Email Address of the Division" class="form-control mspborder required">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <label>Division Phone No.:</label>
                                        <input type="text" name="division_phone" id="division_phone" placeholder="Enter Phone Number of the Division" class="form-control mspborder required">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <a class="btn"> </a>
                        <a class="btn btn-primary pull-right" id="btncreate" style="margin-right: 30px;">Create <span class="icon-check"></span></a>
                        <a class="btn btn-primary pull-right hidden" id="btnupdate" style="margin-right: 30px;">Update <span class="icon-check"></span></a>
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

                        <table style="font-size: 13px;" class="table table-msphover datatable-button-html5-basic" id="ttt">
                            <thead>
                            <tr class="bg-teal-400" style="font-size: 16px; font-weight: bold;">
                                <th>Division ID</th>
                                <th>Division Name</th>
                                <th>Division Type</th>
                                <th>Division Email</th>
                                <th>Division Phone No.</th>
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
        <div class="row">
            <div class="col-sm-12">

            </div>
        </div>
    </div>


    {{--page content ends--}}


@endsection

