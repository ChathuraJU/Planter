@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <span class="text-semibold">Create Report</span>
                    </h5>
                </div>

            </div>

            <div class="breadcrumb-line" id="mydiv">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="icon-home2 position-left"></i> Home</a></li>
                    <li><a href="#">Report</a></li>
                    <li class="active">Create Report</li>
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
                <form action="#">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h5 class="panel-title">Create Report Form<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <fieldset>
                                        <legend class="text-semibold"><i class="icon-file-text position-left"></i>Form</legend>
                                            <div class="form-group">
                                                <label class="control-label text-semibold">Type</label>
                                                <select id="reporttype" data-placeholder="Select a Type..." class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                    <optgroup label="Divisions">
                                                        <option value="0">Monthly</option>
                                                        <option value="1">Yearly</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="form-group" id="monthselect">
                                                <label class="control-label text-semibold">Month:</label>
                                                <input type="text" name="month" id="month" placeholder="Enter a month " class="form-control mspborder required">
                                            </div>
                                            <div class="form-group"   id="yearselect">
                                                <label class="control-label text-semibold">Year:</label>
                                                <input type="text" name="year" id="year" placeholder="Enter a year " class="form-control mspborder required">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label text-semibold">Note</label>
                                                <textarea rows="5" cols="5" name="note" id="note" class="form-control" placeholder="Default textarea readonly"></textarea>
                                            </div>
                                    </fieldset>
                                </div>
                                <div class="col-sm-6">
                                    <fieldset>
                                        <legend class="text-semibold"><i class="icon-file-eye position-left"></i>Preview</legend>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox" class="styled">
                                    I do here by confirm the above recorded data is in order
                                </label>
                            </div>
                            <div class="text-center" >
                                <button type="submit" id="submit_field_data" class="btn bg-green-800 btn-labeled btn-rounded btn-xlg"><b><i class="icon-arrow-down-right32"></i></b>Submit Form</button>
                            </div>

                        </div>

                    </div>
                </form>
            </div>
        </div>


    </div>
    {{--page content ends--}}


    {{--javascript starts here--}}
    <script>
        $(document).ready(function(){

            $('#reporttype').on('change', function() {
                if ( this.value == '0')
                {
                    $("#monthselect").show();
                    $("#yearselect").hide();
                }
                else
                {
                    $("#monthselect").hide();
                    $("#yearselect").show();
                }
            });
        });
    </script>
    {{--java scripts ends--}}


@endsection

