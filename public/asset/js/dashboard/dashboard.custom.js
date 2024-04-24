(function($) {

    $('.kt_preview_image_close').click(function (e) {
        e.preventDefault();
        let parent_container = $(this).parent('.kt_preview_image_container');
        parent_container.addClass('d-none');
        parent_container.siblings("input[type='file']").val('');
        $('#kt_preview_img').attr('src', '');
    });

    autosize(document.querySelectorAll('textarea'));

    $(document).on('change', '.ks-file-uploader', function (evt) {
        let selectedFiles = $(this).closest('.ks-file-uploader-container').find('.ks-file-uploader-preview-box');
        // ksHandleFileSelect(evt, $('#ks-file-uploader-preview-box'), this);
        ksHandleFileSelect(evt, selectedFiles, this);
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
}

function showAjaxErrorsOnForms(errObj, formId){
    $(".invalid-feedback").css("display", "block");
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

function showAjaxErrorsOnFormsWithRepeater(errObj, formId){
    $(".invalid-feedback").text("").css("display", "block");
    $('input, select, textarea').removeClass('is-invalid');
    let selectorPrefix = formId ? `#${formId} ` : '';
    $.each(errObj, function (key, val) {
        let err_txt = '';
        let _key = key.replace(/\./g, '_');

        $(`${selectorPrefix}input[id^="${_key}"]`).addClass('is-invalid');
        $(`${selectorPrefix}select[id^="${_key}"]`).addClass('is-invalid');
        $(`${selectorPrefix}textarea[id^="${_key}"]`).addClass('is-invalid');

        $.each(val, function (i, v) {
            if(i !== 0 ){
                err_txt += '<br/>';
            }
            err_txt += v;
        });

        $(`${selectorPrefix}#${_key}_error`).html(err_txt);

    });
}

function ksHandleFileSelect(evt, selectedFiles, fileInput) {

    selectedFiles.empty();

    let files = evt.target.files;

    let fileInputName = fileInput.getAttribute('name');
    fileInputName = fileInputName.replace('[]', '');
    fileInputName = fileInputName.replace(/\[(\w+)\]/g, '_$1');
    for (let i = 0; i < files.length; i++) {
        let file = files[i];

        // Create a new div to hold the file name and remove button
        let fileDivContainer = document.createElement('div');
        fileDivContainer.classList.add('file-container');
        // Creating Error Div

        let errorDiv = document.createElement('span');
        errorDiv.classList.add('invalid-feedback');
        errorDiv.classList.add('d-block');
        errorDiv.id = fileInput.hasAttribute('multiple')  ?  `${fileInputName}_${i}_error` : `${fileInputName}_error`;

        let fileDiv = document.createElement('div');
        fileDiv.classList.add('file');

        fileDivContainer.appendChild(fileDiv);
        fileDivContainer.appendChild(errorDiv);


        // selectedFiles.appendChild(fileDiv); //js
        selectedFiles.append(fileDivContainer); //jquery

        if (file.type.match('image.*')) {
            // If the file is an image, display a preview image
            let img = document.createElement('img');
            img.file = file;
            fileDiv.appendChild(img);

            let reader = new FileReader();
            reader.onload = (function(aImg) {
                return function(e) {
                    aImg.src = e.target.result;
                };
            })(img);
            reader.readAsDataURL(file);
        } else {
            let icon = document.createElement('i');
            icon.classList.add('fa', 'fa-file');
            fileDiv.appendChild(icon);

        }


        // Create a new span to display the file name
        let fileNameSpan = document.createElement('span');
        fileNameSpan.textContent = file.name;
        fileDiv.appendChild(fileNameSpan);

        // Create a new button to remove the file
        let removeButton = document.createElement('button');
        removeButton.textContent = 'Remove';
        removeButton.dataset.fileIndex = i.toString();
        removeButton.dataset.fileInputId = fileInput.id;
        removeButton.addEventListener('click', ksHandleRemoveFile);
        fileDiv.appendChild(removeButton);
    }

}

function ksHandleRemoveFile(evt) {
    evt.preventDefault();
    evt.stopPropagation();

    let fileIndex = parseInt(evt.target.dataset.fileIndex);
    let fileInputId = evt.target.dataset.fileInputId;
    let fileInput = document.getElementById(fileInputId);

    let parentNode = evt.target.parentNode.parentNode.parentNode;
    if(parentNode){
        let files = parentNode.querySelectorAll('.file-container');

        for (let i = 0; i < files.length; i++) {
            if (i === fileIndex) {
                files[i].parentNode.removeChild(files[i]);

                // Remove the selected file from the files array
                let newFiles = Array.from(fileInput.files);

                newFiles.splice(i, 1);

                // Create a new FileList object from the updated array of files
                let dt = new DataTransfer();
                newFiles.forEach((file) => {
                    dt.items.add(file);
                });

                // Assign the new FileList object to the file input
                fileInput.files = dt.files;

            } else {
                let removeButton = files[i].querySelector('button');
                let errorSpan = files[i].querySelector('.invalid-feedback');
                let index = i - (i > fileIndex ? 1 : 0);
                let errorSpanID = errorSpan.getAttribute('id');
                removeButton.dataset.fileIndex = index.toString();
                errorSpan.id = errorSpanID.replace(/\d+(?=_error)/, index.toString());
            }
        }

    }

}

