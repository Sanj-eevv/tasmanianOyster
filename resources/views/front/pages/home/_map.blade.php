@push('styles')
    <style>
         div.section-map iframe{
          height: 500px;
          width: 100% !important;
          border: 0;
         }
    </style>
@endpush
<div class="section-map">
    {!! config('app.settings.map_iframe') !!}
 </div>