<div class="row g-9 mb-8">
    <!--begin::Col-->
    <div class="col-md-12 fv-row">
        <label class="required form-label" for="title">Title</label>
        <input id="title" autocomplete="off" type="text" name="title" class="form-control mb-2 @error('title') is-invalid @enderror" value="{{ old('title', $growingRegion->title) }}" required/>
        @error('title')
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
        <label class="required form-label" for="subtitle">Subtitle</label>
        <input id="subtitle" autocomplete="off" type="text" name="subtitle" class="form-control mb-2 @error('subtitle') is-invalid @enderror" value="{{ old('subtitle', $growingRegion->subtitle) }}" required/>
        @error('subtitle')
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
        <label class="required form-label" for="description">Description</label>
        <textarea id="description" name="description" class="form-control mb-2 @error('description') is-invalid @enderror">{{ old('description', $growingRegion->description) }}</textarea>
        @error('description')
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
        <label class="required form-label" for="characteristics">Characteristics</label>
        <textarea id="characteristics" name="characteristics" class="form-control mb-2 @error('characteristics') is-invalid @enderror">{{ old('characteristics', $growingRegion->characteristics) }}</textarea>
        @error('characteristics')
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
        <label class="required form-label" for="tasting_note">Tasting Note</label>
        <textarea id="tasting_note" name="tasting_note" class="form-control mb-2 @error('tasting_note') is-invalid @enderror">{{ old('tasting_note', $growingRegion->tasting_note) }}</textarea>
        @error('tasting_note')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <!--end::Col-->
</div>


<div class="row g-9 mb-8">
    <!--begin::Col-->
    <div class="col-md-12 fv-row" id="image">
        <label class="form-label required" for="hero_image">Hero Image</label>
        <input type="hidden" name="hero_image_old" value="{{$growingRegion->hero_image}}">
        <input type="file" name="hero_image" onchange="loadPreview(this);" accept="image/*"
               class="form-control form-control-solid @error('hero_image') is-invalid @enderror" id="hero_image"/>
        <div class="kt_preview_image_container {{(empty($growingRegion->hero_image)) ? 'd-none' : ''}}">
            <img  alt="logo" id="kt_preview_img" src="{{(empty($growingRegion->hero_image))?'': asset('storage/uploads/'.$growingRegion->hero_image)}}"
                  class="img-fluid kt_preview_img"/>
        </div>
        @error('hero_image')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <!--end::Col-->
</div>

<div class="row g-9 mb-8">
    <!--begin::Col-->
    <div class="col-md-12 fv-row" id="imageHeroSub">
        <label class="form-label required" for="hero_image_sub">Hero Image</label>
        <input type="hidden" name="hero_image_sub_old" value="{{$growingRegion->hero_image_sub}}">
        <input type="file" name="hero_image_sub" onchange="loadPreview(this,'#kt_preview_img_hero_sub');" accept="image/*"
               class="form-control form-control-solid @error('hero_image_sub') is-invalid @enderror" id="hero_image_sub"/>
        <div class="kt_preview_image_container {{(empty($growingRegion->hero_image_sub)) ? 'd-none' : ''}}">
            <img  alt="logo" id="kt_preview_img_hero_sub" src="{{(empty($growingRegion->hero_image_sub))?'': asset('storage/uploads/'.$growingRegion->hero_image_sub)}}"
                  class="img-fluid kt_preview_img"/>
        </div>
        @error('hero_image_sub')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <!--end::Col-->
</div>
<div class="row g-9 mb-8">
    <div class="col-md-12 fv-row">
        <div class="form-check form-switch form-check-custom form-check-success form-check-solid">
            <input class="form-check-input" type="checkbox" name="is_active" value="1" {{old('is_active', $growingRegion->is_active) ? 'checked' : ''}} id="is_active"/>
            <label class="form-check-label" for="is_active">
                Active
            </label>
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

        })
    </script>
@endpush