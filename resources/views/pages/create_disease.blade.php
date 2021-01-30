@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <span class="text-semibold">Create Disease</span>
                    </h5>
                </div>

            </div>

            <div class="breadcrumb-line" id="mydiv">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="icon-home2 position-left"></i> Home</a></li>
                    <li><a href="#">Diseases</a></li>
                    <li class="active">Create Disease</li>
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

        {{--/create disease form starts here--}}
        <div class="row">
            <div class="col-sm-12">
                <form action="#">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h5 class="panel-title">Create Disease Form<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
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
                                        <label class="control-label text-semibold">Disease Name :</label>
                                        <input type="text" name="disease_name" id="disease_name" placeholder="Enter Disease Name" class="form-control mspborder required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Keywords :</label>
                                        <input type="text" name="keywords" id="keywords" placeholder="Enter Keywords" class="form-control mspborder required">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Description</label>
                                            <textarea rows="5" cols="5" name="description" id="description" class="form-control" placeholder="Default textarea"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Solutions</label>
                                            <textarea rows="5" cols="5" name="solutions" id="solutions" class="form-control" placeholder="Default textarea"></textarea>
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
        {{--/create disease form ends--}}

        {{--disease table starts here--}}
        <div class="row">
            <div class="col-sm-12">
                <!-- Basic initialization -->
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h5 class="panel-title">Diseases List</h5>
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
                            <th>ID</th>
                            <th>Disease name</th>
                            <th>Keyword</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>2207</td>
                            <th>Plot No.</th>
                            <td>200</td>
                            <td><ul class="icons-list">
                                    <li><a href="#" data-toggle="modal" data-target="#view_modal"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i></a></li>

                                </ul></td>
                            <td><a href="#">Delete</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /basic initialization -->

                <!-- Edit modal -->
                <div id="view_modal" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: rgba(156,170,180,0.43)">
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
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label text-semibold">Keywords :</label>
                                            <input type="text" name="keywords" id="keywords" placeholder="Enter Keywords" class="form-control mspborder readonly">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label text-semibold">Description</label>
                                            <textarea rows="5" cols="5" name="description" id="description" class="form-control" placeholder="Default textarea readonly"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label text-semibold">Solutions</label>
                                            <textarea rows="5" cols="5" name="solutions" id="solutions" class="form-control" placeholder="Default textarea readonly"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="content-group">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4">
                                                    <p><a href="#"><img src="images/placeholderimg.jpg" class="img-responsive img-rounded" alt="image"></a></p>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /edit modal -->


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
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Yes, remove</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">No, thanks</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /remove modal -->


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

