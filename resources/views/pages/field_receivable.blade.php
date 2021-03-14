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
        <form class="form-horizontal" action="#" id="tempDataForm">
            @csrf
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
                                <input type="hidden" name="mainId" value="{{$division_main->id}}">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="field">Field No. :</label>
                                    <div class="col-lg-9">
                                        <select data-placeholder="Select a Field..." id="field" name="field" class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <optgroup label="Fields">
                                                @foreach($fields as $field)
                                                    <option value="{{ $field->field_id }}">{{ $field->field_name }}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="field">Block No. :</label>
                                    <div class="col-lg-9">
                                        <select data-placeholder="Select a Block..." id="block" name="block" class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <optgroup label="Fields">
                                                @foreach($blocks as $block)
                                                    <option value="{{ $block->id }}">{{ $block->block_no }}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="latex_liters">No. of Hectares : </label>
                                    <div class="col-lg-9">
                                        <div class="input-group bootstrap-touchspin mspborder">
                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                            <input type="text" name="hect" id="hect" value="" class="touchspin-empty form-control " style="display: block;" readonly>
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="metrolac">No. of Tappers : </label>
                                    <div class="col-lg-9">
                                        <div class="input-group bootstrap-touchspin mspborder">
                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                            <input type="text" name="tappers" id="tappers" value="" class="touchspin-empty form-control " style="display: block;" readonly>
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="latex_kg">Tap per Hectares : </label>
                                    <div class="col-lg-9">
                                        <div class="input-group bootstrap-touchspin mspborder">
                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                            <input type="text" name="tap_hect" id="tap_hect" value="" class="touchspin-empty form-control " style="display: block;" readonly>
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="scrap_kg">Field Wt. : </label>
                                    <div class="col-lg-9">
                                        <div class="input-group bootstrap-touchspin mspborder">
                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                            <input type="text" name="field_wt" id="field_wt" value="" class="touchspin-empty form-control " style="display: block;" readonly>
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="over_kg">Factory Wt. : </label>
                                    <div class="col-lg-9">
                                        <div class="input-group bootstrap-touchspin mspborder">
                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                            <input type="text" name="factory_wt" id="factory_wt" value="" class="touchspin-empty form-control " style="display: block;">
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="field_norms">Lost :</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="lost" id="lost" placeholder="Enter Lost Amount " class="form-control mspborder required">
                                    </div>
                                </div>
                                <div class="text-center" >
                                    <button type="button" id="enter_field_data" class="btn bg-green-800 btn-labeled btn-rounded btn-xlg"><b><i class="icon-arrow-down-right32"></i></b>Enter</button>
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

                                        </tbody>

                                    </table>
                                </div>
                                <!-- /scrollable table -->
                            </fieldset>
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-truck position-left"></i>Approvals Summary</legend>
                                <!-- Scrollable table -->
                                <div class="table-responsive pre-scrollable" style="max-height: 500px">
                                    <table class="table table-bordered" id="approvalSummary">
                                        <thead>
                                        <tr class="bg-green">
                                            <th>Approved By</th>
                                            <th>Segment</th>
                                            <th>Status</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($approvals as $approval)
                                            <tr>
                                                <td>{{$approval->approved_user->person->fname}} {{$approval->approved_user->person->lname}}</td>
                                                <td>{{$approval->approved_user->role->user_type_name}}</td>
                                                <td>{{$approval->approval_status}}</td>
                                            </tr>
                                        @endforeach

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
                                    <table class="table table-bordered" id="collectionSummary">
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
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>

{{--                                            <td>--}}
{{--                                                <ul class="icons-list">--}}
{{--                                                    <li><a href="#" onclick="" data-toggle="modal" data-target="#view_modal"><i class="icon-eye"></i></a></li>--}}
{{--                                                    <li><a href="#" onclick="" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i></a></li>--}}
{{--                                                </ul>--}}
{{--                                            </td>--}}
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
                                        <input type="file" name="uploadedFile" class="file-input-ajax" multiple="multiple">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold">Your message:</label>
                                    <div class="col-lg-9">
                                        <textarea rows="5" cols="5" class="form-control" name="message" placeholder="Enter your message here"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" class="styled">
                                        I do here by confirm the above recorded data is in order
                                    </label>
                                </div>
                                <div class="text-center" >
                                    <button type="button" id="submit_field_data" class="btn bg-green-800 btn-labeled btn-rounded btn-xlg"><b><i class="icon-arrow-down-right32"></i></b>Submit Form</button>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-3">
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-notebook position-left"></i>Notes Summary</legend>
                                <div class="panel panel-body border-top-teal">
                                    <ul class="list-feed">
                                        @foreach($approvals as $approval)
                                            <li>
                                                <div class="text-muted">{{$approval->created_at}}</div>
                                                <a href="#">{{$approval->approved_user->person->fname}} {{$approval->approved_user->person->lname}}</a> {{$approval->note}}
                                            </li>
                                        @endforeach
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
    <script src="{{ asset('assets/js/core.js') }}"></script>
    <script>
        $(document).ready(function () {
            getDataForMainTable();
        });

        $("#enter_field_data").click(async function () {
            await formDataAjaxNoReload("{{ route('field.receivable.save.temp') }}", "Successfully added data", "Error while adding data", "tempDataForm");
            getDataForMainTable();
        });

        function getDataForMainTable() {
            $.ajax({
                method: "GET",
                data: {"mainId": "{{ $division_main->id }}"},
                url: "{{ route('get.field.log.summary') }}",
            }).done(function (data) {
                data = JSON.parse(data);
                $("#fieldsummarytable tbody").empty();
                data.forEach((item) => {
                    $("#fieldsummarytable tbody").append("<tr><td>"+item.field.field_name+"</td><td>"+item.block.block_no+"</td><td>"+item.latex_l+"</td><td>"+item.latex_kg+"</td><td>"+item.scrap_kg+"</td><td>"+item.total+"</td></tr>");
                });
                $("#collectionSummary tbody").empty();
                data.forEach((item) => {
                    if (item.hect !== null || item.hect !== tap_per_hect || item.field_wt !== tap_per_hect || item.field_wt !== field_wt || item.field_wt !== loss) {
                        $("#collectionSummary tbody").append("<tr><td>"+item.field.field_name+"</td><td>"+item.block_no+"</td><td>"+(item.hect ?? 'Not Entered')+"</td><td>"+item.no_tappers+"</td><td>"+(item.tap_per_hect ?? 'Not Entered')+"</td><td>"+(item.field_wt ?? 'Not Entered')+"</td><td>"+(item.factory_wt ?? 'Not Entered')+"</td><td>"+(item.loss ?? 'Not Entered')+"</td></tr>");
                    }
                });
            }).fail(function () {
                messageErrorAlert("Error While Retrieving Data");
            });
        }

        $("#submit_field_data").click(async function () {
            formDataAjax("{{ route('field.log.save.approval') }}", "Field Data Saved Successfully", "Error while entering Field data", "tempDataForm");
            getDataForMainTable();
        });

        $( "#block" ).change(function() {
            $.ajax({
                method: "POST",
                url: "{{ route('get.field.data.from.block') }}",
                data: { "_token": "{{ csrf_token() }}", "mainId": "{{ $division_main->id }}", "block_id": $(this).val()},

            }).done(function (data) {
                data = JSON.parse(data);
                if (data.length > 0) {
                    data = data[0];
                    $("#hect").val(data['block']['block_hectare']);
                    $("#tappers").val(data['no_tappers']);
                    $("#tap_hect").val(data['tap_per_hect']);
                    $("#field_wt").val(data['latex_kg']);
                }
            }).fail(function () {

                messageErrorAlert("error");

            });
        });

        $( "#field" ).change(function() {

            var id = $('#field').val();

            const url = "{{ route('field.block.data') }}";

            $.ajax({
                method: "POST",
                url: url,
                data: { "_token": "{{ csrf_token() }}",
                    "myData": id},

            }).done(function (data) {
                $('#block').empty();
                data = JSON.parse(data);

                $.each(data, function (i, data) {
                    $('#block').append($('<option>', {
                        value: data.id,
                        text : data.block_no
                    }));
                });
                // messageSuccessAlert("User Rejected Successfully")

            }).fail(function () {

                messageErrorAlert("error");

            });
        });
    </script>
    {{--javascripts ends--}}
@endsection

