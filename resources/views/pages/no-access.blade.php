@extends('full')

@section('main')


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content">

                    <!-- Error title -->
                    <div class="text-center content-group">
                        <h1 class="error-title">405</h1>
                        <h5>Oops, an error has occurred. You are not allowed!</h5>
                    </div>
                    <!-- /error title -->


                    <!-- Error content -->


                                <div class="row">
                                    <div class="col-sm-12 col-md-offset-4 col-md-4">
                                        <a href="{{url('field-dashboard')}}" class="btn bg-green-800 btn-block content-group"><i class="icon-circle-left2 position-left"></i> Go to dashboard</a>
                                    </div>
                                </div>


                    <!-- /error wrapper -->


                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->


@endsection

