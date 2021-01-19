@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <span class="text-semibold">Create Field</span>
                    </h5>
                </div>

            </div>

            <div class="breadcrumb-line" id="mydiv">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="icon-home2 position-left"></i> Home</a></li>
                    <li><a href="#">Field</a></li>
                    <li class="active">Create Field</li>
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

        <div class="row">
            <div class="col-sm-12">
                <!-- Wizard with validation -->
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h5 class="panel-title">Create Field Form<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>
                    <form id="" action="#">
                        <div class="col-sm-12" style="margin-top: 30px; padding-bottom: 40px; margin-left: 20px;">
                            <div class="col-sm-4">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Division</label>
                                        <select data-placeholder="Select a Division..." class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <optgroup label="Divisions">
                                                <option value="0">Upper Division</option>
                                                <option value="1">Lower Division</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Field Name:</label>
                                        <input type="text" name="field_name" id="field_name" placeholder="Enter Field Name " class="form-control mspborder required">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="col-sm-12">

                                    <div class="form-group">
                                        <label class="control-label text-semibold">Number of Hectares: </label>
                                        <div class="input-group bootstrap-touchspin">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default bootstrap-touchspin-down" type="button">-</button>
                                            </span>
                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                            <input type="text" value="" class="touchspin-empty form-control" style="display: block;">
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                            <span class="input-group-btn">
                                                <button class="btn btn-default bootstrap-touchspin-up" type="button">+</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="btn"> </a>

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
                                <th>Division </th>
                                <th>Field Name</th>
                                <th>Hectare</th>
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

