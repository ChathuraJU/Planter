@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <i class="icon-arrow-left52 position-left"></i><span class="text-semibold">Create Nursery</span>
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
                <form action="" method="post" enctype="multipart/form-data" id="frm_nursery">
                    @csrf
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
                                        <select name="plot_region" id="plot_region"   data-placeholder="Select a Region..." class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
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
                                            <input type="text" value="" class="touchspin-empty form-control " name="plot_cuttings" id="plot_cuttings" style="display: block;">
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Layout Date:</label>
                                        <input type="date" name="plot_date" id="plot_date" placeholder="Enter date" class="form-control mspborder required">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Upload Image:</label>
                                            <input type="file" class="file-input-ajax" multiple="multiple" name="plot_image" id="plot_image">
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="text-center mb-5" >
                            <button type="button" id="submit_nursery_data" class="btn bg-green-800 btn-labeled btn-rounded btn-xlg"><b><i class="icon-arrow-down-right32"></i></b>Submit Form</button>
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
                        <h5 class="panel-title">All Nursery Dashboards</h5>
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
                            @foreach($nurseries as $nursery)
                                <tr>
                                <td>{{ $nursery->region == 0 ? 'Low Country' : 'Mid Country' }}</td>
                                    <th>{{ $nursery->plot_no}}</th>
                                    <th>{{ $nursery->no_of_cuttings}}</th>
                                    <th>{{ $nursery->layout_date}}</th>
                                    <td>
                                        <ul class="icons-list">
                                            <li><a href="#" onclick="get_nursery({{ $nursery->nursery_id}})" data-toggle="modal" data-target="#view_modal"><i class="icon-eye"></i></a></li>
                                            <li><a href="#" onclick="delete_id_set({{ $nursery->nursery_id}})" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i></a></li>
                                        </ul>
                                    </td>
                            @endforeach
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
                        <h5 class="modal-title">Plan for Plot no. : XXXXX</h5>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                        <form action="" method="post" enctype="multipart/form-data" id="frm_nursery_up">
                            @csrf
                            <div class="col-sm-6">
                                <div class="form-group">
                                <input type="hidden" name="txtid" id="txtid" placeholder="" class="form-control mspborder">
                          
                                    <label class="control-label text-semibold"> Region :</label>
                                    <input type="text" name="Region_em" id="Region_em" placeholder="Region Name" class="form-control mspborder readonly">
                                </div>
                                <div class="form-group">
                                    <label class="control-label text-semibold">Layout Date :</label>
                                    <input type="date" name="layout_date_em" id="layout_date_em" placeholder="Layout date" class="form-control mspborder readonly">
                                </div>
                                <div class="form-group">
                                    <label class="control-label text-semibold">No. of Cuttings :</label>
                                    <input type="text" name="cuttings_em" id="cuttings_em" placeholder="No. of Cuttings" class="form-control mspborder readonly">
                                </div>
                                <legend class="text-semibold"><i class="icon-images2 position-left"></i>Images</legend>
                                <div class="content-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4">
                                            <p><a href="images/placeholderimg.jpg" class="media-left" data-popup="lightbox"><img src="images/placeholderimg.jpg" id="img1" Name="img1" class="img-responsive img-rounded" alt="image"></a></p>
                                            <p><a href="images/placeholderimg.jpg" class="media-left" data-popup="lightbox"><img src="images/placeholderimg.jpg" id="img2" Name="img2" class="img-responsive img-rounded" alt="image"></a></p>
                                        </div>

                                        <div class="col-lg-4 col-sm-4">
                                            <p><a href="images/placeholderimg.jpg" class="media-left" data-popup="lightbox"><img src="images/placeholderimg.jpg" id="img3" Name="img3" class="img-responsive img-rounded" alt="image"></a></p>
                                            <p><a href="images/placeholderimg.jpg" class="media-left" data-popup="lightbox"><img src="images/placeholderimg.jpg" id="img4" Name="img4" class="img-responsive img-rounded" alt="image"></a></p>
                                        </div>

                                        <div class="col-lg-4 col-sm-4">
                                            <p><a href="images/placeholderimg.jpg" class="media-left" data-popup="lightbox"><img src="images/placeholderimg.jpg" id="img5" Name="img5"class="img-responsive img-rounded" alt="image"></a></p>
                                            <p><a href="images/placeholderimg.jpg" class="media-left" data-popup="lightbox"><img src="images/placeholderimg.jpg" id="img6" Name="img6"class="img-responsive img-rounded" alt="image"></a></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-body">
                                    <legend class="text-semibold"><i class="icon-task position-left"></i>Schedule</legend>
                                    <ul class="list-feed media-list cju-list-scroll" id="list">
                                     
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                        </div>
                    </div>

                    <div class="modal-footer">
                        <!-- <button type="button" id="submit_nursery_up" class="btn bg-green-800" data-dismiss="modal">Save changes</button> -->
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
                        <button type="button" onclick="delete_nursery()" class="btn bg-green-800" data-dismiss="modal">Yes, remove</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">No, thanks</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /remove modal -->

    </div>
    {{--page content ends--}}

    {{--javascripts starts here--}}
    <script src="{{ asset('assets/js/core.js') }}"></script>
    <script>

        $(document).ready(function () {
            datatb();
        });

        const formName = "frm_nursery";
        $("#submit_nursery_data").click(function () {
            formDataAjax("{{ route('nursery.save') }}", "Nursery Registered Successfully", "Error Registering Nursery", formName);
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

       function get_nursery(id){
           
            $("#list").empty();

            const url = "{{ route('nursery.get') }}";

            $.ajax({
                    method: "POST",
                    url: url,
                    data: { "_token": "{{ csrf_token() }}",
                            "id":id},

                }).done(function (data) {

                    data = JSON.parse(data);

                    console.log(data[0].nursery.no_of_cuttings);

                    $('#txtid').val(data[0].nursery.nursery_id)
                    $('#Region_em').val(data[0].nursery.region)
                    $('#layout_date_em').val(data[0].nursery.layout_date)
                    $('#cuttings_em').val(data[0].nursery.no_of_cuttings)

                    $("#img1").attr("src",data[0].nursery.image);
                    // $("#image2").attr("src",data.image);
                    // $("#image3").attr("src",data.image);
                    // $("#image4").attr("src",data.image);
                    // $("#image5").attr("src",data.image);
                    // $("#image6").attr("src",data.image);

                // images/placeholderimg.jpg

                $.each( data[0].nursery_plan, function( key, value ) {
                    // alert( key + ": " + data[0].nursery_plan[key].scheduled_date );
                    var status ='';
                    if(data[0].nursery_plan[key].status == 1){
                        status = '<li><a href="#" class="text-success"><i class="icon-check position-left text-success"></i> Completed</a></li>';
                    }else{
                        status = '<li><a href="#" class="text-danger "><i class="icon-spinner position-left text-danger"></i> Pending</a></li>';
                    }

                    $("#list").append('<li><span class="list-feed-solid text-muted">'+data[0].nursery_plan[key].scheduled_date+'</span>'+
                    '<div class="media-body"><div class="text-semibold">'+data[0].nursery_plan[key].task_name+'</div></div>'+
                    '<div class="media-right"><ul class="icons-list icons-list-extended text-nowrap">'+status
                    +
                    '</ul></div></li>');
                });

                }).fail(function () {

                    messageErrorAlert("error");

                });
       }

    //    const formNameup = "frm_nursery_up";
    //    $("#submit_nursery_up").click(function () {
    //        formDataAjax("{{ route('nursery.update') }}", "Nursery Updated Successfully", "Error Updating Nursery", formNameup);
    //    });

    function delete_id_set(id){
        $("#txtid").val(id);
    }


       function delete_nursery(){
           const url = "{{ route('nursery.delete') }}";

            $.ajax({
                    method: "POST",
                    url: url,
                    data: { "_token": "{{ csrf_token() }}",
                            "id": $('#txtid').val()},

                }).done(function (data) {

                    messageSuccessAlert("Nursery Deleted Successfully")

                }).fail(function () {

                    messageErrorAlert("error");

                });
       }

    </script>
    {{--javascripts ends--}}
@endsection

