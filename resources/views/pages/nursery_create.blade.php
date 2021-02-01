@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <span class="text-semibold">Create Nursery</span>
                    </h5>
                </div>

            </div>

            <div class="breadcrumb-line" id="mydiv">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="icon-home2 position-left"></i> Home</a></li>
                    <li><a href="#">Field</a></li>
                    <li class="active">Create Nursery</li>
                </ul>

            </div>
        </div>
    </div>
    {{--page header ends--}}

    {{--page content starts here--}}
    <div class="content">
        {{--create nursery dashboard form starts here--}}
        <div class="row">
            <div class="col-sm-12">
                <form action="#">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h5 class="panel-title">Create Nursery Form<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
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
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Region</label>
                                        <select data-placeholder="Select a Region..." class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <optgroup label="Regions">
                                                <option value="0">Mid Country</option>
                                                <option value="1">Low Country</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Plot No. :</label>
                                        <input type="text" name="plot_no" id="plot_no" placeholder="Enter Plot No." class="form-control mspborder required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Number of Cuttings: </label>
                                        <div class="input-group bootstrap-touchspin mspborder">
                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                            <input type="text" value="" class="touchspin-empty form-control " style="display: block;">
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Layout Date. : :</label>
                                        <input type="text" name="plot_no" id="plot_no" placeholder="Enter Plot No." class="form-control mspborder required">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Upload Image:</label>
                                            <input type="file" class="file-input-ajax" multiple="multiple">
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="text-center mb-5" >
                            <button type="submit" id="submit_field_data" class="btn bg-green-800 btn-labeled btn-rounded btn-xlg"><b><i class="icon-arrow-down-right32"></i></b>Submit Form</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        {{--create nursery dashboard form starts here--}}

        {{--nursery dashboard table starts here--}}
        <div class="row">
            <div class="col-sm-12">
                <!-- Basic initialization -->
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h5 class="panel-title">All Nursery dashboards</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                            </ul>
                        </div>
                    </div>

                    <table class="table datatable-button-init-basic" id="fieldstable">
                        <thead>
                            <tr>
                                <th>Region</th>
                                <th>Plot No.</th>
                                <th>No. of Cutting</th>
                                <th>Layout Date</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2207</td>
                                <th>Plot No.</th>
                                <td>200</td>
                                <td>2021.10.10</td>
                                <td>
                                    <ul class="icons-list">
                                        <li><a href="#" data-toggle="modal" data-target="#view_modal"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /basic initialization -->
            </div>
        </div>
        {{--/nursery dashboard table ends--}}

        <!-- View modal -->
        <div id="view_modal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" >
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title">View Disease Info.</h5>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label text-semibold">Disease Name :</label>
                                    <input type="text" name="disease_name" id="disease_name" placeholder="Enter Disease Name" class="form-control mspborder readonly">
                                </div>
                                <div class="form-group">
                                    <label class="control-label text-semibold">Keywords :</label>
                                    <input type="text" name="keywords" id="keywords" placeholder="Enter Keywords" class="form-control mspborder readonly">
                                </div>
                                <div class="form-group">
                                    <label class="control-label text-semibold">Description</label>
                                    <textarea rows="5" cols="5" name="description" id="description" class="form-control" placeholder="Default textarea readonly"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label text-semibold">Solutions</label>
                                    <textarea rows="5" cols="5" name="solutions" id="solutions" class="form-control" placeholder="Default textarea readonly"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="content-group">
                                            <label class="control-label text-semibold">Image</label>
                                            <p><a href="#"><img src="images/placeholderimg.jpg" class="img-responsive img-rounded" alt="image"></a></p>

                                </div>
                            </div>
                        </div>
                        <div class="row">


                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn bg-green-800" data-dismiss="modal">Save changes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /view modal -->


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
                        <button type="button" class="btn bg-green-800" data-dismiss="modal">Yes, remove</button>
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


        $(document).ready(function () {
            datatb();
        });

        // Setting datatable defaults
        $.extend($.fn.dataTable.defaults, {
            autoWidth: false,
            columnDefs: [{
                orderable: false,
                width: '20%',
                targets: [ 4 ]
            }],
            dom: '<"datatable-header"fBl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
            language: {
                search: '<span>Find:</span> _INPUT_',
                searchPlaceholder: 'Type the keyword...',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: {
                    'first': 'First',
                    'last': 'Last',
                    'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;',
                    'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;'
                }
            }
        });

        function datatb() {
            var table_offset = $('#fieldstable').DataTable({
                fixedHeader: {
                    header: true,
                },
                order: [[ 0, "desc" ]],
                buttons: {
                    dom: {
                        button: {
                            className: 'btn bg-teal-400 mspbtn'
                        }
                    },
                    buttons: [
                        {
                            extend: 'copyHtml5',
                            text: 'Copy to Clipboard <i class="icon-copy3 position-right"></i>'
                        },
                        {
                            extend: 'excelHtml5',
                            text: 'Export to Excel <i class="icon-file-excel position-right"></i>'
                        },
                        {
                            extend: 'pdfHtml5',
                            text: 'Export to PDF <i class="icon-file-pdf position-right"></i>',
                            exportOptions: {
                                columns: ':visible:not(.not-export-col)'
                            }
                        }
                    ]
                },

            });
            table_offset.fixedHeader.headerOffset($('.navbar-fixed-top').height());
        }

    </script>
    {{--javascripts ends--}}
@endsection

