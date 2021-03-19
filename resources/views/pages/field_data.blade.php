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

        {{--Add field data form starts here--}}
        <form class="form-horizontal" id="frm_create_field_data" action="#">
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
                        <div class="col-md-6">
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-reading position-left"></i> Labour details</legend>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="labour">Labour Name</label>
                                    <div class="col-lg-9">
                                        <select data-placeholder="Select a Labour..." id="labour"  name="labour" class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <optgroup label="Labours">
                                                @foreach($persons as $person)
                                                    <option value="{{ $person->person_id }}">{{ $person->fname }} {{ $person->lname }}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="epf">EPF No.</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="epf" id="epf" placeholder="Enter EPF No. " class="form-control mspborder required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="field">Field No.</label>
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
                                    <label class="col-lg-3 control-label text-semibold" for="block">Block No.</label>
                                    <div class="col-lg-9">
                                        <select data-placeholder="Select Block No. " id="block_no" name="block_no" class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <optgroup label="Blocks">

                                            </optgroup>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="latex_liters">Number of Liters(L): </label>
                                    <div class="col-lg-9">
                                        <div class="input-group bootstrap-touchspin mspborder">
                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                            <input type="text" name="latex_liters" id="latex_liters" value="" class="touchspin-empty form-control " style="display: block;">
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="metrolac">Metrolac Reading: </label>
                                    <div class="col-lg-9">
                                        <div class="input-group bootstrap-touchspin mspborder">
                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                            <input type="text" name="metrolac" id="metrolac" value="" class="touchspin-empty form-control " style="display: block;">
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="latex_kg">Latex Kgs.: </label>
                                    <div class="col-lg-9">
                                        <div class="input-group bootstrap-touchspin mspborder">
                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                            <input type="text" name="latex_kg" id="latex_kg" value=""  onkeyup="calculateOverKgs()" onchange="calculateOverKgs()" class="touchspin-empty form-control " style="display: block;">
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="scrap_kg">Scrap Kgs.: </label>
                                    <div class="col-lg-9">
                                        <div class="input-group bootstrap-touchspin mspborder">
                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                            <input type="text" name="scrap_kg" id="scrap_kg" value="" class="touchspin-empty form-control " style="display: block;">
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="field_norms">Field Norms:</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="field_norms" id="field_norms" onkeyup="calculateOverKgs()"  onchange="calculateOverKgs()" placeholder="Enter Field Nprm " class="form-control mspborder required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="over_kg">Over Kgs.: </label>
                                    <div class="col-lg-9">
                                        <div class="input-group bootstrap-touchspin mspborder">
                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                            <input type="text" name="over_kg" id="over_kg" value="" class="touchspin-empty form-control " style="display: block;" readonly>
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="field_norms">Payable:</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="payable" id="payable" placeholder="Payable Amount " class="form-control mspborder required" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="field">Paid</label>
                                    <div class="col-lg-9">
                                        <select data-placeholder="Select..." id="paid" name="paid" class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <optgroup label="Options">
                                                <option value="0">Not Paid</option>
                                                <option value="1">Paid</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="text-center" >
                                    <button type="button" id="enter_field_data" class="btn bg-green-800 btn-labeled btn-rounded btn-xlg"><b><i class="icon-arrow-down-right32"></i></b>Enter</button>
                                </div>

                            </fieldset>
                        </div>

                        <div class="col-md-6">
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-truck position-left"></i>Collection Summary</legend>
                                <!-- Scrollable table -->
                                    <div class="table-responsive pre-scrollable" style="max-height: 500px">
                                        <table class="table table-bordered" id="fieldsummarytable">
                                            <thead>
                                            <tr class="bg-green">
                                                <th>Field No.</th>
                                                <th>Block No.</th>
                                                <th>Tappers</th>
                                                <th>Latex(L)</th>
                                                <th>Latex(kg)</th>
                                                <th>Scrap(kg)</th>
                                                <th>Total(kg)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                            <tfoot>

                                            </tfoot>
                                        </table>
                                    </div>
                                <!-- /scrollable table -->
                            </fieldset>
                        </div>
                    </div>

                    <div class="row " style="margin-top: 50px">
                        <div class="col-md-12">
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-stack3 position-left"></i>Labour Collection Summary</legend>
                                <div class="table-responsive pre-scrollable">
                                    <table class="table table-striped table-bordered table-hover" id="fieldlabourtable">
                                        <thead>
                                        <tr class="bg-green">
                                            <th>EPF No.</th>
                                            <th>Labour Name</th>
                                            <th>Field Name</th>
                                            <th>Block No.</th>
                                            <th>No. of Liters</th>
                                            <th>Metrolac Reading</th>
                                            <th>Latex(Kgs)</th>
                                            <th>Scrap(Kgs)</th>
                                            <th>Over(Kgs)</th>
                                            <th>Field Norm</th>
                                            <th>Payable</th>
                                            <th>paid</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>

                                        </tfoot>
                                    </table>
                                </div>
                            </fieldset>
                        </div>

                    </div>
                    <div class="row" style="margin-top: 50px">
                        <div class="col-md-12">
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-stack-plus position-left"></i>Confirmation</legend>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label text-semibold">Image Attachments:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="file-input-ajax" name="uploadedFile">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label text-semibold">Your message:</label>
                                        <div class="col-lg-9">
                                        <textarea name="txtMessage" rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" class="styled">
                                            I do here by confirm the above recorded data is in order
                                        </label>
                                    </div>
                                <input type="hidden" name="lon" id="lon">
                                <input type="hidden" name="lat" id="lat">
                                    <div class="text-center" >
                                        <button type="button" id="submit_field_data" class="btn bg-green-800 btn-labeled btn-rounded btn-xlg"><b><i class="icon-arrow-down-right32"></i></b>Submit Form</button>
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
    <script src="{{ asset('assets/js/core.js') }}"></script>
    <script>

        function calculateOverKgs() {
            let fNorm = Number($("#field_norms").val());
            let latexKg = Number($("#latex_kg").val());
            let overKgs = latexKg - fNorm;
            $("#over_kg").val(overKgs);

            let payable = (overKgs *40) + 1000;
            $("#payable").val(payable);
        }

        $(".touchspin-empty").TouchSpin({
            max: 1000000,
        });

        function getDataForMainTable() {
            $.ajax({
                method: "GET",
                url: "{{ route('get.field.labour.data') }}",
            }).done(function (data) {
                data = JSON.parse(data);
                $("#fieldlabourtable tbody").empty();
                $("#fieldlabourtable tfoot").empty();
                let sum_tappers = 0;
                let sum_latexl = 0;
                let sum_latexkg = 0;
                let sum_scrap = 0;
                let sum_total = 0;

                let col_liters = 0;
                let col_latexkg = 0;
                let col_scrap = 0;
                let col_over = 0;
                let col_payable = 0;

                data.data.forEach((item) => {
                    let paidLbl = item.paid ? 'PAID' : 'NOT PAID';
                    $("#fieldlabourtable tbody").append("<tr id='"+item.id+"'><td>"+item.epf_id+"</td><td>"+item.labour.fname+" "+item.labour.lname+"</td><td>"+item.field.field_name+"</td><td>"+item.block.block_no+"</td><td>"+item.no_of_liters+"</td><td>"+item.metrolac_reading+"</td><td>"+item.latex+"</td><td>"+item.scrap+"</td><td>"+item.over+"</td><td>"+item.field_norm+"</td><td>"+item.payable+"</td><td>"+paidLbl+"</td><td><button type='button' onclick='deleteLabourData("+item.id+")'><i class='icon-trash'></i></button></td></tr>");

                    col_liters = Number(item.no_of_liters) + col_liters;
                    col_latexkg = Number(item.latex) + col_latexkg;
                    col_scrap = Number(item.scrap) + col_scrap;
                    col_over = Number(item.over) + col_over;
                    col_payable = Number(item.payable) + col_payable;
                });

                $("#fieldlabourtable tbody").append('<tr style="background-color: #e4efaf; font-weight: bold">\n' +
                    '                                            <td>Total</td>\n' +
                    '                                            <td></td>\n' +
                    '                                            <td></td>\n' +
                    '                                            <td></td>\n' +
                    '                                            <td>'+col_liters+'</td>\n' +
                    '                                            <td></td>\n' +
                    '                                            <td>'+col_latexkg+'</td>\n' +
                    '                                            <td>'+col_scrap+'</td>\n' +
                    '                                            <td>'+col_over+'</td>\n' +
                    '                                            <td></td>\n' +
                    '                                            <td>'+col_payable+'</td>\n' +
                    '                                            <td></td>\n' +
                    '                                            <td></td>\n' +
                    '                                        </tr>');

                $("#fieldsummarytable tbody").empty();
                $("#fieldsummarytable tfoot").empty();
                data.summer.forEach((item) => {
                    console.log(item);
                    $("#fieldsummarytable tbody").append("<tr><td>"+item.field_name+"</td><td>"+item.blk+"</td><td>"+item.tappers+"</td><td>"+item.latexL+"</td><td>"+item.latexKg+"</td><td>"+item.scrap+"</td><td>"+item.totalKg+"</td></tr>");
                    sum_tappers = Number(item.tappers) + sum_tappers;
                    sum_latexl = Number(item.latexL) + sum_latexl;
                    sum_latexkg = Number(item.latexKg) + sum_latexkg;
                    sum_scrap = Number(item.scrap) + sum_scrap;
                    sum_total = Number(item.totalKg) + sum_total;
                });

                $("#fieldsummarytable tfoot").append('<tr style="background-color: #e4efaf; font-weight: bold">\n' +
                    '                                                    <td>Total</td>\n' +
                    '                                                    <td></td>\n' +
                    '                                                    <td>'+sum_tappers+'</td>\n' +
                    '                                                    <td>'+sum_latexl+'</td>\n' +
                    '                                                    <td>'+sum_latexkg+'</td>\n' +
                    '                                                    <td>'+sum_scrap+'</td>\n' +
                    '                                                    <td>'+sum_total+'</td>\n' +
                    '                                                </tr>');

            }).fail(function () {
                messageErrorAlert("Error While Retrieving Data");
            });
        }

        function deleteLabourData(id) {
            $.ajax({
                method: "GET",
                url: "{{ route('delete.field.labour.data') }}",
                data: {
                    id: id
                }
            }).done(function (data) {
                messageSuccessAlertNoReload("Data Deleted");
                getDataForMainTable();
            }).fail(function () {
                messageErrorAlert("Error While Deleting Data");
            });
        }

        $(document).ready(function () {
            getDataForMainTable();
        });

        $("#enter_field_data").click(function () {
            formDataAjaxNoReload("{{ route('field.log.add') }}", "Field Labour Data Entered Successfully", "Error while entering Field data", "frm_create_field_data");
            getDataForMainTable();
        });

        $("#submit_field_data").click(async function () {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition((response) => {
                    console.log(response.coords.latitude);
                    $("#lon").val(response.coords.longitude);
                    $("#lat").val(response.coords.latitude);
                    formDataAjax("{{ route('field.log.save') }}", "Field Data Saved Successfully", "Error while entering Field data", "frm_create_field_data");
                    getDataForMainTable();
                }, (error) => {
                    console.log(error);
                });
            } else {
                console.log("Geolocation is not supported by this browser.");
            }
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
                $('#block_no').empty();
                data = JSON.parse(data);
                $.each(data, function (i, data) {
                    $('#block_no').append($('<option>', {
                        value: data.id,
                        text : data.block_no
                    }));
                });
                // messageSuccessAlert("User Rejected Successfully")
            }).fail(function () {
                messageErrorAlert("error");
            });
        });

        $( "#labour" ).change(function() {

            // alert("okay");

            var id = $('#labour').val();

            const url = "{{ route('field.person.epf') }}";

            $.ajax({
                method: "POST",
                url: url,
                data: { "_token": "{{ csrf_token() }}",
                    "myData": id},

            }).done(function (data) {

                data = JSON.parse(data);
                $("#epf").val(data[0].epf);

                // messageSuccessAlert("User Rejected Successfully")

            }).fail(function () {

                messageErrorAlert("error");

            });
        });
    </script>
    {{--javascripts ends--}}
@endsection

