(function($) {

    $('.kt_preview_image_close').click(function (e) {
        e.preventDefault();
        let parent_container = $(this).parent('.kt_preview_image_container');
        parent_container.addClass('d-none');
        parent_container.siblings("input[type='file']").val('');
        $('#kt_preview_img').attr('src', '');
    });

})( $ );

function loadPreview(input, id) {
    id = id || '#kt_preview_img';
    let siblingPreviewContainer =  $(input).siblings('.kt_preview_image_container');
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(id).attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
        siblingPreviewContainer.removeClass('d-none');
    }else{
        siblingPreviewContainer.addClass('d-none');
        $('#kt_preview_img').attr('src', '');
    }
}


/** remove row removes row from table **/
function removeRowFromTable(table, id) {
    $('#' + table + ' tr#' + id).hide();
}
/** show row from table (which was hidden earlier) **/
function showRowFromTable(table, id) {
    $('#' + table + ' tr#' + id).show();
}
/** remove and show row ends here **/

/** confirm delete will be triggered as confirm box for every delete request **/
function confirmDelete(callback) {
    Swal.fire({
        title: "Are you sure?",
        text: "You are about to delete this record",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        confirmButtonColor: "#ff2828",
        cancelButtonText: "Cancel",
    }).then((result) => {
        if (result.value) {
            callback();
        }
    });
}
/** confirm delete ends **/

function deleteDatatableRecord(table, id,url,redirectUrl = null)
{
    $.ajax({
        "url": url,
        "dataType":"json",
        "type":"DELETE",
        "data":{"_token":CSRF_TOKEN},
        beforeSend:function(){
            removeRowFromTable(table,id);
        },
        success:function(resp){
            if(redirectUrl){
                alertifySuccessAndRedirect(resp.message, redirectUrl);
            }else{
                alertifySuccess(resp.message);
            }
        },
        error: function(xhr){
            let obj = JSON.parse(xhr.responseText);
            showRowFromTable(table,id);
            alertifyError(obj.message);
        }
    });
}
function toastSuccess(msg){
    toastr.success(msg)
}
function toastError(msg){
    toastr.error(msg)
}

function alertifySuccess(msg){
    Swal.fire(
            'Success!',
            msg,
            'success'
    )
}
function alertifySuccessAndRedirect(msg, redirect_url){
    Swal.fire(
            'Success!',
            msg,
            'success'
    ).then(function() {
        window.location = redirect_url;
    });
}
function alertifyError(msg){
    Swal.fire(
            'Oops!',
            msg,
            'error'
    )
}

function debounceInput(func, wait, immediate) {
    let timeout;

    return function() {
        // Keep track of the context and parameters, which become useful during invocation
        let context = this, args = arguments;

        // The function to be called after `wait` milliseconds are over.
        let later = function() {

            // Nullify the timeout, making the immediate execution possible again.
            timeout = null;

            // Call `func` if immediate mode is off
            if (!immediate) func.apply(context, args);
        };

        // Determine whether to call `func` now if immediate mode is on.
        let callNow = immediate && !timeout;

        // Clear the previous timeout
        clearTimeout(timeout);

        // Set the new timeout
        timeout = setTimeout(later, wait);

        // Call `func` now if immediate mode is on and it's not being executed right now
        if (callNow) func.apply(context, args);
    };
};