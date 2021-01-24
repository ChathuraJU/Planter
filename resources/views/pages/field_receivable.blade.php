@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <span class="text-semibold">Add Field Receivables</span>
                    </h5>
                </div>

            </div>

            <div class="breadcrumb-line" id="mydiv">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="icon-home2 position-left"></i> Home</a></li>
                    <li><a href="#">Field</a></li>
                    <li class="active">Add Field Receivables</li>
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
        <form class="form-horizontal" action="#">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h5 class="panel-title">Add Field Data Form</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-7">
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-reading position-left"></i> Field Receivables Details</legend>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="field">Field No. :</label>
                                    <div class="col-lg-9">
                                        <select data-placeholder="Select a Field..." id="field" class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <optgroup label="Fields">
                                                <option value="0">jayamaha</option>
                                                <option value="1">sumathi</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="content-group-lg">
                                    <h6 class="text-semibold">Basic options</h6>
                                    <p>The basic setup requires targetting an input element and invoking the picker.</p>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                                        <input type="text" class="form-control pickadate" placeholder="Try me&hellip;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="latex_liters">No. of Hectares : </label>
                                    <div class="col-lg-9">
                                        <div class="input-group bootstrap-touchspin mspborder">
                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                            <input type="text" name="latex_liters" id="latex_liters" value="" class="touchspin-empty form-control " style="display: block;">
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="metrolac">No. of Tappers : </label>
                                    <div class="col-lg-9">
                                        <div class="input-group bootstrap-touchspin mspborder">
                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                            <input type="text" name="metrolac" id="metrolac" value="" class="touchspin-empty form-control " style="display: block;">
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="latex_kg">Tap per Hectares : </label>
                                    <div class="col-lg-9">
                                        <div class="input-group bootstrap-touchspin mspborder">
                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                            <input type="text" name="latex_kg" id="latex_kg" value="" class="touchspin-empty form-control " style="display: block;">
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="scrap_kg">Field Wt. : </label>
                                    <div class="col-lg-9">
                                        <div class="input-group bootstrap-touchspin mspborder">
                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                            <input type="text" name="scrap_kg" id="scrap_kg" value="" class="touchspin-empty form-control " style="display: block;">
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="over_kg">Factory Wt. : </label>
                                    <div class="col-lg-9">
                                        <div class="input-group bootstrap-touchspin mspborder">
                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                            <input type="text" name="over_kg" id="over_kg" value="" class="touchspin-empty form-control " style="display: block;">
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="field_norms">Lost :</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="field_norms" id="field_norms" placeholder="Enter Lost Amount " class="form-control mspborder required">
                                    </div>
                                </div>
                                <div class="text-center" >
                                    <button type="submit" id="enter_field_data" class="btn bg-green-800 btn-labeled btn-rounded btn-xlg"><b><i class="icon-arrow-down-right32"></i></b>Enter</button>
                                </div>

                            </fieldset>
                        </div>

                        <div class="col-md-5">
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-truck position-left"></i>Approvals Summary</legend>
                                <!-- Scrollable table -->
                                <div class="table-responsive pre-scrollable" style="max-height: 500px">
                                    <table class="table table-bordered" id="fieldsummarytable">
                                        <thead>
                                        <tr class="bg-green">
                                            <th>Approved By</th>
                                            <th>Segment</th>
                                            <th>Status</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Eugene</td>
                                            <td>Kopyov</td>
                                        </tr>

                                        </tbody>

                                    </table>
                                </div>
                                <!-- /scrollable table -->
                            </fieldset>
                        </div>
                    </div>

                    <div class="row " style="margin-top: 50px">
                        <div class="col-md-12">
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-truck position-left"></i>Collection Summary</legend>
                                <!-- Scrollable table -->
                                <div class="table-responsive pre-scrollable" style="max-height: 500px">
                                    <table class="table table-bordered" id="fieldsummarytable">
                                        <thead>
                                        <tr class="bg-green">
                                            <th>Field No.</th>
                                            <th>Hectare</th>
                                            <th>Tappers</th>
                                            <th>Tap per Hect</th>
                                            <th>Field Wt.</th>
                                            <th>Factory Wt.</th>
                                            <th>Loss</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Eugene</td>
                                            <td>Kopyov</td>
                                            <td>@Koopyov</td>
                                            <td>@Koopyov</td>
                                            <td>@Koopyov</td>
                                            <td>@Koopyov</td>
                                        </tr>

                                        </tbody>

                                    </table>
                                </div>
                                <!-- /scrollable table -->
                            </fieldset>
                        </div>

                    </div>
                    <div class="row" style="margin-top: 50px">

                        <div class="col-md-12">
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-stack-plus position-left"></i>Confirmation</legend>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold">Image Attachments: <span style="color: #a8a8a8">(Only if needed)</span></label>
                                    <div class="col-lg-9">
                                        <input type="file" class="file-input-ajax" multiple="multiple">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold">Your message:</label>
                                    <div class="col-lg-9">
                                        <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
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
                            </fieldset>
                        </div>

                    </div>
                </div>
            </div>
        </form>
        {{--/Add field data form ends--}}


        <!-- Footer -->
        <div class="footer text-muted">
            Copyright © {{ date('Y') }} <a href="#">Planter</a> by <a href="#" target="_blank">CJU</a>
        </div>
        <!-- /footer -->

    </div>
    {{--page content ends--}}


    {{--javascripts starts here--}}
    <script>
$(document).ready(function () {
    $('.pickadate-strings').pickadate({
        weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
        showMonthsShort: true
    });
})


    </script>
    {{--javascripts ends--}}
@endsection

