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
                        <div class="col-md-6">
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-reading position-left"></i> Labour details</legend>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="epf">EPF No.</label>
                                    <div class="col-lg-9">
                                        <select data-placeholder="Select an EPF number..." id="epf" class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <optgroup label="epf">
                                                <option value="0">EPF1</option>
                                                <option value="1">EPF2</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="labour">Labour Name</label>
                                    <div class="col-lg-9">
                                        <select data-placeholder="Select a Labour..." id="labour" class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <optgroup label="Labours">
                                                <option value="0">jayamaha</option>
                                                <option value="1">sumathi</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="field">Field No.</label>
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
                                    <label class="col-lg-3 control-label text-semibold" for="block">Block No.</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="block_no" id="block_no" placeholder="Enter Block No. " class="form-control mspborder required">
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
                                            <input type="text" name="latex_kg" id="latex_kg" value="" class="touchspin-empty form-control " style="display: block;">
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
                                    <label class="col-lg-3 control-label text-semibold" for="over_kg">Over Kgs.: </label>
                                    <div class="col-lg-9">
                                        <div class="input-group bootstrap-touchspin mspborder">
                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                            <input type="text" name="over_kg" id="over_kg" value="" class="touchspin-empty form-control " style="display: block;">
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label text-semibold" for="field_norms">Field Norms:</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="field_norms" id="field_norms" placeholder="Enter Field Nprm " class="form-control mspborder required">
                                    </div>
                                </div>
                                <div class="text-center" >
                                    <button type="submit" id="enter_field_data" class="btn bg-green-800 btn-labeled btn-rounded btn-xlg"><b><i class="icon-arrow-down-right32"></i></b>Enter</button>
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
                                                <th>Tappers</th>
                                                <th>Latex(L)</th>
                                                <th>Latex(kg)</th>
                                                <th>Scrap(kg)</th>
                                                <th>Total(kg)</th>
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
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>Eugene</td>
                                                <td>Kopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Eugene</td>
                                                <td>Kopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>Eugene</td>
                                                <td>Kopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Eugene</td>
                                                <td>Kopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>Eugene</td>
                                                <td>Kopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Eugene</td>
                                                <td>Kopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>Eugene</td>
                                                <td>Kopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                                <td>@Koopyov</td>
                                            </tr>

                                            </tbody>
                                            <tfoot>
                                                <tr style="background-color: #e4efaf; font-weight: bold">
                                                    <td>Total</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
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
                                            <th>#</th>
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
                                            <th>Paid</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>acasdf asfsdfasf afFFDSF</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td></td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>s</td>
                                            <td>a</td>
                                            <td>
                                                <div class="switchery-xs">
                                                    <input type="checkbox" class="switchery" checked="checked">
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td></td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>s</td>
                                            <td>
                                                <div class="switchery-xs">
                                                    <input type="checkbox" class="switchery" checked="checked">
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>

                                        </tbody>
                                        <tfoot>
                                        <tr style="background-color: #e4efaf; font-weight: bold">
                                            <td></td>
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
                                            <td></td>
                                        </tr>
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

        $("#enter_field_data").click(function(){
            var val1 = $('#epf').val();
            var val2 =$('#labour').val();
            var val3 = $('#field').val();
            var val4 =$('#block_no').val();
            var val5 =$('#latex_liters').val();
            var val6 =$('#metrolac').val();
            var val7 =$('#latex_kg').val();
            var val8 =$('#scrap_kg').val();
            var val9 =$('#over_kg').val();
            var val10 =$('#field_norms').val();
            var val11 =number(1000)+ val9*number(40);

            // count = count++;

            $("#fieldlabourtable tbody").append("<tr ><td></td><td>"+val1+"</td><td>"+val2+"</td><td>"+val3+"</td><td>"+val4+"</td><td>"+val5+"</td><td>"+val6+"</td><td>"+val7+"</td><td>"+val8+"</td><td>"+val9+"</td><td>"+val10+"</td><td>"+val11+"</td><td>button</td><td><a href='#'><i class='icon-trash'></i></a></td></tr>");
        });


        //Remove record from table
        $("#fieldlabourtable tbody").on("click",".icon-trash",function () { //trash icon click function
            var id = $(this).closest("tr").attr("id");
            $(this).closest("tr").remove();
        });//On table Delete function


    </script>
    {{--javascripts ends--}}
@endsection

