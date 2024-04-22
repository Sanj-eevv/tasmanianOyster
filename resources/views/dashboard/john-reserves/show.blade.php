@extends('layouts.dashboard.admin')
@section('title', 'John Reserve')
@section('breadcrumb')
    @include('layouts.dashboard._partials._breadcrumb', ['breadCrumbCount' => 2])
@endsection
@section('content')
    <div class="card py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>John Reserve Details</h2>
            </div>
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end gap-2" data-kt-customer-table-toolbar="base">
                    <a href="{{route('dashboard.john-reserve.index')}}" class="btn btn-light-dark btn-sm">
                        Back
                    </a>
                    <a href="{{route('dashboard.john-reserve.edit', $johnReserve)}}" class="btn btn-light-primary btn-sm">
                        Edit
                    </a>
                    <button class="btn btn-icon btn-light-youtube btn-sm ml-1p" onclick="confirmDelete(() => {deleteDatatableRecord('johnReserveDatatable', {{$johnReserve->id}}, '{{route('dashboard.john-reserve.destroy',$johnReserve->id)}}', '{{route('dashboard.john-reserve.index')}}')})"  title="{{ __('Destroy') }}"><i class="fas fa-trash"></i></button>
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-5">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Title
                            </th>
                            <td>
                                {{ucwords($johnReserve->title)}}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Description
                            </th>
                            <td>
                                {{$johnReserve->description}}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                <span class="d-inline-block mb-6">Image</span>
                            </th>
                            <td>
                                <a href="{{asset("storage/uploads/$johnReserve->hero_image")}}" target="_blank">
                                    <img src="{{asset("storage/uploads/$johnReserve->hero_image")}}" alt="hero image" class="mb-6 kt_preview_img" id="kt_preview_img"/>
                                </a>
                            </td>
                        </tr>
                        @php
                            $sliders = ['umami', 'saltiness', 'texture', 'finish'];
                        @endphp
                        @foreach($sliders as $slider)
                            <tr style="height: {{$loop->last ? '45px' : '65px'}}">
                            <th  class="text-dark fw-bold">
                                {{ucwords($slider)}}
                            </th>
                            <td>
                                <div id="{{$slider}}Slider" disabled></div>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <th class="text-dark fw-bold">
                                Active
                            </th>
                            <td>
                                <div class="form-check form-switch form-check-custom form-check-success form-check-solid">
                                    <label>
                                        <input class="form-check-input" type="checkbox" disabled {{$johnReserve->is_active ? 'checked' : ''}}/>
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Created At
                            </th>
                            <td>
                                {{format_date($johnReserve->created_at)}}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
        </div>
        <!--end::Card header-->
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function (){
            @foreach($sliders as $slider)
            let {{$slider.'El'}} = document.getElementById("{{$slider}}Slider");
            let {{$slider.'Obj'}} = noUiSlider.create({{$slider.'El'}}, {
                start: [0],
                connect: 'lower',
                tooltips: [wNumb({decimals: 1})],
                range: {
                    "min": 0.1,
                    "max": 5
                }
            });
            {{$slider.'Obj'}}.set({{$johnReserve->{$slider} ?? '0.1'}});
            @endforeach

        });
    </script>
@endpush