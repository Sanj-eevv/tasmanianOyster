@php
use Illuminate\Support\Facades\Storage
@endphp
@push('styles')
    <style>
        .attachment-container {
            display: grid;
            gap: 20px;
            grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));
        }

        .attachment-container img {
            width: 130px;
            height: 100px;
            object-fit: cover;
            object-position: center;
            max-width: 100%;
            margin: 0;
            border: 0;
        }
        .relative{
            position: relative;
        }
        .delete-attachment-btn{
            position: absolute;
            top: -5px;
            right: -5px;
            background: red;
            border-radius: 100px;
            color: #fff !important;
            height: 20px;
            width: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
    </style>
@endpush
<div class="row g-9 mb-2">
    <div class="col-12 attachment-container">
    <input type="hidden" name="removed_attachments" id="removed_attachments">
    @foreach($attachments as $attachment)
                   <?php
                   $extension = $attachment->file_extension;
                   $attachmentIconSrc = asset("storage/uploads/{$attachment->file_url}");
                   ?>
                <div data-file-path="{{$attachmentIconSrc}}" class="relative ks-preview-image-container">
                    <a href="{{$attachmentIconSrc}}" target="_blank">
                        <img alt="{{$attachment->file_name}}" src="{{$attachmentIconSrc}}" class="ks-preview-image"/>
                    </a>
                    <p class="ks-attachment-title">{{ $attachment->file_name }}</p>
                    <i data-id="{{$attachment->id}}"  class="fas fa-times delete-attachment-btn"></i>
                </div>
            @endforeach
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(function (){
            $(document).on('click', '.delete-attachment-btn', function (){
                let that = $(this);
                Swal.fire({
                    title: 'Are you sure?',
                    type: 'warning',
                    text: "Remove this record!",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        let dataId = that.attr('data-id');
                        that.closest('.ks-preview-image-container').slideUp();
                        let currentValueStr = $('#removed_attachments').val() ?? '';
                        let currentValueArr = currentValueStr ? JSON.parse(currentValueStr) : [];
                        if(currentValueArr.indexOf(dataId) === -1){
                            currentValueArr.push(dataId);
                        }
                        $('#removed_attachments').val(JSON.stringify(currentValueArr));
                    }
                });
            })
        });
    </script>
@endpush
