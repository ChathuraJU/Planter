@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <i class="icon-arrow-left52 position-left"></i><span class="text-semibold">Create Field</span>
                    </h5>
                </div>

            </div>

            <div class="breadcrumb-line" id="mydiv">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="icon-home2 position-left"></i> Home</a></li>
                    <li><a href="#">Field</a></li>
                    <li class="active">Create Field</li>
                </ul>

            </div>
        </div>
    </div>
    {{--page header ends--}}

    {{--page content starts here--}}
    <div class="content">

        {{--create field form starts here--}}
        <div class="row">
            <div class="col-sm-12">
                <form action="" method="post" enctype="multipart/form-data" id="frm_field">
                    @csrf
                    <input type="hidden" id="txtId" name="txtId" value=""/>
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h5 class="panel-title">Create Field Form<a class="heading-elements-toggle"><i
                                        class="icon-more"></i></a></h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Division</label>
                                        <select data-placeholder="Select a Division..."
                                                class="select select2-hidden-accessible" id="txtDivision" name="txtDivision"
                                                tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <optgroup label="Divisions">
                                                <option value="0">Upper Division</option>
                                                <option value="1">Lower Division</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Field Name:</label>
                                        <input type="text" name="txt_field_name" id="txt_field_name"
                                               placeholder="Enter Field Name " class="form-control mspborder required">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Number of Hectares: </label>
                                        <div class="input-group bootstrap-touchspin mspborder">
                                            <span class="input-group-addon bootstrap-touchspin-prefix"
                                                  style="display: none;"></span>
                                            <input type="text" value="" id="txt_no_of_hecatres" name="txt_no_of_hecatres"
                                                   class="touchspin-empty form-control " style="display: block;">
                                            <span class="input-group-addon bootstrap-touchspin-postfix"
                                                  style="display: none;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label text-semibold">Upload Image:</label>
                                        <div class="col-lg-10">
                                            <input type="file" name="txt_upload_image" class="file-input-ajax" >
{{--                                            <span class="help-block">This scenario uses asynchronous/parallel uploads. Uploading itself is turned off in live preview.</span>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="text-center mb-5">
                            <button type="button" id="submit_field_data"
                                    class="btn bg-green-800 btn-labeled btn-rounded btn-xlg"><b><i
                                        class="icon-arrow-down-right32"></i></b>Submit Form
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        {{--create field form ends--}}

        {{--Fields list table starts here--}}
        <div class="row">
            <div class="col-sm-12">
                <!-- Basic initialization -->
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h5 class="panel-title">All Fields</h5>
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
                            <th>Division</th>
                            <th>Image</th>
                            <th>Field Name</th>
                            <th>Number of Hectares</th>
                            <th>Remaining Hectare</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($fields as $field)
                            <tr id="{{ $field->field_id }}">
                                <td>{{ $field->division_id == 0 ? 'Upper Division' : 'Lower Division' }}</td>
                                <td><img src="{{asset($field->image)}}" alt="field image" style="max-width: 50px; max-height: 50px"></td>
                                <td>{{ $field->field_name }}</td>
                                <td class="text-center">{{ $field->hectare }}</td>
                                <td class="text-center">{{ $field->remaining_hectare }}</td>
                                <td><a href="#">Update</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /basic initialization -->
            </div>
        </div>
        {{--/fields list table ends--}}


    </div>
    {{--page content ends--}}

    {{--javascripts starts here--}}
    <script src="{{ asset('assets/js/core.js') }}"></script>
    <script>
        tableRowClick("{{ csrf_token() }}", "{{ route('field.get') }}", function (data) {
            var decodedData = JSON.parse(data);
            $("#txtId").val(decodedData.field_id);
            $("#txtDivision").select2().val(decodedData.division_id).trigger("change");
            $("#txt_field_name").val(decodedData.field_name);
            $("#txt_no_of_hecatres").val(decodedData.hectare);
        });

        const formName = "frm_field";
        $("#submit_field_data").click(function () {
            formDataAjax("{{ route('field.save') }}", "Field Registered Successfully", "Error Registering Field", formName);
        });

        $(document).ready(function () {
            $("#" + formName).trigger('reset');
            datatb();
        });

        // Setting datatable defaults
        $.extend($.fn.dataTable.defaults, {
            autoWidth: false,
            columnDefs: [{
                orderable: false,
                width: '20%',
                targets: [4]
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
                order: [[0, "desc"]],
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

