@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <i class="icon-arrow-left52 position-left"></i><span class="text-semibold">Approve Field Receivables</span>
                    </h5>
                </div>

            </div>

            <div class="breadcrumb-line" id="mydiv">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="icon-home2 position-left"></i> Home</a></li>
                    <li><a href="#">Field</a></li>
                    <li class="active">Approve Field Receivables</li>
                </ul>

            </div>
        </div>
    </div>
    {{--page header ends--}}



    {{--page content starts here--}}
    <div class="content">
        {{--Add field data form starts here--}}
        <form class="form-horizontal" id="staffApproveForm" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="mainId" value="{{$division_main->id}}">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h5 class="panel-title">Approval View</h5>
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
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($LabourCollectionSummaries as $LabourCollectionSummary)
                                            <tr>
                                                <td>{{$LabourCollectionSummary->epf}}</td>
                                                <td>{{$LabourCollectionSummary->fname}}</td>
                                                <td>{{$LabourCollectionSummary->field_name}}</td>
                                                <td>{{$LabourCollectionSummary->block_no}}</td>
                                                <td>{{$LabourCollectionSummary->labour_latex_liters}}</td>
                                                <td>{{$LabourCollectionSummary->metrolac_reading}}</td>
                                                <td>{{$LabourCollectionSummary->labour_latex_kgs}}</td>
                                                <td>{{$LabourCollectionSummary->labour_scrap_kgs}}</td>
                                                <td>{{$LabourCollectionSummary->labour_over_kgs}}</td>
                                                <td>{{$LabourCollectionSummary->labour_field_norms}}</td>
                                                <td>{{$LabourCollectionSummary->labour_payable}}</td>
                                                @if($LabourCollectionSummary->labour_pay_status == 0)
                                                    <td>Not Paid</td>
                                                @else
                                                    <td>Paid</td>
                                                @endif
                                            </tr
                                        @endforeach
                                        </tbody>
{{--                                        <tfoot>--}}
{{--                                        <tr style="background-color: #e4efaf; font-weight: bold">--}}
{{--                                            <td></td>--}}
{{--                                            <td></td>--}}
{{--                                            <td></td>--}}
{{--                                            <td>Total</td>--}}
{{--                                            <td></td>--}}
{{--                                            <td></td>--}}
{{--                                            <td></td>--}}
{{--                                            <td></td>--}}
{{--                                            <td></td>--}}
{{--                                            <td></td>--}}
{{--                                            <td></td>--}}
{{--                                            <td></td>--}}

{{--                                        </tr>--}}
{{--                                        </tfoot>--}}
                                    </table>
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
                                        <tfoot>

                                        </tfoot>

                                    </table>
                                </div>
                                <!-- /scrollable table -->
                            </fieldset>


                        </div>
                    </div>
                    <div class="row" style="margin-top: 50px">
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-7">
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
                                </div>
                                <div class="col-sm-5">
                                    <fieldset>
                                        <legend class="text-semibold"><i class="icon-truck position-left"></i>Weather</legend>
                                        <div class="panel text-center bg-brown-700" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                                            <div class="panel-body">
                                                <h6 class="text-semibold no-margin-bottom mt-5">{{explode(' ', $division_main->created_at)[0]}}</h6>
                                                <div class="opacity-75 content-group">{{$division_main->weather->name}}</div>
                                                <div class="opacity-75 content-group">{{explode(' ', $division_main->created_at)[1]}}</div>
                                                <img src="http://openweathermap.org/img/w/{{ $division_main->weather->weather[0]->icon }}.png" alt="">
                                            </div>

                                            <div class="panel-body panel-body-accent pb-15">
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <div class="text-uppercase text-size-mini opacity-75">Rainfall</div>
                                                        <h5 class="text-semibold no-margin">{{$division_main->weather->clouds->all}}mm</h5>
                                                    </div>

                                                    <div class="col-xs-4">
                                                        <div class="text-uppercase text-size-mini opacity-75">Temp</div>
                                                        <h5 class="text-semibold no-margin">{{$division_main->weather->main->temp -273.15}}°C</h5>
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
                            <div class="row">
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
                                            </tr>

                                            </tfoot>

                                        </table>
                                    </div>
                                    <!-- /scrollable table -->
                                </fieldset>
                                <fieldset class="mt-5">
                                    <legend class="text-semibold"><i class="icon-stack-plus position-left"></i>Confirmation</legend>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label text-semibold">Image Attachments: <span style="color: #a8a8a8">(Only if needed)</span></label>
                                        <div class="col-lg-9">
                                            <input type="file" class="file-input-ajax" name="uploadedFile">
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

                        </div>

                        <div class="col-sm-3">
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-images2 position-left"></i>Images</legend>
                                <div class="content-group">
                                    <div class="row">
                                        @foreach($approvals as $approval)
                                            <div class="col-lg-4 col-sm-4">
                                                <p><a href="#"><img src="{{asset($approval->image)}}" class="img-responsive img-rounded" alt="image" ></a></p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </fieldset>
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
                        </div>
                    </div>



                </div>
            </div>
        </form>
        {{--/Add field data form ends--}}




    </div>
    {{--page content ends--}}


    {{--javascripts starts here--}}
    <script src="{{ asset('assets/js/core.js') }}"></script>
    <script>
        $(document).ready(function () {
            getDataForMainTable();
        });

        $("#submit_field_data").click(async function () {
            formDataAjax("{{ route('save.staff.approve') }}", "Approved Successfully", "Error while Approving", "staffApproveForm");
            getDataForMainTable();
        });

        function getDataForMainTable() {
            $.ajax({
                method: "GET",
                data: {"mainId": "{{ $division_main->id }}"},
                url: "{{ route('get.field.log.summary') }}",
            }).done(function (data) {

                let sum_latexl = 0;
                let sum_latexkg = 0;
                let sum_scrap = 0;
                let sum_total = 0;

                data = JSON.parse(data);
                $("#fieldsummarytable tbody").empty();
                $("#fieldsummarytable tfoot").empty();
                data.forEach((item) => {
                    console.log(item);
                    $("#fieldsummarytable tbody").append("<tr><td>"+item.field.field_name+"</td><td>"+item.block.block_no+"</td><td>"+item.latex_l+"</td><td>"+item.latex_kg+"</td><td>"+item.scrap_kg+"</td><td>"+item.total+"</td></tr>");
                    sum_latexl = Number(item.latex_l) + sum_latexl;
                    sum_latexkg = Number(item.latex_kg) + sum_latexkg;
                    sum_scrap = Number(item.scrap_kg) + sum_scrap;
                    sum_total = Number(item.total) + sum_total;
                });

                $("#fieldsummarytable tfoot").append('<tr style="background-color: #e4efaf; font-weight: bold">\n' +
                    '                                                    <td>Total</td>\n' +
                    '                                                    <td></td>\n' +
                    '                                                    <td>'+sum_latexl+'</td>\n' +
                    '                                                    <td>'+sum_latexkg+'</td>\n' +
                    '                                                    <td>'+sum_scrap+'</td>\n' +
                    '                                                    <td>'+sum_total+'</td>\n' +
                    '                                                </tr>');



                let hect = 0;
                let no_tappers = 0;
                let tap_per_hect = 0;
                let field_wt = 0;
                let factory_wt = 0;
                let loss = 0;

                $("#collectionSummary tbody").empty();
                $("#collectionSummary tfoot").empty();
                data.forEach((item) => {
                    $("#collectionSummary tbody").append("<tr><td>"+item.field.field_name+"</td><td>"+item.block_no+"</td><td>"+(item.hect ?? 'Not Entered')+"</td><td>"+item.no_tappers+"</td><td>"+(item.tap_per_hect ?? 'Not Entered')+"</td><td>"+(item.field_wt ?? 'Not Entered')+"</td><td>"+(item.factory_wt ?? 'Not Entered')+"</td><td>"+(item.loss ?? 'Not Entered')+"</td></tr>");

                    hect = Number(item.hect) + hect;
                    no_tappers = Number(item.no_tappers) + no_tappers;
                    tap_per_hect = Number(item.tap_per_hect) + tap_per_hect;
                    field_wt = Number(item.field_wt) + field_wt;
                    factory_wt = Number(item.factory_wt) + factory_wt;
                    loss = Number(item.loss) + loss;
                });

                $("#collectionSummary tbody").append('<tr style="background-color: #e4efaf; font-weight: bold">\n' +
                    '                                            <td>Total</td>\n' +
                    '                                            <td></td>\n' +
                    '                                            <td>'+hect+'</td>\n' +
                    '                                            <td>'+no_tappers+'</td>\n' +
                    '                                            <td>'+tap_per_hect+'</td>\n' +
                    '                                            <td>'+field_wt+'</td>\n' +
                    '                                            <td>'+factory_wt+'</td>\n' +
                    '                                            <td>'+loss+'</td>\n' +
                    '                                        </tr>');
            }).fail(function () {
                messageErrorAlert("Error While Retrieving Data");
            });
        }
    </script>
    {{--javascripts ends--}}
@endsection

