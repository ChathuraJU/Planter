@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <i class="icon-arrow-left52 position-left"></i><span class="text-semibold">Search Disease</span>
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
            <div class="panel-heading">
                <h5 class="panel-title">Search the disease<a class="heading-elements-toggle"><i
                            class="icon-more"></i></a></h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse" class=""></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body" style="">
                <form action="{{url('labour-chart')}}" class="main-search">
                    <div class="input-group content-group">
                        <div class="has-feedback has-feedback-left">
                            <input type="text" class="form-control input-xlg" name="search" value="">

                        </div>

                        <div class="input-group-btn">
                            <button type="submit" class="btn bg-green-800 btn-xlg">Search</button>
                        </div>
                    </div>

                    <div class="row search-option-buttons">
                        <div class="col-sm-12 text-center">
                            <ul class="list-inline no-margin-bottom">
                                <li><a href="{{url('disease-create')}}" type="button"
                                       class="btn bg-green-800 btn-labeled btn-rounded"><b><i class="icon-pen-plus"></i></b>
                                        Add Disease</a></li>
                                <li><a href="#" class="btn btn-link"><i class="icon-reload-alt position-left"></i>
                                        Refine your search</a></li>
                            </ul>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <!-- Detached content -->
        <div class="container-detached">
            <div class="content-detached">

                <!-- List -->
                @foreach($diseases as $disease)
                    <ul class="media-list">
                        <li class="media panel panel-body stack-media-on-mobile">
                            <a href="images/placeholderimg.jpg" class="media-left" data-popup="lightbox">
                                <img src="{{asset($disease->image)}}" width="96" alt="">
                            </a>

                            <div class="media-body">
                                <h5 class="media-heading text-semibold">
                                    <a href="#">{{$disease->disease_name}}</a>
                                </h5>

                                <ul class="list-inline list-inline-separate mb-10">
                                    <li><a href="#" class="text-muted">{{$disease->keywords}}</a></li>
                                    <li><a href="#" class="text-muted">{{$disease->keywords}}</a></li>
                                </ul>
                                <h6>Description</h6>
                                <p class="content-group-sm">{{$disease->descriptions}}</p>
                                <h6>Solution</h6>
                                <p class="content-group-sm">{{$disease->solution}}</p>

                            </div>

                        </li>

                    </ul>

                @endforeach

                <!-- /list -->
{{--                <p class="content-group-sm">It prepare is ye nothing blushes up brought. Or as gravity--}}
{{--                    pasture limited evening on. Wicket around beauty say she. Frankness resembled say not--}}
{{--                    new smallness you discovery. Noisier ferrars yet shyness weather ten colonel. Too him--}}
{{--                    himself engaged husband pursuit musical...</p>--}}
{{--                <h6>Solution</h6>--}}
{{--                <p class="content-group-sm">It prepare is ye nothing blushes up brought. Or as gravity--}}
{{--                    pasture limited evening on. Wicket around beauty say she. Frankness resembled say not--}}
{{--                    new smallness you discovery. Noisier ferrars yet shyness weather ten colonel. Too him--}}
{{--                    himself engaged husband pursuit musical...</p>--}}

                <!-- Pagination -->
                <div class="text-center content-group-lg pt-20">
                    <ul class="pagination">
                        {{ $diseases-> links() }}
                    </ul>
                </div>
                <!-- /pagination -->

            </div>
        </div>
        <!-- /detached content -->
    </div>
    {{--page content ends--}}


@endsection

