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
                                Umani
                            </th>
                            <td>
                                {{$johnReserve->saltiness}}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Saltiness
                            </th>
                            <td>
                                {{$johnReserve->saltiness}}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Texture
                            </th>
                            <td>
                                {{$johnReserve->texture}}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Finish
                            </th>
                            <td>
                                {{$johnReserve->finish}}
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