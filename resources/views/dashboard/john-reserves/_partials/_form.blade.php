<div class="row g-9 mb-8">
    <!--begin::Col-->
    <div class="col-md-12 fv-row">
        <label class="required form-label" for="title">Title</label>
        <input id="title" autocomplete="off" type="text" name="title" class="form-control mb-2 @error('title') is-invalid @enderror" value="{{ old('title', $johnReserve->title) }}" required/>
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
        <label class="required form-label" for="description">Description</label>
        <textarea id="description" name="description" class="form-control mb-2 @error('description') is-invalid @enderror" required>{{ old('description', $johnReserve->description) }}</textarea>
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
        <label class="form-label required" for="hero_image">Hero Image</label>
        <input type="hidden" name="hero_image_old" value="{{$johnReserve->hero_image}}">
        <input type="file" name="hero_image" onchange="loadPreview(this);" accept="image/*"
               class="form-control form-control-solid @error('hero_image') is-invalid @enderror" id="hero_image"/>
        <div class="kt_preview_image_container {{(empty($johnReserve->hero_image)) ? 'd-none' : ''}}">
            <img  alt="logo" id="kt_preview_img" src="{{(empty($johnReserve->hero_image))?'': asset('storage/uploads/'.$johnReserve->hero_image)}}"
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
@php
    $sliders = ['umami', 'saltiness', 'texture', 'finish'];
@endphp
@foreach($sliders as $slider)
    <div class="row g-9 mb-{{$loop->last ? '8' : '20'}}">
        <div class="col-1">
            <label class="form-label mb-0" for="{{$slider}}">{{ucwords($slider)}}</label>
        </div>
        <div class="col-11">
            <div id="{{$slider}}Slider"></div>
            <input type="hidden" name="{{$slider}}" class="@error($slider) is-invalid @enderror" value="{{old($slider, $johnReserve->{$slider}) ?? 0.1}}" id="{{$slider}}">
            @error($slider)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
@endforeach
<div class="row g-9 mb-8">
    <div class="col-md-12 fv-row">
        <div class="form-check form-switch form-check-custom form-check-success form-check-solid">
            <input class="form-check-input" type="checkbox" name="is_active" value="1" {{old('is_active', $johnReserve->is_active) ? 'checked' : ''}} id="is_active"/>
            <label class="form-check-label" for="is_active">
                Active
            </label>
        </div>
    </div>
</div>

<!--begin::Actions-->
<div>
    <a href="{{route('dashboard.john-reserve.index')}}" class="btn btn-dark btn-sm me-3">Cancel</a>
    <button type="submit" class="btn btn-sm btn-primary">{{$buttonText}}</button>
</div>
<!--end::Actions-->

@push('scripts')
<script>
$(document).ready(function (){
    @foreach($sliders as $slider)
            let {{$slider.'Obj'}} = noUiSlider.create(document.getElementById("{{$slider}}Slider"), {
                start: [0],
                connect: 'lower',
                tooltips: [wNumb({decimals: 1})],
                range: {
                    "min": 0.1,
                    "max": 5
                }
            });
            {{$slider.'Obj'}}.set({{old($slider, $johnReserve->{$slider}) ?? '0.1'}});

            {{$slider.'Obj'}}.on("update", function (values, handle) {
                document.getElementById("{{$slider}}").value = values[handle];
            });
    @endforeach
});
</script>
@endpush
