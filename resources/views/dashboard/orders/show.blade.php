@extends('layouts.dashboard.admin')
@section('title', 'Order')
@section('breadcrumb')
    @include('layouts.dashboard._partials._breadcrumb', ['breadCrumbCount' => 2])
@endsection
@section('content')
    <div class="card py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>Order Details</h2>
            </div>
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end gap-2" data-kt-customer-table-toolbar="base">
                    <a href="{{route('dashboard.orders.index')}}" class="btn btn-light-dark btn-sm me-2">
                        Back
                    </a>
                    <a href="{{route('dashboard.orders.generate-pdf', $order->id)}}" class="btn btn-light-primary btn-sm me-2">
                        Generate PDF
                    </a>
                    <button class="btn btn-icon btn-light-youtube btn-sm" onclick="confirmDelete(() => {deleteDatatableRecord('orderDatatable', {{$order->id}}, '{{route('dashboard.orders.destroy',$order->id)}}', '{{route('dashboard.orders.index')}}')})"  title="{{ __('Destroy') }}"><i class="fas fa-trash"></i></button>
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
                            <th class="text-dark fw-bold">
                                Email
                            </th>
                            <td>
                                {{$order->email}}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Quantity
                            </th>
                            <td>
                                {{$order->quantity}}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Description
                            </th>
                            <td>
                                {{$order->description}}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Title
                            </th>
                            <td>
                                @if($order->johnReserve)
                                    <a href="{{route('dashboard.john-reserve.show', $order->johnReserve->id)}}" class="capitalize">{{$order->johnReserve->title}}</a>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Created At
                            </th>
                            <td>
                                {{format_date($order->created_at)}}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
        </div>
        <!--end::Card header-->
    </div>
@endsection