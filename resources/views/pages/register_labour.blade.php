@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <i class="icon-arrow-left52 position-left"></i><span class="text-semibold">Register Labour</span>
                    </h5>
                </div>

            </div>

            <div class="breadcrumb-line" id="mydiv">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="icon-home2 position-left"></i> Home</a></li>
                    <li><a href="#">Labour</a></li>
                    <li class="active">Register Labour</li>
                </ul>

            </div>
        </div>
    </div>
    {{--page header ends--}}

    {{--page content starts here--}}
    <div class="content">

        <div class="row">
            <div class="col-sm-12">
                <form action="" method="post" enctype="multipart/form-data" id="frm_labour">
                    @csrf
                    <input type="hidden" id="txtId" name="txtId" value=""/>>
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h5 class="panel-title">Labour Register Form<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
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
                                        <label class="control-label text-semibold">First Name :</label>
                                        <input type="text" name="fname" id="fname" placeholder="Enter First Name Here." class="form-control mspborder required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Last Name :</label>
                                        <input type="text" name="lname" id="lname" placeholder="Enter Last Name Here." class="form-control mspborder required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Gender</label>
                                        <select data-placeholder="Select a Region..." id="gender" name="gender" class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <optgroup label="Regions">
                                                <option value="0">Male</option>
                                                <option value="1">Female</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Date of Birth : :</label>
                                        <input type="text" name="dob" id="dob" placeholder="Select your birthday here.." class="form-control mspborder required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">NIC No. :</label>
                                        <input type="text" name="nic" id="nic" placeholder="Enter your NIC number.." class="form-control mspborder required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Contact No. :</label>
                                        <input type="text" name="contact" id="contact" placeholder="Enter your Contact number.." class="form-control mspborder required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">Current Address :</label>
                                        <input type="text" name="address" id="address" placeholder="Enter your Current Address.." class="form-control mspborder required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label text-semibold">EPF No. :</label>
                                        <input type="text" name="epf" id="epf" placeholder="Enter your EPF number.." class="form-control mspborder required">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label text-semibold">Profile Image:</label>
                                        <div class="col-lg-10">
                                            <input type="file" class="file-input-ajax" multiple="multiple">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="text-center mb-5" >
                            <button type="button" id="submit_field_data" class="btn bg-green-800 btn-labeled btn-rounded btn-xlg"><b><i class="icon-arrow-down-right32"></i></b>Submit Form</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>



    </div>



    {{--page content ends--}}
    <script src="{{ asset('assets/js/core.js') }}"></script>
<script>
    const formName = "frm_labour";
    $("#submit_field_data").click(function () {
        formDataAjax("{{ route('labour.save') }}", "Labour Registered Successfully", "Error Registering Labour", formName);
    });

</script>

@endsection

