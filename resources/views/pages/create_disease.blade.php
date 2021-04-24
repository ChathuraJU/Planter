@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <i class="icon-arrow-left52 position-left"></i><span class="text-semibold">Create Disease</span>
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

        {{--/create disease form starts here--}}
        <div class="row">
            <div class="col-sm-12">
                <form action="" method="post" enctype="multipart/form-data" id="frm_disease">
                    @csrf

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
                                            <textarea rows="5" cols="5" name="description" id="description" class="form-control mspborder required" placeholder="Default textarea"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Solutions</label>
                                            <textarea rows="5" cols="5" name="solutions" id="solutions" class="form-control mspborder required" placeholder="Default textarea"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Upload Image:</label>
                                        <input type="file" class="file-input-ajax" multiple="multiple" name="img_file">
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="text-center mb-5" >
                            <button type="button" id="submit_disease_data" class="btn bg-green-800 btn-labeled btn-rounded btn-xlg"><b><i class="icon-arrow-down-right32"></i></b>Submit Form</button>
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

                    <table class="table datatable-button-init-basic" id="diseasetable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Disease name</th>
                                <th>Keyword</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($diseases as $disease)
                            <tr id="{{ $disease->id }}">
                                <td>{{ $disease->id }}</td>
                                <td>{{ $disease->disease_name }}</td>
                                <td>{{ $disease->keywords }}</td>
                                <td>
                                    <ul class="icons-list">
                                        <li><a href="#" onclick="get_disease({{ $disease->id }})" data-toggle="modal" data-target="#view_modal"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" onclick="delete_disease_id({{ $disease->id }})" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach

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
                                <h5 class="modal-title">View Disease Info.</h5>
                            </div>

                            <div class="modal-body">
                                <form action="" method="post" enctype="multipart/form-data" id="frm_disease_up">
                                    @csrf
                                    <input type="hidden" id="txtId" name="txtId" value=""/>
                                    <div class="row">
                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label class="control-label text-semibold">Disease Name :</label>
                                                <input type="text" name="disease_name_up" id="disease_name_up" placeholder="Enter Disease Name" class="form-control mspborder readonly">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label text-semibold">Keywords :</label>
                                                <input type="text" name="keywords_up" id="keywords_up" placeholder="Enter Keywords" class="form-control mspborder readonly">
                                            </div>

                                        </div>
                                        <div class="col-sm-6">
                                            <div class="content-group">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-4">
                                                        <p><a href="#"><img id="image1" src="" class="img-responsive img-rounded" alt="image"></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label text-semibold">Description</label>
                                                <textarea rows="5" cols="5" name="description_up" id="description_up" class="form-control" placeholder="Default textarea readonly"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label text-semibold">Solutions</label>
                                                <textarea rows="5" cols="5" name="solutions_up" id="solutions_up" class="form-control" placeholder="Default textarea readonly"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>

                            <div class="modal-footer">
                                <button type="button" id="submit_disease_data_up" class="btn bg-green-800" data-dismiss="modal">Save changes</button>
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
                                <button type="button" onclick="delete_disease()" class="btn bg-green-800" data-dismiss="modal">Yes, remove</button>
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
            var table_offset = $('#diseasetable').DataTable({
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

<script src="{{ asset('assets/js/core.js') }}"></script>

<script>
    const formName = "frm_disease";
       $("#submit_disease_data").click(function () {
           formDataAjax("{{ route('disease.save') }}", "Disease Registered Successfully", "Error Registering Disease", formName);
       });

    const formNameup = "frm_disease_up";
       $("#submit_disease_data_up").click(function () {
           formDataAjax("{{ route('disease.save') }}", "Disease Updated Successfully", "Error Updating Disease", formNameup);
       });

  function delete_disease(){


    const url = "{{ route('disease.delete') }}";

    $.ajax({
            method: "POST",
            url: url,
            data: { "_token": "{{ csrf_token() }}",
                    "id": $('#txtId').val()},

        }).done(function (data) {

            messageSuccessAlert("Disease Deleted Successfully")

        }).fail(function () {

            messageErrorAlert("error");

        });
  }

  function delete_disease_id(id){
    $('#txtId').val(id);
  }

  function get_disease(id){

    const url = "{{ route('disease.get') }}";

    $.ajax({
            method: "POST",
            url: url,
            data: { "_token": "{{ csrf_token() }}",
                    "id":id},

        }).done(function (data) {

            data = JSON.parse(data);

            $('#txtId').val(data.id)
            $('#disease_name_up').val(data.disease_name)
            $('#keywords_up').val(data.keywords)
            $('#description_up').val(data.descriptions)
            $('#solutions_up').val(data.solution)
            $("#image1").attr("src",data.image);
            $("#image2").attr("src",data.image);
            $("#image3").attr("src",data.image);
            $("#image4").attr("src",data.image);
            $("#image5").attr("src",data.image);
            $("#image6").attr("src",data.image);

        // images/placeholderimg.jpg


        }).fail(function () {

            messageErrorAlert("error");

        });
  }


</script>



    {{--javascripts ends--}}

@endsection

