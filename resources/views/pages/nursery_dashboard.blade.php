@extends('full')

@section('main')
{{--page header starts here--}}

<div class="content-group">
    <div class="page-header page-header-inverse" style=" border-color: #273246;">
        <div class="page-header-content border-bottom border-bottom-success-300">
            <div class="page-title">
                <h5>
                    <i class="icon-arrow-left52 position-left"></i><span class="text-semibold">Nursery Dashboard</span>
                </h5>
            </div>

        </div>

        <div class="breadcrumb-line" id="mydiv">
            <ul class="breadcrumb">
                <li><a href="#"><i class="icon-home2 position-left"></i> Home</a></li>
                <li><a href="#">Dashboard</a></li>
                <li class="active">Nursery Dashboard</li>
            </ul>

        </div>
    </div>
</div>
{{--page header ends--}}

{{--page content starts here--}}
<div class="content">
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Search Nursery<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse" class=""></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body" style="">
            <form  action="{{url('nursery-dashboard')}}" class="main-search">
             @csrf
                <div class="input-group content-group">
                    <div class="has-feedback has-feedback-left">
                        <input type="text" name="search" id="search" class="form-control input-xlg" value="">

                    </div>

                    <div class="input-group-btn">
                        <button type="submit" class="btn bg-green-800 btn-xlg"> Search </button>
                    </div>
                </div>

                <div class="row search-option-buttons">
                    <div class="col-sm-12 text-center">
                        <ul class="list-inline no-margin-bottom">
                            <li><a href="{{url('nursery-create')}}" type="button"
                                    class="btn bg-green-800 btn-labeled btn-rounded"><b><i
                                            class="icon-pen-plus"></i></b>Create Nursery Dashboard</a></li>
                            <li><a href="#" class="btn btn-link"><i class="icon-reload-alt position-left"></i> Refine
                                    your search</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
    @foreach($nurseries as $key => $nursery)
        <div class="col-sm-6 col-lg-4">
            <div class="panel panel-flat">
                <!-- Panel heading -->
                <div class="panel-heading">
                    <ul class="media-list">
                        <li class="media stack-media-on-mobile">
                            <div class="media-left" style="padding-right: 05px !important;">
                                <div class="thumb">
                                    <a href="images/placeholderimg.jpg" class="media-left" data-popup="lightbox">
                                        {{-- <img src="{{asset('$nursery->image') }}" --}}
                                        <img src="{{ asset($nursery->image) }}"
                                            class="img-responsive img-rounded media-preview" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="media-body">
                                <h6 class="media-heading"><a href="#" style="font-weight: bold; color: #2d3748">Plot No.: {{$nursery->plot_no}}</a></h6>
                                <ul class="list-inline list-inline-separate text-muted mb-5">
                                    <li>02 Months 04 Days</li>
                                    <li>{{$nursery->layout_date}}</li>
                                    <li>No. of Cuttings : {{$nursery->no_of_cuttings}}</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /panel heading -->

                <!-- Tabs nav -->
                <ul
                    class="nav nav-tabs nav-justified no-margin no-border-radius bg-yellow-600 border-top border-top-teal-300">
                    <li class="active">
                        <a href="#schedule{{$key}}" class="text-size-small text-uppercase text-semibold" data-toggle="tab"
                            aria-expanded="true">
                            Schedule
                        </a>
                    </li>

                    <li class="">
                        <a href="#comments{{$key}}" class="text-size-small text-uppercase text-semibold" data-toggle="tab"
                            aria-expanded="false">
                            Comments
                        </a>
                    </li>
                </ul>
                <!-- /tabs nav -->

                <!-- Tabs content -->
                <div class="tab-content panel-body">
                    <div class="tab-pane fade" id="comments{{$key}}">
                        {{--<div class="caption">--}}
                        <ul class="media-list content-group cju-list-scroll">
                        @foreach($comments as $comment)
                            @if($nursery->nursery_id == $comment->nursery_id)
                            <li class="media">
                                <a href="#" class="media-left">
                                    <img src="images/placeholderimg.jpg" class="img-circle img-sm" alt="">
                                </a>

                                <div class="media-body">
                                @foreach($users as $user)
                                    @if($user->id == $comment->user_id)
                                        <div class="media-heading text-semibold"><a href="#">{{$user->fname}}</a></div>
                                    @endif
                                @endforeach
                                    {{$comment->comment}}
                                </div>
                            </li>
                            @endif
                        @endforeach

                        </ul>

                        <textarea id="entermessage{{$nursery->nursery_id}}" name="entermessage{{$nursery->nursery_id}}" class="form-control content-group" rows="2" cols="1"
                            placeholder="Add comment"></textarea>

                        <div class="row text-center">
                            <button type="button" id="submit_field_data"
                                class="btn bg-green-800 btn-labeled btn-rounded btn-lg" onclick="sendcomment({{$nursery->nursery_id}})"><b><i class="fa fa-send-o"></i></b>Send</button>
                        </div>
                        {{--</div>--}}
                    </div>
                    <div class="tab-pane fade active in" id="schedule{{$key}}">
                        <ul class="list-feed media-list cju-list-scroll">
                        @foreach($nurseryplans as $nurseryplan)
                            @if($nurseryplan->nursery_id == $nursery->nursery_id)
                            <li>
                                <span class="list-feed-solid text-muted">{{$nurseryplan->scheduled_date}}</span>
                                <div class="media-body">
                                @foreach($tasks as $task)
                                    @if($nurseryplan->task_id == $task->task_id)
                                    <div class="text-semibold">{{$task->task_name}}</div>
                                    @endif
                                @endforeach
                                </div>
                                <div class="media-right">
                                    <ul class="icons-list icons-list-extended text-nowrap">
                                        @if($nurseryplan->status == 0)

                                            <li <a href="#" class="text-danger" onclick="task_complete_id({{$nurseryplan->id}})"><i
                                                    class="icon-spinner position-left text-danger"></i> Pending</a></li>
                                         @else
                                            <li><a href="#" class="text-success" onclick="task_complete_id({{$nurseryplan->id}})"><i
                                                    class="icon-check position-left text-success"></i> Completed</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </li>
                            @endif
                            @endforeach
                            @if($new_tasks)
                                <hr>
                                @foreach($new_tasks as $new_task)
                                    @if($nursery->nursery_id == $new_task->nursery_id)
                                        <li>
                                            <span class="list-feed-solid text-muted">{{$new_task->scheduled_date}}</span>
{{--                                            {{$new_task->task_name}}--}}
                                            <div class="media-body">
                                                <div class="text-semibold">{{$new_task->task_name}}</div>
                                            </div>
                                            <div class="media-right">
                                                <ul class="icons-list icons-list-extended text-nowrap">
                                                    @if($new_task->status == 0)

                                                        <li <a href="#" class="text-danger" onclick="new_task_complete_id({{$new_task->id}})"><i
                                                                class="icon-spinner position-left text-danger"></i> Pending</a></li>
                                                    @else
                                                        <li><a href="#" class="text-success" onclick="new_task_complete_id({{$new_task->id}})"><i
                                                                    class="icon-check position-left text-success"></i> Completed</a></li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </li>
                                        @endif
                                    @endforeach
                            @endif
                        </ul>
                        <div class="row text-center">
                            <button type="button" class="btn bg-green-800 btn-labeled btn-rounded btn-sm"
                                data-toggle="modal" data-target="#add_task" onclick="add_task_nursery_id({{$nursery->nursery_id}})"><b><i class="fa fa-calendar-plus-o"></i></b>
                                Add Task</button>
                        </div>
                    </div>
                </div>
                <!-- /tabs content -->

            </div>
        </div>
      @endforeach
    </div>

    <!-- Pagination -->
    <div class="text-center content-group-lg pt-20">
    {{ $nurseries-> links() }}
    </div>
    <!-- /pagination -->
</div>


{{--page content ends--}}

<!-- Adding Task modal -->
<div id="add_task" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Add a Task</h5>
            </div>

            <div class="modal-body">
                <form method="" action="">
                    <div class="row container-fluid">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="hidden" id="nursery_id" value="">
                                <label for="newtask" class="control-label text-semibold">{{ __('New Task') }}</label>
                                <input id="newtask" type="text" class="form-control mspborder " name="newtask"
                                    value="{{ old('newtask') }}" required autocomplete="newtask" autofocus>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="newtaskstatus"
                                    class="control-label text-semibold">{{ __('Status') }}</label>
                                <select id="newtaskstatus" name="newtaskstatus" type="text" class="select select2-hidden-accessible"
                                  value="{{ old('newtaskstatus') }}" required
                                    autocomplete="newtaskstatus" autofocus>
                                    <option value="">Select Status</option>
                                    <option value="0">Pending</option>
                                    <option value="1">Completed</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="taskdate" class="control-label text-semibold">{{ __('Date') }}</label>
                                <input id="taskdate" type="date" class="form-control mspborder" name="taskdate"
                                    value="{{ old('taskdate') }}" required autocomplete="taskdate" autofocus>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="newtasknote" class="control-label text-semibold">{{ __('Note') }}</label>
                                <textarea id="newtasknote" name="newtasknote" rows="5" cols="5" class="form-control mspborder" value="{{ old('newtasknote') }}" required
                                    autocomplete="newtasknote" autofocus></textarea>
                            </div>
                        </div>
                    </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn bg-green-800" onclick="add_new_task()">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /Adding Task modal -->

<!-- Completing Task modal -->
<div id="complete_task" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h5 class="modal-title text-semibold">Fertilizer 1st Round - <span
                        class="list-feed-solid text-muted">26.02.2021</span></h5> -->

                         <h5 class="modal-title text-semibold">Task Complete</h5>
            </div>

            <div class="modal-body">


                <form method="#" action="">
                    <div class="row container-fluid">
                        <!-- <div class="col-12">
                        <input id="txtid" type="hidden" class="form-control mspborder" name="txtid" value="">
                            <div class="form-group">
                                <label for="taskstatus" class="control-label text-semibold">{{ __('Status') }}</label>
                                <select id="taskstatus" type="text" class="select select2-hidden-accessible"
                                    name="taskstatus" value="{{ old('taskstatus') }}" required autocomplete="taskstatus"
                                    autofocus>
                                    <option value="">Select Status</option>
                                    <option value="0">Pending</option>
                                    <option value="1">Completed</option>
                                </select>
                            </div>

                        </div> -->
                        <input id="txtid" type="hidden" class="form-control mspborder" name="txtid" value="">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="taskdate" class="control-label text-semibold">{{ __('Date') }}</label>
                                <input id="taskdate" type="date" class="form-control mspborder" name="taskdate"
                                    value="{{ old('taskdate') }}" required autocomplete="taskdate" autofocus>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="tasknote" class="control-label text-semibold">{{ __('Note') }}</label>
                                <textarea name="tasknote" id="tasknote" rows="5" cols="5" class="form-control mspborder"
                                    name="tasknote" value="{{ old('tasknote') }}" required autocomplete="tasknote"
                                    autofocus></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="submit_btn" class="btn bg-green-800"  onclick="task_complete()" >Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- /Completing Task modal -->

<!-- Completing Task modal New -->
<div id="complete_task_new" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h5 class="modal-title text-semibold">Fertilizer 1st Round - <span
                        class="list-feed-solid text-muted">26.02.2021</span></h5> -->

                <h5 class="modal-title text-semibold">Task Complete New</h5>
            </div>

            <div class="modal-body">


                <form method="#" action="">
                    <div class="row container-fluid">
                    <!-- <div class="col-12">
                        <input id="txtid" type="hidden" class="form-control mspborder" name="txtid" value="">
                            <div class="form-group">
                                <label for="taskstatus" class="control-label text-semibold">{{ __('Status') }}</label>
                                <select id="taskstatus" type="text" class="select select2-hidden-accessible"
                                    name="taskstatus" value="{{ old('taskstatus') }}" required autocomplete="taskstatus"
                                    autofocus>
                                    <option value="">Select Status</option>
                                    <option value="0">Pending</option>
                                    <option value="1">Completed</option>
                                </select>
                            </div>

                        </div> -->
                        <input id="txtidNew" type="hidden" class="form-control mspborder" name="txtidNew" value="">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="newtaskdate" class="control-label text-semibold">{{ __('Date') }}</label>
                                <input id="newtaskdate" type="date" class="form-control mspborder" name="newtaskdate"
                                       value="{{ old('newtaskdate') }}" required autocomplete="newtaskdate" autofocus>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="tasknotenew" class="control-label text-semibold">{{ __('Note') }}</label>
                                <textarea name="tasknotenew" id="tasknotenew" rows="5" cols="5" class="form-control mspborder"
                                          value="{{ old('tasknotenew') }}" required autocomplete="tasknotenew"
                                          autofocus></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="submit_btn_new" class="btn bg-green-800"  onclick="task_complete_new()" >Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- /Completing Task modal New-->

<script src="{{ asset('assets/js/core.js') }}"></script>
    <script>
    $( document ).ready(function() {
        $("#submit_btn").show();
        $("#tasknote").val("");
        $("#taskdate").val("");
    });
    function sendcomment(id){

        var textarea = '#entermessage'+id

        const url = "{{ route('nursery.comment') }}";

        $.ajax({
                method: "POST",
                url: url,
                data: { "_token": "{{ csrf_token() }}",
                        "id":id,
                        "msg":$(textarea).val()
                    },

            }).done(function (data) {

              messageSuccessAlert("Comment added Successfully")

              setTimeout(function(){location.reload();}, 3000);

            }).fail(function () {

                messageErrorAlert("error");

            });
    }

    function task_complete_id(id){
        $("#txtid").val(id);
        $("#submit_btn").show();
        $("#tasknote").val("");
        $("#taskdate").val("");

        const url = "{{ route('nursery.gettask') }}";

        $.ajax({
                method: "POST",
                url: url,
                data: { "_token": "{{ csrf_token() }}",
                        "id":id,
                    },

            }).done(function (data) {

                data = JSON.parse(data);
                // console.log(data[0]['note']);

                $('#complete_task').modal()

                if(!data[0]['note'] == "" || !data[0]['note'] == null){
                    $("#submit_btn").hide();
                    $("#tasknote").val(data[0]['note']);
                    $("#taskdate").val(data[0]['completed_date']);
                }

            }).fail(function () {

                messageErrorAlert("error");

            });
    }

    function task_complete(){

        var id = $("#txtid").val();
        var msg = $('#tasknote').val();
        // var status = $('#taskstatus').val();
        var date = $('#taskdate').val();

        const url = "{{ route('nursery.taskupdate') }}";

        $.ajax({
                method: "POST",
                url: url,
                data: { "_token": "{{ csrf_token() }}",
                        "id":id,
                        "msg": msg,
                        "date": date
                    },

            }).done(function (data) {

            messageSuccessAlert("Task Updated Successfully")

            // setTimeout(function(){location.reload();}, 3000);

            }).fail(function () {

                messageErrorAlert("error");

            });
    }

    function new_task_complete_id(id){
        $("#txtidNew").val(id);
        $("#submit_btn_new").show();
        $("#newtasknote").val("");
        $("#newtaskdate").val("");

        const url = "{{ route('nursery.gettasknew') }}";

        $.ajax({
            method: "POST",
            url: url,
            data: { "_token": "{{ csrf_token() }}",
                "id":id,
            },

        }).done(function (data) {
            data = JSON.parse(data);
            $('#complete_task_new').modal()

            if(!data[0]['note'] == "" || !data[0]['note'] == null){
                $("#tasknotenew").val(data[0]['note']);
                $("#newtaskdate").val(data[0]['completed_date']);
            }
            if(data[0]['status'] == "1"){
                $("#submit_btn_new").hide();
            }
        }).fail(function () {
            messageErrorAlert("error");
        });
    }

    function task_complete_new(){

        var id = $("#txtidNew").val();
        var msg = $('#tasknotenew').val();
        // var status = $('#taskstatus').val();
        var date = $('#newtaskdate').val();

        const url = "{{ route('nursery.taskupdatenew') }}";

        $.ajax({
            method: "POST",
            url: url,
            data: { "_token": "{{ csrf_token() }}",
                "id":id,
                "msg": msg,
                "date": date
            },

        }).done(function (data) {

            messageSuccessAlert("Task Updated Successfully")

            // setTimeout(function(){location.reload();}, 3000);

        }).fail(function () {

            messageErrorAlert("error");

        });
    }
    function add_task_nursery_id(id){
        $('#nursery_id').val(id);
    }

    function add_new_task(){
        var id = $("#nursery_id").val();
        var task = $('#newtask').val();
        var status = $('#newtaskstatus').val();
        var taskdate = $('#taskdate').val();
        var note = $('#newtasknote').val();

        const url = "{{ route('nursery.taskadd') }}";

        $.ajax({
            method: "POST",
            url: url,
            data: { "_token": "{{ csrf_token() }}",
                "id":id,
                "task": task,
                "newtaskstatus": status,
                "taskdate": taskdate,
                "newtasknote": note
            },

        }).done(function (data) {

            messageSuccessAlert("Task Updated Successfully")

            // setTimeout(function(){location.reload();}, 3000);

        }).fail(function () {

            messageErrorAlert("error");

        });
    }
    </script>


@endsection
