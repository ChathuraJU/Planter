@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <span class="text-semibold">All Reports</span>
                    </h5>
                </div>

            </div>

            <div class="breadcrumb-line" id="mydiv">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="icon-home2 position-left"></i> Home</a></li>
                    <li><a href="#">Report</a></li>
                    <li class="active">All Reports</li>
                </ul>

            </div>
        </div>
    </div>
    {{--page header ends--}}

    {{--page content starts here--}}
    <div class="content">

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h5 class="panel-title">Yearly<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
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
                                <fieldset>
                                    <legend class="text-semibold"><i class="icon-file-text position-left"></i>Yearly</legend>

                                    <table class="table datatable-button-init-basic" id="yearlyreporttable">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Year</th>
                                            <th>Name</th>
                                            <th>Preview</th>
                                            <th>Download</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>test</td>
                                            <td>test</td>
                                            <td>test</td>
                                            <td>
                                                <div class="icons-list">
                                                    <a href="#" data-popup="tooltip" title="Edit"><i class="icon-eye"></i></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icons-list">
                                                    <a href="#" data-popup="tooltip" title="Edit"><i class="icon-download"></i></a>
                                                </div>
                                            </td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </fieldset>
                            </div>
                            <div class="col-sm-6">
                                <fieldset>
                                    <legend class="text-semibold"><i class="icon-file-eye position-left"></i>Preview</legend>
                                </fieldset>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h5 class="panel-title">Monthly<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
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
                                <fieldset>
                                    <legend class="text-semibold"><i class="icon-file-text position-left"></i>Monthly</legend>

                                    <table class="table datatable-button-init-basic" id="monthlyreporttable">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Year</th>
                                            <th>Name</th>
                                            <th>Preview</th>
                                            <th>Download</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>test</td>
                                            <td>test</td>
                                            <td>test</td>
                                            <td>
                                                <div class="icons-list">
                                                    <a href="#" data-popup="tooltip" title="Edit"><i class="icon-eye"></i></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="icons-list">
                                                    <a href="#" data-popup="tooltip" title="Edit"><i class="icon-download"></i></a>
                                                </div>
                                            </td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </fieldset>
                            </div>
                            <div class="col-sm-6">
                                <fieldset>
                                    <legend class="text-semibold"><i class="icon-file-eye position-left"></i>Preview</legend>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    {{--page content ends--}}


    {{--javascript starts here--}}
    <script>
        $(document).ready(function(){

            $('#reporttype').on('change', function() {
                if ( this.value == '0')
                {
                    $("#monthselect").show();
                    $("#yearselect").hide();
                }
                else
                {
                    $("#monthselect").hide();
                    $("#yearselect").show();
                }
            });
        });



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
            var table_offset = $('#yearlyreporttable').DataTable({
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


        $(document).ready(function () {
            datatb2();
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
            var table_offset = $('#monthlyreporttable').DataTable({
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
    {{--java scripts ends--}}


@endsection

