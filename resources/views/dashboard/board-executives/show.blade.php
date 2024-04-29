@extends('layouts.dashboard.admin')
@section('title', 'Board & Executive')
@section('breadcrumb')
    @include('layouts.dashboard._partials._breadcrumb', ['breadCrumbCount' => 2])
@endsection
@section('content')
    <div class="card py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>Board & Executive Details</h2>
            </div>
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end gap-2" data-kt-customer-table-toolbar="base">
                    <a href="{{route('dashboard.board-executives.index')}}" class="btn btn-light-dark btn-sm">
                        Back
                    </a>
                    <a href="{{route('dashboard.board-executives.edit', $boardExecutive)}}" class="btn btn-light-primary btn-sm">
                        Edit
                    </a>
                    <button class="btn btn-icon btn-light-youtube btn-sm ml-1p" onclick="confirmDelete(() => {deleteDatatableRecord('boardExecutiveDatatable', {{$boardExecutive->id}}, '{{route('dashboard.board-executives.destroy',$boardExecutive->id)}}', '{{route('dashboard.board-executives.index')}}')})"  title="{{ __('Destroy') }}"><i class="fas fa-trash"></i></button>
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
                                {{ucwords($boardExecutive->name)}}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Role
                            </th>
                            <td>
                                {{ucwords($boardExecutive->role)}}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Description
                            </th>
                            <td>
                                {{$boardExecutive->description}}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                <span class="d-inline-block mb-6">Image</span>
                            </th>
                            <td>
                                <a href="{{asset("storage/uploads/$boardExecutive->image")}}" target="_blank">
                                    <img src="{{asset("storage/uploads/$boardExecutive->image")}}" alt="hero image" class="mb-6 kt_preview_img" id="kt_preview_img"/>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Created At
                            </th>
                            <td>
                                {{format_date($boardExecutive->created_at)}}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
        </div>
        <!--end::Card header-->
    </div>
@endsection