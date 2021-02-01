@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <span class="text-semibold">Search Disease</span>
                    </h5>
                </div>

            </div>

            <div class="breadcrumb-line" id="mydiv">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="icon-home2 position-left"></i> Home</a></li>
                    <li><a href="#">Diseases</a></li>
                    <li class="active">Search Disease</li>
                </ul>

            </div>
        </div>
    </div>
    {{--page header ends--}}

    {{--page content starts here--}}
    <div class="content">
        <div class="panel panel-flat">
            <div class="panel-body">
                <form action="#" class="main-search">
                    <div class="input-group content-group">
                        <div class="has-feedback has-feedback-left">
                            <input type="text" class="form-control input-xlg" value="Search by Name">

                        </div>

                        <div class="input-group-btn">
                            <button type="submit" class="btn bg-green-800 btn-xlg">Search</button>
                        </div>
                    </div>

                </form>

                <div class="row">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title">Disease Title</h6>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="thumbnail">
                                        <div class="thumb">
                                            <a href="images/placeholder.jpg" data-popup="lightbox">
                                                <img src="images/placeholder.jpg" alt="">
                                                <span class="zoom-image"><i class="icon-plus2"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <p><span style="color: black">Description</span>By default, Bootstrap's thumbnails are designed to showcase linked images with minimal required markup.</p>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>





    </div>


    {{--page content ends--}}


@endsection

