@php
 use App\Enums\PublicationType;
@endphp
<div class="row g-9 mb-8">
    <!--begin::Col-->
    <div class="col-md-12 fv-row">
        <label class="required form-label" for="name">Name</label>
        <input id="name" autocomplete="off" type="text" name="name" class="form-control mb-2 @error('name') is-invalid @enderror" value="{{ old('name', $publication->name) }}" required/>
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
        <label class="required form-label" for="type">Type</label>
        <select id="type" class="form-select @error('type') is-invalid @enderror" aria-label="Select Publication Type" name="type">
            <option value="">Select Type</option>
            @foreach(PublicationType::cases() as $case)
                <option value="{{$case->value}}" @if(old('type', $publication->type?->value) === $case->value) selected @endif>{{ucwords(strtolower(str_replace(['_', '-'], [' ', ' '], $case->name)))}}</option>
            @endforeach
        </select>
        @error('type')
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
        <label class="form-label required" for="file_url">File</label>
        <input type="file" name="file_url" accept="application/pdf"
               class="form-control form-control-solid @error('file_url') is-invalid @enderror" id="file_url"/>
        @error('file_url')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <!--end::Col-->
</div>
@if($publication->file_url)
    <input type="hidden" name="file_url_old" value="{{$publication->file_url}}">
    <div class="row g-9 mb-8">
        <div class="col-3">
            <a target="_blank" href="{{asset("storage/uploads/$publication->file_url")}}" class="d-flex align-items-center flex-column">
                <div class="symbol symbol-60px mb-5">
                    <img src="{{Vite::asset('resources/images/dashboard/pdf.svg')}}" class="PDF Icon" alt="">
                </div>
                <div class="fs-7 fw-semibold text-gray-400" style="word-break: break-all">{{$publication->file_name}}</div>
            </a>
        </div>
    </div>
@endif

<!--begin::Actions-->
<div>
    <a href="{{route('dashboard.publications.index')}}" class="btn btn-dark btn-sm me-3">Cancel</a>
    <button type="submit" class="btn btn-sm btn-primary">{{$buttonText}}</button>
</div>
<!--end::Actions-->
