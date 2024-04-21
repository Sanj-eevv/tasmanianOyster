@foreach($galleries ?? [] as $gallery)
    <div class="image-box">
        <img src="{{asset("storage/uploads/{$gallery->file_url}")}}" alt="{{$gallery->file_name}}" class="cover-image rounded-lg">
    </div>
@endforeach