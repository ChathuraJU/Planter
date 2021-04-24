// Setting datatable defaults
$.extend($.fn.dataTable.defaults, {
    autoWidth: false,
    dom: '<"datatable-header"fB><"datatable-scroll-wrap"t><"datatable-footer"ipl>',
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

function inputTypeahead(inputId, url, csrf) {
    $('#' + inputId).typeahead({
        source: function (query, result) {
            $.ajax({
                url: url,
                method: "POST",
                data: {_token: csrf, req: query},
                dataType: "json",
                success: function (data) {
                    result($.map(data, function (item) {
                        return item;
                    }));
                    $('.typeahead').css("width", "100%");
                }
            })
        }
    });
};

function formDataAjax(url, successMessage, errorMessage, formId) {
    // if (checkValidity()) {
        f = new FormData($("#" + formId)[0]);
        $.ajax({
            method: "POST",
            url: url,
            data: f,
            processData: false,
            contentType: false
        }).done(function (data) {
            if (data == 1) {
                $("#"+formId)[0].reset();
                messageSuccessAlert(successMessage);
            } else {
                data = JSON.parse(data);
                if (data['message'] !== undefined) {
                    messageErrorAlert(data['message']);
                } else {
                    messageErrorAlert(errorMessage);
                }
            }
        }).fail(function () {
            messageErrorAlert(errorMessage);
        });
    // }
};

function formDataAjaxNoReload(url, successMessage, errorMessage, formId) {
    // if (checkValidity()) {
        f = new FormData($("#" + formId)[0]);
        $.ajax({
            method: "POST",
            url: url,
            data: f,
            processData: false,
            contentType: false
        }).done(function (data) {
            if (data == 1) {
                messageSuccessAlertNoReload(successMessage);
            } else {
                data = JSON.parse(data);
                if (data.hasOwnProperty('msg')) {
                    messageErrorAlert(data.msg);
                } else {
                    messageErrorAlert(errorMessage);
                }
            }
        }).fail(function () {
            messageErrorAlert(errorMessage);
        });
    // }
};

function messageSuccessAlert(message) {
    swal({
            title: message,
            text: "Click ok to continue",
            confirmButtonColor: "#66BB6A",
            type: "success"
        },
        function (isConfirm) {
            location.reload();
        });
};

function messageSuccessAlertNoReload(message) {
    swal({
            title: message,
            text: "Click ok to continue",
            confirmButtonColor: "#66BB6A",
            type: "success"
        },
        function (isConfirm) {

        });
};

function messageErrorAlert(message) {
    swal({
            title: message,
            text: "Click ok to continue",
            confirmButtonColor: "#f44336",
            type: "error"
        },
        function (isConfirm) {

        });
};

validation_obj = {
    ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
    errorClass: 'validation-error-label',
    successClass: 'validation-valid-label',
    highlight: function (element, errorClass) {
        $(element).removeClass(errorClass);
    },
    unhighlight: function (element, errorClass) {
        $(element).removeClass(errorClass);
    },

    // Different components require proper error label placement
    errorPlacement: function (error, element) {

        // Styled checkboxes, radios, bootstrap switch
        if (element.parents('div').hasClass("checker") || element.parents('div').hasClass("choice") || element.parent().hasClass('bootstrap-switch-container')) {
            if (element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
                error.appendTo(element.parent().parent().parent().parent());
            } else {
                error.appendTo(element.parent().parent().parent().parent().parent());
            }
        }

        // Unstyled checkboxes, radios
        else if (element.parents('div').hasClass('checkbox') || element.parents('div').hasClass('radio')) {
            error.appendTo(element.parent().parent().parent());
        }

        // Input with icons and Select2
        else if (element.parents('div').hasClass('has-feedback') || element.hasClass('select2-hidden-accessible')) {
            error.appendTo(element.parent());
        }

        // Inline checkboxes, radios
        else if (element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
            error.appendTo(element.parent().parent());
        }

        // Input group, styled file input
        else if (element.parent().hasClass('uploader') || element.parents().hasClass('input-group')) {
            error.appendTo(element.parent().parent());
        } else {
            error.insertAfter(element);
        }
    },
    rules: {

    },
};

datatable_obj = {
    serverSide:true,
    paging:true,
    processing:true,
    rowId: 'id',
    ajax:{
        type:'GET'
    },
    pageLength:10,
    columns:[

    ],
    fixedHeader: {
        header: true,
    },
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

                },
            }
        ]
    }
};

function datatb(obj){
    var table_offset = $('.datatable-button-html5-basic').DataTable(obj);
    table_offset.fixedHeader.headerOffset($('.navbar-fixed-top').height());
};

function tableRowClick(token, url, doneFunction) {
    $('.datatable-button-init-basic').on('click', 'tbody tr', function () {
        var trid = $(this).attr('id');
        var options = {_token: token, "myData": trid};
        swal({
                title: "Are you sure you want to edit?",
                text: "Click an option",
                type: "info",
                showCancelButton: true,
                confirmButtonColor: "#2195f2",
                confirmButtonText: "Yes, Edit",
                cancelButtonText: "No, Cancel",
                closeOnConfirm: true,
                closeOnCancel: true
            },
            function (isConfirm) {
                if (isConfirm) {

                    $("#btnSave").addClass('hidden');
                    $("#btnUpdate").removeClass('hidden');

                    $.ajax({
                        method: "POST",
                        url: url,
                        data: options
                    })
                        .done(function (data) {
                            doneFunction(data);
                            $('html, body').animate({
                                scrollTop: 0
                            }, 1000);
                        });

                } else {

                }
            });
    });
};

function onChangeFunction(inputId, formName, url, doneFunction) {
    $("#"+inputId).change(function() {
        f= new FormData($("#"+formName)[0]);
        $.ajax({
            method: "POST",
            url: url,
            data: f,
            processData: false,
            contentType: false
        })
            .done(function(data) {
                if (data != 0) {
                    doneFunction(data);
                }

            });
    });
};
