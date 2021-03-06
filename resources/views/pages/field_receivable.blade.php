@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <i class="icon-arrow-left52 position-left"></i><span class="text-semibold">Add Field Receivables</span>
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
                                    <label class="col-lg-3 control-label text-semibold" for="field">Block No. :</label>
                                    <div class="col-lg-9">
                                        <select data-placeholder="Select a Field..." id="field" class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <optgroup label="Fields">
                                                <option value="0">1</option>
                                                <option value="1">2</option>
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
                                            <th>Field No.</th>
                                            <th>Block No.</th>
                                            <th>Latex(L)</th>
                                            <th>Latex(kg)</th>
                                            <th>Scrap(kg)</th>
                                            <th>Total(kg)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>Kopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>Eugene</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>Kopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>Kopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>Kopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>Kopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>Kopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>Kopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td  style="background-color: #e4efaf; font-weight: bold">Total</td>
                                                <td></td>
                                                <td>tot latex L</td>
                                                <td>tot latex kg</td>
                                                <td>tot scrap kg</td>
                                                <td>tot tot kg</td>
                                            </tr>
                                        </tfoot>

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
                                <div class="panel text-center bg-brown-700" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                                    <div class="panel-body">
                                        <h6 class="text-semibold no-margin-bottom mt-5">{{explode(' ', $division_main->created_at)[0]}}</h6>
                                        <div class="opacity-75 content-group">{{$division_main->weather->name}}</div>
                                        <div class="opacity-75 content-group">{{explode(' ', $division_main->created_at)[1]}}</div>
                                        <img src="http://openweathermap.org/img/w/{{ $division_main->weather->weather[0]->icon }}.png" alt="">
{{--                                        <i class="icon-cloud" style="font-size: 54px"></i>--}}
                                    </div>

                                    <div class="panel-body panel-body-accent pb-15">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="text-uppercase text-size-mini opacity-75">Rainfall</div>
                                                <h5 class="text-semibold no-margin">{{$division_main->weather->clouds->all}}mm</h5>
                                            </div>

                                            <div class="col-xs-4">
                                                <div class="text-uppercase text-size-mini opacity-75">Temp</div>
                                                <h5 class="text-semibold no-margin">{{$division_main->weather->main->temp}}</h5>
                                            </div>

                                            <div class="col-xs-4">
                                                <div class="text-uppercase text-size-mini opacity-75">Humidity</div>
                                                <h5 class="text-semibold no-margin">{{$division_main->weather->main->humidity}}%</h5>
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
                                            <th>Block No.</th>
                                            <th>Hectare</th>
                                            <th>Tappers</th>
                                            <th>Tap per Hect</th>
                                            <th>Field Wt.</th>
                                            <th>Factory Wt.</th>
                                            <th>Loss</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>Eugene</td>
                                            <td>Kopyov</td>
                                            <td>@Koopyov</td>
                                            <td>@Koopyov</td>
                                            <td>@Koopyov</td>
                                            <td>@Koopyov</td>
                                            <td>
                                                <ul class="icons-list">
                                                    <li><a href="#" onclick="" data-toggle="modal" data-target="#view_modal"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" onclick="" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>

                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td style="background-color: #e4efaf; font-weight: bold">To-date</td>
                                            <td></td>
                                            <td></td>
                                            <td>tap total</td>
                                            <td>tap per hect total</td>
                                            <td>field wt tot</td>
                                            <td>@factory wt tot</td>
                                            <td>@Loss tot</td>
                                            <td>

                                            </td>
                                        </tr>

                                        </tfoot>

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


        <!-- Remove modal -->
        <div id="remove_modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title">Confirm action</h5>
                    </div>

                    <div class="modal-body">
                        You are about to remove this row. Are you sure?
                    </div>

                    <div class="modal-footer">
                        <button type="button" onclick="delete_disease()" class="btn bg-green-800" data-dismiss="modal">Yes, remove</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">No, thanks</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /remove modal -->


    </div>
    {{--page content ends--}}


    {{--javascripts starts here--}}
    <script>


    </script>
    {{--javascripts ends--}}
@endsection

