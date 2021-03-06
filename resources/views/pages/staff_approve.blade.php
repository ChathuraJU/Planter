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
        <form class="form-horizontal" action="#">
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
                                        </tbody>
                                        <tfoot>
                                        <tr style="background-color: #e4efaf; font-weight: bold">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Total</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                        </tr>
                                        </tfoot>
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


                        </div>
                    </div>
                    <div class="row" style="margin-top: 50px">
                        <div class="col-sm-5">
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
                        <div class="col-sm-4">
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-truck position-left"></i>Weather</legend>
                                <div class="panel text-center bg-brown-700" style="background-image: url('{{asset('images/panel_bg.png')}}');">
                                    <div class="panel-body">
                                        <h6 class="text-semibold no-margin-bottom mt-5">20th Jan 2021</h6>
                                        <div class="opacity-75 content-group">KANDY</div>
                                        <div class="opacity-75 content-group">01.13 PM</div>
                                        <i class="icon-cloud" style="font-size: 54px"></i>
                                    </div>

                                    <div class="panel-body panel-body-accent pb-15">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="text-uppercase text-size-mini opacity-75">Rainfall</div>
                                                <h5 class="text-semibold no-margin">55.0mm</h5>
                                            </div>

                                            <div class="col-xs-4">
                                                <div class="text-uppercase text-size-mini opacity-75">Temp</div>
                                                <h5 class="text-semibold no-margin">23°C</h5>
                                            </div>

                                            <div class="col-xs-4">
                                                <div class="text-uppercase text-size-mini opacity-75">Humidity</div>
                                                <h5 class="text-semibold no-margin">93%</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-sm-3">
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


    </script>
    {{--javascripts ends--}}
@endsection

