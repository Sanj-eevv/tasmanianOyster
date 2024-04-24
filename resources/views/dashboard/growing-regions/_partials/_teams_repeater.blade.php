<div data-repeater-item class="team-box">
    <button data-repeater-delete class="delete-repeater btn btn-danger btn-icon btn-sm" type="button" data-id="{{$team->id}}"><i class="fas fa-trash-alt"></i></button>
    @if($team->id)
    <input type="hidden" value="{{$team->id}}" name="team_id" class="team-id-input">
    @endif
    <div class="row g-9 mb-8">
        <!--begin::Col-->
        <div class="col-md-12 fv-row">
            <label class="required form-label" for="teams_repeater_{{$index}}_team_name">Name</label>
            <input id="teams_repeater_{{$index}}_team_name" autocomplete="off" type="text" name="team_name" class="form-control mb-2 reset-element" value="{{$team->name}}"/>
            <span class="invalid-feedback" role="alert" id="teams_repeater_{{$index}}_team_name_error">
                        </span>
        </div>
        <!--end::Col-->
    </div>
    <div class="row g-9 mb-8">
        <!--begin::Col-->
        <div class="col-md-12 fv-row">
            <label class="required form-label" for="teams_repeater_{{$index}}_team_role">Role</label>
            <input id="teams_repeater_{{$index}}_team_role" autocomplete="off" type="text" name="team_role" class="form-control mb-2 reset-element" value="{{$team->role}}"/>
            <span class="invalid-feedback" role="alert" id="teams_repeater_{{$index}}_team_role_error">
                        </span>
        </div>
        <!--end::Col-->
    </div>
    <div class="row g-9 mb-8">
        <!--begin::Col-->
        <div class="col-md-12 fv-row" id="teams_repeater_{{$index}}_team_image_container">
            <label class="form-label required" for="teams_repeater_{{$index}}_team_image">Image</label>
            <input type="hidden" name="team_image_old" value="{{$team->image}}">
            <input type="file" name="team_image" onchange="loadPreview(this,'#teams_repeater_{{$index}}_team_image_preview');" accept="image/*"
                   class="form-control form-control-solid" id="teams_repeater_{{$index}}_team_image"/>
            <div class="kt_preview_image_container {{(empty($team->image)) ? 'd-none' : ''}}">
                <img  alt="logo" id="teams_repeater_{{$index}}_team_image_preview" src="{{(empty($team->image))?'': asset('storage/uploads/'.$team->image)}}"
                      class="img-fluid kt_preview_img"/>
            </div>
            <span class="invalid-feedback error-span" role="alert" id="teams_repeater_{{$index}}_team_image_error"></span>
        </div>
        <!--end::Col-->
    </div>
</div>