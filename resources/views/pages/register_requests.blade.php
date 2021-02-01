@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <span class="text-semibold">Register Requests</span>
                    </h5>
                </div>

            </div>

            <div class="breadcrumb-line" id="mydiv">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="icon-home2 position-left"></i> Home</a></li>
                    <li><a href="#">Miscellaneous</a></li>
                    <li class="active">Register Requests</li>
                </ul>

            </div>
        </div>
    </div>
    {{--page header ends--}}

    {{--page content starts here--}}
    <div class="content">

        {{--disease table starts here--}}
        <div class="row">
            <div class="col-sm-12">
                <!-- Basic initialization -->
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h5 class="panel-title">Request List</h5>
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
                            <th>#</th>
                            <th>Name</th>
                            <th>NIC</th>
                            <th>Contact No.</th>
                            <th>Estate Name</th>
                            <th>Designation</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>
                                <ul class="icons-list">
                                    <li><a href="#" data-toggle="modal" data-target="#view_modal"><i class="icon-file-check"></i></a></li>
                                </ul>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /basic initialization -->

                <!-- View modal -->
                <div id="view_modal" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h5 class="modal-title">View Person Info.</h5>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label text-semibold">First Name :</label>
                                            <input type="text" name="fname" id="disease_name" placeholder="Enter First Name" class="form-control mspborder disabled">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label text-semibold">DOB :</label>
                                            <input type="text" name="dob" id="dob" placeholder="Enter your birthday" class="form-control mspborder disabled">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label text-semibold">NIC :</label>
                                            <input type="text" name="nic" id="nic" placeholder="Enter Last NIC no." class="form-control mspborder disabled">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label text-semibold">Current Address :</label>
                                            <input type="text" name="address" id="address" placeholder="Enter your address" class="form-control mspborder disabled">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label text-semibold">Estate Name :</label>
                                            <input type="text" name="estate" id="estate" placeholder="Enter Estate Name" class="form-control mspborder readonly">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label text-semibold">Last Name :</label>
                                            <input type="text" name="lname" id="lname" placeholder="Enter Last Name" class="form-control mspborder disabled">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label text-semibold">Gender :</label>
                                            <input type="text" name="gender" id="gender" placeholder="Enter your Gender" class="form-control mspborder readonly">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label text-semibold">Contact No. :</label>
                                            <input type="text" name="contact" id="contact" placeholder="Enter your contact no." class="form-control mspborder readonly">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label text-semibold">Email Address :</label>
                                            <input type="text" name="email" id="email" placeholder="Enter your email" class="form-control mspborder disabled">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label text-semibold">Designation :</label>
                                            <input type="text" name="designation" id="designation" placeholder="Enter your designation" class="form-control mspborder readonly">
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="modal-footer text-center">
                                <button type="button" class="btn bg-green-800" data-dismiss="modal"><a href="#" data-toggle="modal" data-target="#approve_modal" style="color: white">Approve Request</a></button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><a href="#" data-toggle="modal" data-target="#reject_modal" style="color: white">Reject Request</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /view modal -->


                <!-- Approve modal -->
                <div id="approve_modal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h5 class="modal-title">Confirm action</h5>
                            </div>

                            <div class="modal-body">
                                You are about to approve this request. Are you sure?
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn bg-green-800" data-dismiss="modal">Yes, approve</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">No, thanks</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /approve modal -->
                <!-- Reject modal -->
                <div id="reject_modal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h5 class="modal-title">Confirm action</h5>
                            </div>

                            <div class="modal-body">
                                You are about to reject this request. Are you sure?
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn bg-green-800" data-dismiss="modal">Yes, reject</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">No, thanks</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /reject modal -->
            </div>
        </div>
        {{--/disease table ends--}}



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
                width: 'auto',
                targets: [ 6 ]
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

