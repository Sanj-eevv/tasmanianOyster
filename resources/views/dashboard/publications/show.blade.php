@extends('layouts.dashboard.admin')
@section('title', 'Publication')
@section('breadcrumb')
    @include('layouts.dashboard._partials._breadcrumb', ['breadCrumbCount' => 2])
@endsection
@section('content')
    <div class="card py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>Publication Details</h2>
            </div>
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end gap-2" data-kt-customer-table-toolbar="base">
                    <a href="{{route('dashboard.publications.index')}}" class="btn btn-light-dark btn-sm">
                        Back
                    </a>
                    <a href="{{route('dashboard.publications.edit', $publication)}}" class="btn btn-light-primary btn-sm">
                        Edit
                    </a>
                    <button class="btn btn-icon btn-light-youtube btn-sm ml-1p" onclick="confirmDelete(() => {deleteDatatableRecord('publicationDatatable', {{$publication->id}}, '{{route('dashboard.publications.destroy',$publication->id)}}', '{{route('dashboard.publications.index')}}')})"  title="{{ __('Destroy') }}"><i class="fas fa-trash"></i></button>
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
                                Name
                            </th>
                            <td>
                                {{ucwords($publication->name)}}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Type
                            </th>
                            <td>
                                {{ucwords(strtolower(str_replace(['_', '-'], [' ', ' '], $publication->type->name)))}}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                <span class="d-inline-block mb-6">File</span>
                            </th>
                            <td>
                                <a href="{{asset("storage/uploads/$publication->file_url")}}" target="_blank" class="d-flex align-items-start flex-column">
                                    <div class="symbol symbol-60px mb-5">
                                        <img src="{{Vite::asset('resources/images/dashboard/pdf.svg')}}" class="PDF Icon" alt="">
                                    </div>
                                    <div class="fs-7 fw-semibold text-gray-400" style="word-break: break-all">{{$publication->file_name}}</div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Created At
                            </th>
                            <td>
                                {{format_date($publication->created_at)}}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
        </div>
        <!--end::Card header-->
    </div>
@endsection
