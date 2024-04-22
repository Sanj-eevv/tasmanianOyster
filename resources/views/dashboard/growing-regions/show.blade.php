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
                <h2>Growing Region Details</h2>
            </div>
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end gap-2" data-kt-customer-table-toolbar="base">
                    <a href="{{route('dashboard.growing-regions.index')}}" class="btn btn-light-dark btn-sm">
                        Back
                    </a>
                    <a href="{{route('dashboard.growing-regions.edit', $growingRegion)}}" class="btn btn-light-primary btn-sm">
                        Edit
                    </a>
                    <button class="btn btn-icon btn-light-youtube btn-sm ml-1p" onclick="confirmDelete(() => {deleteDatatableRecord('growingRegionDatatable', {{$growingRegion->id}}, '{{route('dashboard.growing-regions.destroy',$growingRegion->id)}}', '{{route('dashboard.growing-regions.index')}}')})"  title="{{ __('Destroy') }}"><i class="fas fa-trash"></i></button>
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
                                {{ucwords($growingRegion->title)}}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Subtitle
                            </th>
                            <td>
                                {{ucwords($growingRegion->subtitle)}}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Description
                            </th>
                            <td>
                                {!! $growingRegion->description !!}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Characteristics
                            </th>
                            <td>
                                {!! $growingRegion->characteristics !!}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Tasting Note
                            </th>
                            <td>
                                {!! $growingRegion->tasting_note !!}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                <span class="d-inline-block mb-6">Hero Image</span>
                            </th>
                            <td>
                                <a href="{{asset("storage/uploads/$growingRegion->hero_image")}}" target="_blank">
                                    <img src="{{asset("storage/uploads/$growingRegion->hero_image")}}" alt="hero image" class="kt_preview_img mb-6"/>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                <span class="d-inline-block mb-6">Hero Image Sub</span>
                            </th>
                            <td>
                                <a href="{{asset("storage/uploads/$growingRegion->hero_image_sub")}}" target="_blank">
                                    <img src="{{asset("storage/uploads/$growingRegion->hero_image_sub")}}" alt="hero image" class="kt_preview_img mb-6"/>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-dark fw-bold">
                                Active
                            </th>
                            <td>
                                <div class="form-check form-switch form-check-custom form-check-success form-check-solid">
                                    <label>
                                        <input class="form-check-input" type="checkbox" disabled {{$growingRegion->is_active ? 'checked' : ''}}/>
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Created At
                            </th>
                            <td>
                                {{format_date($growingRegion->created_at)}}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
        </div>
        <!--end::Card header-->
    </div>
@endsection
