@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <span class="text-semibold">Add Field Data</span>
                    </h5>
                </div>

            </div>

            <div class="breadcrumb-line" id="mydiv">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="icon-home2 position-left"></i> Home</a></li>
                    <li><a href="#">Field</a></li>
                    <li class="active">Add Field Data</li>
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


        {{--Add field data form starts here--}}
        <div class="row">
            <div class="col-sm-12">
                <form action="#">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h5 class="panel-title">Add Field Data Log Form<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">Complete the form below and submit</h5>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label text-semibold">E.P.F No.</label>
                                            <select data-placeholder="Select EPF No." class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                <option></option>
                                                <optgroup label="Divisions">
                                                    <option value="0">EPF00011</option>
                                                    <option value="1">EPF00215</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label text-semibold">Labour Name</label>
                                            <select data-placeholder="Select a Labour..." class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                <option></option>
                                                <optgroup label="Labours">
                                                    <option value="0">jayamaha</option>
                                                    <option value="1">sumathi</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label text-semibold">Field No.</label>
                                            <select data-placeholder="Select a Field..." class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                <option></option>
                                                <optgroup label="Fields">
                                                    <option value="0">jayamaha</option>
                                                    <option value="1">sumathi</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label text-semibold">Block No.</label>
                                            <input type="text" name="block_no" id="block_no" placeholder="Enter Block No. " class="form-control mspborder required">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label text-semibold">Number of Hectares: </label>
                                            <div class="input-group bootstrap-touchspin mspborder">
                                                <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                                <input type="text" value="" class="touchspin-empty form-control " style="display: block;">
                                                <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label text-semibold">Number of Liters: </label>
                                            <div class="input-group bootstrap-touchspin mspborder">
                                                <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                                <input type="text" value="" class="touchspin-empty form-control " style="display: block;">
                                                <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label text-semibold">Metrolac Reading:</label>
                                            <input type="text" name="metrolac" id="metrolac" placeholder="Enter Metrolac Reading " class="form-control mspborder required">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label text-semibold">Latex Kgs.: </label>
                                            <div class="input-group bootstrap-touchspin mspborder">
                                                <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                                <input type="text" value="" class="touchspin-empty form-control " style="display: block;">
                                                <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label text-semibold">Scrap Kgs.: </label>
                                            <div class="input-group bootstrap-touchspin mspborder">
                                                <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                                <input type="text" value="" class="touchspin-empty form-control " style="display: block;">
                                                <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label text-semibold">Field Norms:</label>
                                            <input type="text" name="field_norm" id="field_norm" placeholder="Enter Field Nprm " class="form-control mspborder required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <!-- Custom header text -->

                                    <!-- Column headers -->

                                        <div class="panel-heading">
                                            <h5 class="panel-title">Column headers</h5>

                                        </div>

                                        <div class="panel-body">
                                            <div class="hot-container">
                                                <div id="hot_col_headers" ></div>
                                            </div>
                                        </div>

                                    <!-- /column headers -->
                                    <!-- /custom header text -->
                                </div>
                            </div>
                        </div>

                        <div class="row mb-5" style="text-align: center">
                            <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                            {{--<a class="btn btn-primary pull-right" id="btncreate" style="margin-right: 30px;">Create <span class="icon-check"></span></a>--}}
                            {{--<a class="btn btn-primary pull-right hidden" id="btnupdate" style="margin-right: 30px;">Update <span class="icon-check"></span></a>--}}
                        </div>
                    </div>
                </form>
            </div>
        </div>

        {{--/Add field data form ends--}}


    </div>
    {{--page content ends--}}

    {{--javascripts starts here--}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add data for all examples
            var car_data = [
                {field: "Mercedes", tappers: "GL500", liters: 2009, killos: "blue", total: 32500}

            ];





            // Custom headers text
            // ------------------------------

            // Define element
            var hot_col_headers = document.getElementById('hot_col_headers');

            // Initialize with options
            var hot_col_headers_init = new Handsontable(hot_col_headers, {
                data: car_data,
                rowHeaders: false,
                colHeaders: ['Field No.', '# of Tappers', 'Latex Liters', 'Latex Kgs.', 'Total Kgs.'],
                stretchH: 'all'
            });
        });

    </script>
    {{--javascripts ends--}}
@endsection

