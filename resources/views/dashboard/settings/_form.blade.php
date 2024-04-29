<div class="row g-9 mb-8">
    <!--begin::Col-->
    <div class="col-md-12 fv-row">
        <label class="required form-label" for="app_name">App Name</label>
        <input id="app_name" type="text" name="app_name" class="form-control mb-2 @error('app_name') is-invalid @enderror" value="{{ old('app_name', $all_settings['app_name']) }}" />
        @error('app_name')
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
        <label class="required form-label" for="company_email">Company Email</label>
        <input id="company_email" type="text" name="company_email" class="form-control mb-2 @error('company_email') is-invalid @enderror" value="{{ old('company_email', $all_settings['company_email']) }}" />
        @error('company_email')
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
        <label class="required form-label" for="company_address">Company Address</label>
        <input id="company_address" type="text" name="company_address" class="form-control mb-2 @error('company_address') is-invalid @enderror" value="{{ old('company_address', $all_settings['company_address']) }}" />
        @error('company_address')
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
        <label class="required form-label" for="company_phone">Company Phone</label>
        <input id="company_phone" type="text" name="company_phone" class="form-control mb-2 @error('company_phone') is-invalid @enderror" value="{{ old('company_phone', $all_settings['company_phone']) }}" />
        @error('company_phone')
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
        <label class="form-label" for="company_tagline">Company Tagline</label>
        <input id="company_tagline" type="text" name="company_tagline" class="form-control mb-2 @error('company_tagline') is-invalid @enderror" value="{{ old('company_tagline', $all_settings['company_tagline']) }}" />
        @error('company_tagline')
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
        <label class="required form-label" for="copyright_text">Copyright Text</label>
        <input id="copyright_text" type="text" name="copyright_text" class="form-control mb-2 @error('copyright_text') is-invalid @enderror" value="{{ old('copyright_text', $all_settings['copyright_text']) }}" />
        @error('copyright_text')
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
        <label class="form-label" for="facebook_url">Facebook URL</label>
        <input id="facebook_url" type="text" name="facebook_url" class="form-control mb-2 @error('facebook_url') is-invalid @enderror" value="{{ old('facebook_url', $all_settings['facebook_url']) }}" />
        @error('facebook_url')
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
        <label class="form-label" for="instagram_url">Instagram Url</label>
        <input id="instagram_url" type="text" name="instagram_url" class="form-control mb-2 @error('instagram_url') is-invalid @enderror" value="{{ old('instagram_url', $all_settings['instagram_url']) }}" />
        @error('instagram_url')
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
        <label class="form-label" for="twitter_url">Twitter Url</label>
        <input id="twitter_url" type="text" name="twitter_url" class="form-control mb-2 @error('twitter_url') is-invalid @enderror" value="{{ old('twitter_url', $all_settings['twitter_url']) }}" />
        @error('twitter_url')
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
        <label class="form-label" for="linkedin_url">LinkedIn Url</label>
        <input id="linkedin_url" type="text" name="linkedin_url" class="form-control mb-2 @error('linkedin_url') is-invalid @enderror" value="{{ old('linkedin_url', $all_settings['linkedin_url']) }}" />
        @error('linkedin_url')
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
        <label class="form-label" for="map_iframe">Iframe Url</label>
        <input id="map_iframe" type="text" name="map_iframe" class="form-control mb-2 @error('map_iframe') is-invalid @enderror" value="{{ old('map_iframe', $all_settings['map_iframe']) }}" />
        @error('map_iframe')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <!--end::Col-->
</div>

<divs class="row g-9 mb-8">
    <!--begin::Col-->
    <div class="col-md-12 fv-row" id="image">
        <label class=" fs-6 fw-bold mb-2" for="app_logo">
            App Logo
        </label>
        <input type="hidden" name="app_logo_old" value="{{$all_settings['app_logo']}}">
        <input type="file" name="app_logo" onchange="loadPreview(this);"
               class="form-control form-control-solid @error('app_logo') is-invalid @enderror" id="app_logo"/>
        <div class="kt_preview_image_container {{(empty($all_settings['app_logo'])) ? 'd-none' : ''}}">
            <img  alt="Preview Image" id="kt_preview_img" src="{{(empty($all_settings['app_logo']))?'': asset('storage/uploads/'.$all_settings['app_logo'])}}"
                 class="img-fluid kt_preview_img"/>
        </div>
        @error('app_logo')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <!--end::Col-->
</divs>


<!--begin::Actions-->
<div>
    <a href="{{route('dashboard.index')}}" class="btn btn-dark btn-sm me-3">Cancel</a>
    <button type="submit" class="btn btn-sm btn-primary">{{$buttonText}}</button>
</div>
<!--end::Actions-->
