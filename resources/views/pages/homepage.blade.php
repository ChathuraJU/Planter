@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse border-bottom"
             style=" border-color: #7c522d;">


            <div class="breadcrumb-line " id="mydiv">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="icon-home2 position-left"></i>Home - Recent Events</a></li>
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
                            <h3 class="no-margin">PL{{ auth()->user()->person->person_id }}</h3>
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
                            <h3 class="no-margin">{{ auth()->user()->person->address }}</h3>
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

        <!-- Timeline -->
        <div class="timeline timeline-left">
            <div class="timeline-container">
                <!-- Date stamp -->
                <div class="timeline-date text-muted">
                    <i class="icon-history position-left"></i> <span class="text-semibold">Today</span>
                </div>
                <!-- /date stamp -->

                <!-- Blog post -->
                <div class="timeline-row">

                    <div class="timeline-icon">
                        <img src="{{asset('images/users/1.jpg')}}" alt="">
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-flat timeline-content">
                                <div class="panel-heading">
                                    <h6 class="panel-title text-bold">Upper Division Crop Posted</h6>
                                    <div class="heading-elements">
                                        <span class="heading-text"><i class="icon-checkmark-circle position-left text-success"></i> 49 minutes ago</span>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <h6 class="content-group">
                                        <i class="icon-user position-left"></i>
                                        <a href="#">Jason Statham </a> Created:
                                    </h6>

                                    <blockquote>
                                        <p>Added Note here</p>
                                        <footer><cite title="Source Title">10:39 am</cite></footer>
                                    </blockquote>
                                </div>
                                <div class="panel-footer panel-footer-transparent">
                                    <div class="heading-elements">
                                        <ul class="list-inline list-inline-condensed heading-text">
                                            <li><a href="#" class="text-default"><i class="icon-spinner position-left text-danger"></i> Pending</a></li>
                                            <li><a href="#" class="text-default"><i class="icon-check position-left text-success"></i> Approved</a></li>
                                            <li><a href="#" class="text-default"><i class="icon-cross position-left text-warning"></i> Rejected</a></li>
                                        </ul>
                                        <span class="heading-btn pull-right">
                                            <button type="button" class="btn bg-green-800 btn-labeled btn-rounded"><b><i class="icon-eye"></i></b> View</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /blog post -->

                <!-- Blog post -->
                <div class="timeline-row">
                    <div class="timeline-icon">
                        <img src="{{asset('images/users/1.jpg')}}" alt="">
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-flat timeline-content">
                                <div class="panel-heading">
                                    <h6 class="panel-title text-bold">Upper Division Crop Accepted</h6>
                                    <div class="heading-elements">
                                        <span class="heading-text"><i class="icon-checkmark-circle position-left text-success"></i> 3 hours ago</span>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <h6 class="content-group">
                                        <i class="icon-user position-left"></i>
                                        <a href="#">Melanie Watson</a> approved the <a href="#"> ID </a>
                                    </h6>

                                    <blockquote>
                                        <p>Added note here</p>
                                        <footer>Melanie, <cite title="Source Title">12:56 am</cite></footer>
                                    </blockquote>
                                </div>

                                <div class="panel-footer panel-footer-transparent">
                                    <div class="heading-elements">
                                        <ul class="list-inline list-inline-condensed heading-text">
                                            <li><a href="#" class="text-default"><i class="icon-spinner position-left text-danger"></i> Pending</a></li>
                                            <li><a href="#" class="text-default"><i class="icon-check position-left text-success"></i> Approved</a></li>
                                            <li><a href="#" class="text-default"><i class="icon-cross position-left text-warning"></i> Rejected</a></li>
                                        </ul>
                                        <span class="heading-btn pull-right">
                                            <button type="button" class="btn bg-green-800 btn-labeled btn-rounded"><b><i class="icon-eye"></i></b> View</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /blog post -->

                <!-- Date stamp -->
                <div class="timeline-date text-muted">
                    <i class="icon-history position-left"></i> <span class="text-semibold">Monday</span>, April 18
                </div>
                <!-- /date stamp -->

                <!-- Blog post -->
                <div class="timeline-row">
                    <div class="timeline-icon">
                        <img src="{{asset('images/users/1.jpg')}}" alt="">
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-flat timeline-content">
                                <div class="panel-heading">
                                    <h6 class="panel-title text-bold">Lower Division Crop Updates</h6>
                                    <div class="heading-elements">
                                        <span class="heading-text"><i class="icon-checkmark-circle position-left text-success"></i> 3 hours ago</span>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <h6 class="content-group">
                                        <i class="icon-user position-left"></i>
                                        <a href="#">Melanie Watson</a> updated on <a href="#">ID</a>
                                    </h6>

                                    <blockquote>
                                        <p>Added note here</p>
                                        <footer>Melanie, <cite title="Source Title">12:56 am</cite></footer>
                                    </blockquote>
                                </div>

                                <div class="panel-footer panel-footer-transparent">
                                    <div class="heading-elements">
                                        <ul class="list-inline list-inline-condensed heading-text">
                                            <li><a href="#" class="text-default"><i class="icon-spinner position-left text-danger"></i> Pending</a></li>
                                            <li><a href="#" class="text-default"><i class="icon-check position-left text-success"></i> Approved</a></li>
                                            <li><a href="#" class="text-default"><i class="icon-cross position-left text-warning"></i> Rejected</a></li>
                                        </ul>
                                        <span class="heading-btn pull-right">
                                            <button type="button" class="btn bg-green-800 btn-labeled btn-rounded"><b><i class="icon-eye"></i></b> View</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /blog post -->

            </div>
        </div>
        <!-- /timeline -->

    </div>
    {{--page content ends--}}
@endsection
