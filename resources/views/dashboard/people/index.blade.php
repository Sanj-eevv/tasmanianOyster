@extends('layouts.dashboard.admin')
@section('title', 'Our People')
@section('breadcrumb')
    @include('layouts.dashboard._partials._breadcrumb')
@endsection
@section('styles')
    <style>
        .dz-image img{
            object-fit: cover;
            object-position: center;
            height: 120px;
            width: 120px;
        }
    </style>
@endsection
@section('content')
        <!--begin::Form-->
        <form class="form" action="#" method="post">
            <!--begin::Input group-->
            <div class="fv-row">
                <!--begin::Dropzone-->
                <div class="dropzone" id="people_upload">
                    <!--begin::Message-->
                    <div class="dz-message needsclick">
                        <i class="ki-duotone ki-file-up fs-3x text-primary"><span class="path1"></span><span class="path2"></span></i>

                        <!--begin::Info-->
                        <div class="ms-4">
                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                        </div>
                        <!--end::Info-->
                    </div>
                </div>
                <!--end::Dropzone-->
            </div>
            <!--end::Input group-->
        </form>
        <!--end::Form-->
@endsection
@section('scripts')
    <script>
        $( document ).ready(function( $ ) {
            let myDropzone = new Dropzone("#people_upload", {
                url: "{{route('dashboard.people.store')}}",
                paramName: "file",
                maxFilesize: 10,
                addRemoveLinks: true,
                autoProcessQueue: true,
                parallelUploads: 3,
                chunking: true,
                acceptedFiles: 'image/*',
                chunkSize: 2000000,
                removedfile: function (file){
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
                            let url = "{{route('dashboard.people.destroy', ':id')}}";
                            url = url.replace(':id', file.id);
                            $.ajax({
                                "url": url,
                                "dataType":"json",
                                "type":"DELETE",
                                "data":{"_token":CSRF_TOKEN},
                                success:function(resp){
                                    toastSuccess(resp.message);
                                    if (file.previewElement != null && file.previewElement.parentNode != null) {
                                        file.previewElement.parentNode.removeChild(file.previewElement);
                                    }
                                },
                                error: function(xhr){
                                    let obj = JSON.parse(xhr.responseText);
                                    alertifyError(obj.message);
                                }
                            });
                        }
                    });
                },
                init: function () {
                    let existingFiles = [
                            @foreach($allPeople as $people)
                                {id: {{$people->id}}, name: "{{$people->file_name}}", size: {{$people->file_size}}, url: "{{asset('storage/uploads/'.$people->file_url)}}" },
                            @endforeach
                    ];

                    existingFiles.forEach(file => {
                        let mockFile = { name: file.name, size: file.size, id: file.id};
                        this.emit("addedfile", mockFile);
                        this.emit("thumbnail", mockFile, file.url);
                        this.emit("complete", mockFile);
                    });

                }
            });

            myDropzone.on('sending', function (file, xhr, formData) {
                    formData.append('_token', CSRF_TOKEN);
            })

            myDropzone.on("error", function(file, xhr) {
                toastr.error(typeof xhr === 'object' ?  xhr.message : xhr);
            });


            myDropzone.on("complete", function(file) {
               if(file.status !== 'error'){
                   let obj = JSON.parse(file.xhr.responseText);
                   file.id = obj.id;
               }
            });
        });
    </script>
@endsection