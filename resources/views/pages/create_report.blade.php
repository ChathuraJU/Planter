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

        <div class="row">
            <div class="col-sm-12">
                <form action="{{ route('report.generate') }}" method="POST">
                    @csrf
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
                                <div class="col-sm-">
                                    <fieldset>
                                            <div class="form-group" id="datepicker">
                                                <label class="control-label text-semibold">Select Month and Year:</label>
                                                <input type="text" name="month" id="month" placeholder="Enter a month " class="form-control mspborder required">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label text-semibold">Note</label>
                                                <textarea rows="5" cols="5" name="note" id="note" class="form-control" placeholder="Default textarea readonly"></textarea>
                                            </div>
                                    </fieldset>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox" class="styled">
                                    I do here by confirm the above recorded data is in order
                                </label>
                            </div>
                            <div class="text-center" >
                                <button type="submit" id="submit_field_data" class="btn bg-green-800 btn-labeled btn-rounded btn-xlg"><b><i class="icon-arrow-down-right32"></i></b>Generate Report</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    {{--page content ends--}}

    {{--Fields list table starts here--}}
    <div class="row">
        <div class="col-sm-12">

        </div>
    </div>
    {{--/fields list table ends--}}


    {{--javascript starts here--}}
    <script>

        // $("#submit_field_data").click(function () {
        //
        // });

        // $(document).ready(function(){
        //
        //     $('#reporttype').on('change', function() {
        //         if ( this.value == '0')
        //         {
        //             $("#monthselect").show();
        //             $("#yearselect").hide();
        //         }
        //         else
        //         {
        //             $("#monthselect").hide();
        //             $("#yearselect").show();
        //         }
        //     });
        // });

        $("#month").datepicker( {
            format: "yyyy-mm",
            viewMode: "months",
            minViewMode: "months"
        });
        // $("#yearpicker").datepicker( {
        //     format: "mm-yyyy",
        //     viewMode: "months",
        //     minViewMode: "months"
        // });
    </script>
    {{--java scripts ends--}}


@endsection

