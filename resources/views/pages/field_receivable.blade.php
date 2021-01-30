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
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="field_norms">Date :</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="date" id="date" placeholder="" class="form-control mspborder required">
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
                            <fieldset >
                                <legend class="text-semibold"><i class="icon-file-excel position-left"></i>Field Log Summary</legend>
                                <!-- Scrollable table -->
                                <div class="table-responsive pre-scrollable" style="max-height: 500px">
                                    <table class="table table-bordered" id="fieldsummarytable">
                                        <thead>
                                        <tr class="bg-green">
                                            <th>Field Officer Name </th>
                                            <th>Field No. </th>
                                            <th>Block No. </th>
                                            <th>Field Wt. </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Eugene</td>
                                            <td>5656</td>
                                            <td>56</td>
                                            <td>56</td>
                                        </tr>

                                        </tbody>

                                    </table>
                                </div>
                                <!-- /scrollable table -->
                            </fieldset>
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
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-truck position-left"></i>Weather</legend>
                                <div class="panel text-center bg-success has-bg-image">
                                    <div class="panel-body">
                                        <h6 class="text-semibold no-margin-bottom mt-5">Tickets statistics</h6>
                                        <div class="opacity-75 content-group">893 tickets in total</div>
                                        <div class="svg-center position-relative mb-5" id="progress_percentage_four"><svg width="92" height="92"><g transform="translate(46,46)"><path class="d3-progress-background" d="M0,46A46,46 0 1,1 0,-46A46,46 0 1,1 0,46M0,43A43,43 0 1,0 0,-43A43,43 0 1,0 0,43Z" style="fill: rgb(229, 57, 53);"></path><path class="d3-progress-foreground" filter="url(#blur)" d="M3.3306690738754696e-15,-44.47471191587417A1.5,1.5 0 0,1 1.5505617977528126,-45.97385950854408A46,46 0 0,1 20.97770759318713,40.938194685827796A1.5,1.5 0 0,1 18.93641133210156,40.2419224921158L18.93641133210156,40.2419224921158A1.5,1.5 0 0,1 19.609596228414052,38.26831242370859A43,43 0 0,0 1.449438202247194,-42.97556432320425A1.5,1.5 0 0,1 3.3306690738754696e-15,-44.47471191587417Z" style="fill: rgb(255, 255, 255); stroke: rgb(255, 255, 255);"></path><path class="d3-progress-front" d="M3.3306690738754696e-15,-44.47471191587417A1.5,1.5 0 0,1 1.5505617977528126,-45.97385950854408A46,46 0 0,1 20.97770759318713,40.938194685827796A1.5,1.5 0 0,1 18.93641133210156,40.2419224921158L18.93641133210156,40.2419224921158A1.5,1.5 0 0,1 19.609596228414052,38.26831242370859A43,43 0 0,0 1.449438202247194,-42.97556432320425A1.5,1.5 0 0,1 3.3306690738754696e-15,-44.47471191587417Z" style="fill: rgb(255, 255, 255); fill-opacity: 1;"></path><text dx="0" dy="8" style="font-size: 22px; line-height: 1; fill: rgb(255, 255, 255); text-anchor: middle;">43%</text></g></svg></div>
                                    </div>

                                    <div class="panel-body panel-body-accent pb-15">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="text-uppercase text-size-mini text-muted">Raised</div>
                                                <h5 class="text-semibold no-margin">5,328</h5>
                                            </div>

                                            <div class="col-xs-4">
                                                <div class="text-uppercase text-size-mini text-muted">Pending</div>
                                                <h5 class="text-semibold no-margin">2,348</h5>
                                            </div>

                                            <div class="col-xs-4">
                                                <div class="text-uppercase text-size-mini text-muted">Closed</div>
                                                <h5 class="text-semibold no-margin">4,357</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                        </div>
                    </div>

                    <div class="row " style="margin-top: 50px">
                        <div class="col-md-9">
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
                        <div class="col-md-3">
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-notebook position-left"></i>Notes Summary</legend>
                                <div class="panel panel-body border-top-teal">
                                    <ul class="list-feed">
                                        <li>
                                            <div class="text-muted">Jan 12, 12:47</div>
                                            <a href="#">David Linner</a> requested refund for a double bank card charge
                                        </li>

                                        <li>
                                            <div class="text-muted">Jan 11, 10:25</div>
                                            User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
                                        </li>

                                        <li>
                                            <div class="text-muted">Jan 10, 09:37</div>
                                            Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
                                        </li>

                                        <li>
                                            <div class="text-muted">Jan 9, 08:28</div>
                                            <a href="#">Eugene Kopyov</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
                                        </li>

                                        <li>
                                            <div class="text-muted">Jan 8, 07:58</div>
                                            All sellers have received payouts for December, 2016!
                                        </li>

                                        <li>
                                            <div class="text-muted">Jan 7, 06:32</div>
                                            <a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
                                        </li>
                                    </ul>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-images2 position-left"></i>Images</legend>
                                <div class="content-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4">
                                            <p><a href="#"><img src="images/placeholderimg.jpg" class="img-responsive img-rounded" alt="image"></a></p>
                                            <p><a href="#"><img src="images/placeholderimg.jpg" class="img-responsive img-rounded" alt="image"></a></p>
                                        </div>

                                        <div class="col-lg-4 col-sm-4">
                                            <p><a href="#"><img src="images/placeholderimg.jpg" class="img-responsive img-rounded" alt="image"></a></p>
                                            <p><a href="#"><img src="images/placeholderimg.jpg" class="img-responsive img-rounded" alt="image"></a></p>
                                        </div>

                                        <div class="col-lg-4 col-sm-4">
                                            <p><a href="#"><img src="images/placeholderimg.jpg" class="img-responsive img-rounded" alt="image"></a></p>
                                            <p><a href="#"><img src="images/placeholderimg.jpg" class="img-responsive img-rounded" alt="image"></a></p>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                        </div>
                    </div>

                </div>
            </div>
        </form>
        {{--/Add field data form ends--}}




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

