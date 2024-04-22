@push('styles')
    <style>
        .team-box{
            border: 1px dashed gray;
            padding: 10px;
        }
        .text-right{
            text-align: right;
        }
    </style>
@endpush
<div class="row g-9 mb-8">
    <!--begin::Col-->
    <div class="col-md-12 fv-row">
        <label class="required form-label" for="title">Title</label>
        <input id="title" autocomplete="off" type="text" name="title" class="form-control mb-2" value="{{$growingRegion->title}}"/>
        <span class="invalid-feedback" role="alert" id="title_error">
        </span>
    </div>
    <!--end::Col-->
</div>

<div class="row g-9 mb-8">
    <!--begin::Col-->
    <div class="col-md-12 fv-row">
        <label class="required form-label" for="subtitle">Subtitle</label>
        <input id="subtitle" autocomplete="off" type="text" name="subtitle" class="form-control mb-2" value="{{$growingRegion->subtitle}}"/>
        <span class="invalid-feedback" role="alert" id="subtitle_error">
        </span>
    </div>
    <!--end::Col-->
</div>

<div class="row g-9 mb-8">
    <!--begin::Col-->
    <div class="col-md-12 fv-row">
        <label class="required form-label" for="description">Description</label>
        <textarea id="description" name="description" class="form-control mb-2">{{$growingRegion->description}}</textarea>
        <span class="invalid-feedback" role="alert" id="description_error">
        </span>
    </div>
    <!--end::Col-->
</div>

<div class="row g-9 mb-8">
    <!--begin::Col-->
    <div class="col-md-12 fv-row">
        <label class="form-label" for="characteristics">Characteristics</label>
        <textarea id="characteristics" name="characteristics" class="form-control mb-2">{{$growingRegion->characteristics}}</textarea>
        <span class="invalid-feedback" role="alert" id="characteristics_error"></span>
    </div>
    <!--end::Col-->
</div>

<div class="row g-9 mb-8">
    <!--begin::Col-->
    <div class="col-md-12 fv-row">
        <label class="form-label" for="tasting_note">Tasting Note</label>
        <textarea id="tasting_note" name="tasting_note" class="form-control mb-2">{{$growingRegion->tasting_note}}</textarea>
        <span class="invalid-feedback" role="alert" id="tasting_note_error">
        </span>
    </div>
    <!--end::Col-->
</div>


<div class="row g-9 mb-8">
    <!--begin::Col-->
    <div class="col-md-12 fv-row" id="image">
        <label class="form-label required" for="hero_image">Hero Image</label>
        <input type="hidden" name="hero_image_old" value="{{$growingRegion->hero_image}}">
        <input type="file" name="hero_image" onchange="loadPreview(this);" accept="image/*"
               class="form-control form-control-solid" id="hero_image"/>
        <div class="kt_preview_image_container {{(empty($growingRegion->hero_image)) ? 'd-none' : ''}}">
            <img  alt="logo" id="kt_preview_img" src="{{(empty($growingRegion->hero_image))?'': asset('storage/uploads/'.$growingRegion->hero_image)}}"
                  class="img-fluid kt_preview_img"/>
        </div>
        <span class="invalid-feedback" id="hero_image_error" role="alert">
        </span>
    </div>
    <!--end::Col-->
</div>

<div class="row g-9 mb-8">
    <!--begin::Col-->
    <div class="col-md-12 fv-row" id="imageHeroSub">
        <label class="form-label required" for="hero_image_sub">Hero Image Sub</label>
        <input type="hidden" name="hero_image_sub_old" value="{{$growingRegion->hero_image_sub}}">
        <input type="file" name="hero_image_sub" onchange="loadPreview(this,'#kt_preview_img_hero_sub');" accept="image/*"
               class="form-control form-control-solid" id="hero_image_sub"/>
        <div class="kt_preview_image_container {{(empty($growingRegion->hero_image_sub)) ? 'd-none' : ''}}">
            <img  alt="logo" id="kt_preview_img_hero_sub" src="{{(empty($growingRegion->hero_image_sub))?'': asset('storage/uploads/'.$growingRegion->hero_image_sub)}}"
                  class="img-fluid kt_preview_img"/>
        </div>
        <span class="invalid-feedback" role="alert" id="hero_image_sub_error"></span>
    </div>
    <!--end::Col-->
</div>
<div class="row g-9 mb-8">
    <div class="col-md-12 fv-row">
        <div class="form-check form-switch form-check-custom form-check-success form-check-solid">
            <input class="form-check-input" type="checkbox" name="is_active" value="1" {{$growingRegion->is_active ? 'checked' : ''}} id="is_active"/>
            <label class="form-check-label" for="is_active">
                Active
            </label>
        </div>
    </div>
</div>

<hr/>

<div>
    <h2 class="mb-4">Teams</h2>
    <div class="team-repeater">
        <div data-repeater-list="teams_repeater">
            <div data-repeater-item class="team-box">
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-12 fv-row">
                        <label class="required form-label" for="teams_repeater_0_team_name">Name</label>
                        <input id="teams_repeater_0_team_name" autocomplete="off" type="text" name="team_name" class="form-control mb-2" value="{{$growingRegion->team_name}}"/>
                        <span class="invalid-feedback" role="alert" id="teams_repeater_0_team_name_error">
                        </span>
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-12 fv-row">
                        <label class="required form-label" for="teams_repeater_0_team_role">Role</label>
                        <input id="teams_repeater_0_team_role" autocomplete="off" type="text" name="team_role" class="form-control mb-2" value="{{$growingRegion->team_role}}"/>
                        <span class="invalid-feedback" role="alert" id="teams_repeater_0_team_role_error">
                        </span>
                    </div>
                    <!--end::Col-->
                </div>

                <div class="row  g-9 mb-8">
                    <div class="col-md-12 fv-row">
                        <div class="kt-form__group--inline">
                            <div class="kt-form__label mb-2">
                                <label for="teams_repeater_0_team_image">Upload Image:</label>
                            </div>
                            <div class="kt-form__control ks-file-uploader-container">
                                <input type="file" id="teams_repeater_0_team_image" name="team_image" class="ks-file-uploader reset-element">
                                <div class="ks-file-uploader-preview-box"></div>
                                <span class="invalid-feedback" role="alert" id="teams_repeater_0_team_image_error">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right">
            <input data-repeater-create type="button" value="Add" class="btn btn-primary btn-sm mt-3"/>
        </div>
    </div>
</div>


<!--begin::Actions-->
<div>
    <a href="{{route('dashboard.growing-regions.index')}}" class="btn btn-dark btn-sm me-3">Cancel</a>
    <button type="submit" class="btn btn-sm btn-primary">{{$buttonText}}</button>
</div>
<!--end::Actions-->
@push('scripts')
    <script>
        $(document).ready(function (){
            let options = {
                height : "300",
                menubar: false,
                toolbar: ["styleselect fontselect fontsizeselect",
                    "forecolor | undo redo | cut copy paste | bold italic | alignleft aligncenter alignright alignjustify",
                    "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview | code"],
                plugins : "advlist autolink lists charmap print preview code"
            };
            tinymce.init({...options,  selector: "#description"})
            tinymce.init({...options,  selector: "#characteristics"});
            tinymce.init({...options,  selector: "#tasting_note"});


            $(document).on('submit', '#growing_region_form', function (e){
                e.preventDefault();
                let url = $(this).attr('action');
                const formData = new FormData(this);
                $.ajax({
                    url: url,
                    dataType:"json",
                    type:"POST",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    beforeSend:function(){

                    },
                    success:function(resp){
                            // alertifySuccessAndRedirect(resp.message, redirectUrl);
                    },
                    error: function(xhr){
                        if(xhr.status){
                            const errors = xhr.responseJSON.errors;
                            showAjaxErrorsOnFormsWithRepeater(errors, 'growing_region_form');
                            if(errors && Object.keys(errors).length > 0){
                                let first_key = Object.keys(errors)[0];
                                first_key = first_key.replace(/\./g, '_');
                                let firstElement = $(`#${first_key}`);
                                if(firstElement.length > 0){
                                    $('html, body').animate({
                                        scrollTop: firstElement.offset().top - 100
                                    }, 1000);
                                }
                            }
                        }else{
                            toastError(xhr.responseJSON?.message ? xhr.responseJSON?.message : "Something went wrong!!!");
                        }
                    }
                });
            })



            $('.team-repeater').repeater({
                show: function () {
                    let index = $('.team-repeater .team-box[data-repeater-item]').length - 1;
                    const newContent = $(this).html().replace(/_repeater_0_/g, `_repeater_${index}_`);
                    $(this).html(newContent);
                    $(this).slideDown();
                }
            })


        });
    </script>
@endpush