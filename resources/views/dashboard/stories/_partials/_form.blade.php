<div class="row g-9 mb-8">
    <!--begin::Col-->
    <div class="col-md-12 fv-row">
        <label class="required form-label" for="year">Year</label>
        <input id="year" autocomplete="off" type="text" name="year" class="form-control mb-2 @error('year') is-invalid @enderror" value="{{ old('year', $story->year) }}" />
        @error('year')
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
        <label class="required form-label" for="title">Title</label>
        <input id="title" type="text" autocomplete="off" name="title" class="form-control mb-2 @error('title') is-invalid @enderror" value="{{ old('title', $story->title) }}" />
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
        <textarea id="description" name="description" class="form-control mb-2 @error('description') is-invalid @enderror">{{ old('description', $story->description) }}</textarea>
        @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <!--end::Col-->
</div>


<!--begin::Actions-->
<div>
    <a href="{{route('dashboard.stories.index')}}" class="btn btn-dark btn-sm me-3">Cancel</a>
    <button type="submit" class="btn btn-sm btn-primary">{{$buttonText}}</button>
</div>
<!--end::Actions-->
