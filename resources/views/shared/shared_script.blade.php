<script>
    BASE_URL = "{{url('/')}}"
    CSRF_TOKEN = "{{csrf_token()}}"
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "400",
        "hideDuration": "400",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    function showAjaxErrorsOnForms(errObj, formId){
        $(".invalid-feedback").text("").css("display", "block");
        let selectorPrefix = formId ? `#${formId} ` : '';
        $.each(errObj, function (key, val) {
            let err_txt = '';

            $(`${selectorPrefix}input[name^="${key}"]`).addClass('is-invalid');
            $(`${selectorPrefix}select[name^="${key}"]`).addClass('is-invalid');
            $(`${selectorPrefix}textarea[name^="${key}"]`).addClass('is-invalid');

            $.each(val, function (i, v) {
                if(i !== 0 ){
                    err_txt += '<br/>';
                }
                err_txt += v;
            });

            key = key.replace('.', '_');
            $(`${selectorPrefix}#${key}_error`).html(err_txt);

        });
    }
</script>