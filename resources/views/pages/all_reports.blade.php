@extends('full')

@section('main')
    {{--page header starts here--}}
    <div class="content-group">
        <div class="page-header page-header-inverse"
             style=" border-color: #273246;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h5>
                        <i class="icon-arrow-left52 position-left"></i><span class="text-semibold">All Reports</span>
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
        <div class="panel panel-white">
            <div class="panel-heading">
                <h6 class="panel-title text-semibold">Report Collection<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>

            </div>

            <ul class="nav nav-lg nav-tabs nav-tabs-bottom nav-tabs-toolbar no-margin">
                <li class="active"><a href="#report-yearly" data-toggle="tab" aria-expanded="true"><i class="icon-menu7    position-left"></i> Yearly Reports</a></li>
                <li class=""><a href="#report-monthly" data-toggle="tab" aria-expanded="false"><i class="icon-menu6 position-left"></i> Monthly Reports</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade active in" id="report-yearly">
                    {{--<div class="panel-body">--}}
                        {{--<div class="content-group-lg">--}}
                            {{--<h6 class="text-semibold">Course overview</h6>--}}
                            {{--<p>Then sluggishly this camel learned woodchuck far stretched unspeakable notwithstanding the walked owing stung mellifluously glumly rooster more examined one that combed until a less less witless pouted up voluble timorously glared elaborate giraffe steady while grinned and got one beaver to walked. Connected picked rashly ocelot flirted while wherever unwound much more one inside emotionally well much woolly amidst upon far burned ouch sadistically became.</p>--}}
                            {{--<p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather.</p>--}}
                        {{--</div>--}}

                        {{--<h6 class="text-semibold">What you will learn</h6>--}}
                        {{--<p class="content-group">Some cow goose out and sweeping wow the skillfully goodness one crazily far some jeez darn well so peevish pending nudged categorically in between about much alas handsome intolerable devotedly helpfully smiled momentously next much this this next sweepingly far. Together prim and limpet much extravagantly quail longing a ouch that walking a jeepers flamingo more.</p>--}}

                        {{--<div class="row">--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<div class="content-group">--}}
                                    {{--<dl>--}}
                                        {{--<dt class="text-size-small text-bold text-uppercase">--}}
                                            {{--<i class="icon-checkmark3 text-blue position-left"></i>--}}
                                            {{--Salamander much that on much--}}
                                        {{--</dt>--}}
                                        {{--<dd>Like partook magic this enthusiastic tasteful far crud otter this the ferret honey iguana. Together prim and limpet much extravagantly quail longing.</dd>--}}

                                        {{--<dt class="text-size-small text-bold text-uppercase">--}}
                                            {{--<i class="icon-checkmark3 text-blue position-left"></i>--}}
                                            {{--Well far some raccoon--}}
                                        {{--</dt>--}}
                                        {{--<dd>Python laudably euphemistically since this copious much human this briefly hello ouch less one diligent however impotently made gave a slick up much.</dd>--}}

                                        {{--<dt class="text-size-small text-bold text-uppercase">--}}
                                            {{--<i class="icon-checkmark3 text-blue position-left"></i>--}}
                                            {{--Goldfish rapidly that far--}}
                                        {{--</dt>--}}
                                        {{--<dd>Well far some raccoon knew goose and crud behind salmon amenable oh the poignant sufficiently yikes a naked showed far reindeer imminently.</dd>--}}

                                        {{--<dt class="text-size-small text-bold text-uppercase">--}}
                                            {{--<i class="icon-checkmark3 text-blue position-left"></i>--}}
                                            {{--Gregor then turned to look out--}}
                                        {{--</dt>--}}
                                        {{--<dd>Then sluggishly this camel learned woodchuck far stretched unspeakable notwithstanding the walked owing stung mellifluously glumly rooster.</dd>--}}
                                    {{--</dl>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="col-sm-6">--}}
                                {{--<div class="content-group">--}}
                                    {{--<dl>--}}
                                        {{--<dt class="text-size-small text-bold text-uppercase">--}}
                                            {{--<i class="icon-checkmark3 text-blue position-left"></i>--}}
                                            {{--Misunderstood cuffed more depending--}}
                                        {{--</dt>--}}
                                        {{--<dd>And earthworm dear arose bald agilely sad so below cowered within ceremonially therefore via much this symbolically and newt capably.</dd>--}}

                                        {{--<dt class="text-size-small text-bold text-uppercase">--}}
                                            {{--<i class="icon-checkmark3 text-blue position-left"></i>--}}
                                            {{--Voluble much saddled mechanic--}}
                                        {{--</dt>--}}
                                        {{--<dd>Much took between less goodness jay mallard kneeled gnashed this up strong cooperative. A collection of textile samples lay spread.</dd>--}}

                                        {{--<dt class="text-size-small text-bold text-uppercase">--}}
                                            {{--<i class="icon-checkmark3 text-blue position-left"></i>--}}
                                            {{--Before some one more--}}
                                        {{--</dt>--}}
                                        {{--<dd>Pending some contrary rabbit up that the more conditionally ouch confidently far so was darn logic thus dove the juicily because that placed otter.</dd>--}}

                                        {{--<dt class="text-size-small text-bold text-uppercase">--}}
                                            {{--<i class="icon-checkmark3 text-blue position-left"></i>--}}
                                            {{--So slit more darn hey well wore--}}
                                        {{--</dt>--}}
                                        {{--<dd>Well far some raccoon knew goose and crud behind salmon amenable oh the poignant sufficiently yikes a naked showed far reindeer imminently.</dd>--}}
                                    {{--</dl>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<h6 class="text-semibold">Course program</h6>--}}
                        {{--So slit more darn hey well wore submissive savage this shark aardvark fumed thoughtfully much drank when angelfish so outgrew some alas vigorously therefore warthog superb less oh groundhog less alas gibbered barked some hey despicably with aesthetic hamster jay by luckily. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame--}}
                    {{--</div>--}}
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

                <div class="tab-pane fade" id="report-monthly">
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
                            text: 'Clipboard <i class="icon-copy3 position-right"></i>'
                        },
                        {
                            extend: 'excelHtml5',
                            text: 'Excel <i class="icon-file-excel position-right"></i>'
                        },
                        {
                            extend: 'pdfHtml5',
                            text: 'PDF <i class="icon-file-pdf position-right"></i>',
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

        function datatb2() {
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
                            text: 'Clipboard <i class="icon-copy3 position-right"></i>'
                        },
                        {
                            extend: 'excelHtml5',
                            text: 'Excel <i class="icon-file-excel position-right"></i>'
                        },
                        {
                            extend: 'pdfHtml5',
                            text: 'PDF <i class="icon-file-pdf position-right"></i>',
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

