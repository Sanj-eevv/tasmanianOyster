<div class="row g-9 mb-8">
    <!--begin::Col-->
    <div class="col-md-12 fv-row">
        <label class="required form-label" for="name">Name</label>
        <input id="name" autocomplete="off" type="text" name="name" class="form-control mb-2 @error('name') is-invalid @enderror" value="{{ old('name', $boardExecutive->name) }}" required/>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <!--end::Col-->
</div>

<div class="row g-9 mb-8">
    <!--begin::Col-->
    <div class="col-md-12 fv-row">
        <label class="required form-label" for="role">Role</label>
        <input id="role" autocomplete="off" type="text" name="role" class="form-control mb-2 @error('role') is-invalid @enderror" value="{{ old('role', $boardExecutive->role) }}" required/>
        @error('role')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <!--end::Col-->
</div>

<div class="row g-9 mb-8">
    <!--begin::Col-->
    <div class="col-md-12 fv-row">
        <label class="form-label" for="description">Description</label>
        <textarea id="description" name="description" class="form-control mb-2 @error('description') is-invalid @enderror">{{ old('description', $boardExecutive->description) }}</textarea>
        @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <!--end::Col-->
</div>

<div class="row g-9 mb-20">
    <!--begin::Col-->
    <div class="col-md-12 fv-row" id="image">
        <label class="form-label required" for="image">Image</label>
        <input type="hidden" name="image_old" value="{{$boardExecutive->image}}">
        <input type="file" name="image" onchange="loadPreview(this);" accept="image/*"
               class="form-control form-control-solid @error('image') is-invalid @enderror" id="image"/>
        <div class="kt_preview_image_container {{(empty($boardExecutive->image)) ? 'd-none' : ''}}">
            <img  alt="logo" id="kt_preview_img" src="{{(empty($boardExecutive->image))?'': asset('storage/uploads/'.$boardExecutive->image)}}"
                  class="img-fluid kt_preview_img"/>
        </div>
        @error('image')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <!--end::Col-->
</div>

<!--begin::Actions-->
<div>
    <a href="{{route('dashboard.board-executives.index')}}" class="btn btn-dark btn-sm me-3">Cancel</a>
    <button type="submit" class="btn btn-sm btn-primary">{{$buttonText}}</button>
</div>
<!--end::Actions-->