@extends('layouts.dashboard.admin')
@section('title', 'Contact')
@section('breadcrumb')
    @include('layouts.dashboard._partials._breadcrumb', ['breadCrumbCount' => 2])
@endsection
@section('content')
    <div class="card py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>Contact Details</h2>
            </div>
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end gap-2" data-kt-customer-table-toolbar="base">
                    <a href="{{route('dashboard.contact.index')}}" class="btn btn-light-dark btn-sm me-2">
                        Back
                    </a>
                    <button class="btn btn-icon btn-light-youtube btn-sm" onclick="confirmDelete(() => {deleteDatatableRecord('contactDatatable', {{$contact->id}}, '{{route('dashboard.contact.destroy',$contact->id)}}', '{{route('dashboard.contact.index')}}')})"  title="{{ __('Destroy') }}"><i class="fas fa-trash"></i></button>
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
                                Full Name
                            </th>
                            <td>
                                {{$contact->full_name}}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Phone Number
                            </th>
                            <td>
                                {{$contact->phone_number}}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Email
                            </th>
                            <td>
                                {{$contact->email}}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Referral Source
                            </th>
                            <td>
                                {{$contact->referral_source}}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Message
                            </th>
                            <td>
                                {{$contact->message}}
                            </td>
                        </tr>
                        <tr>
                            <th  class="text-dark fw-bold">
                                Created At
                            </th>
                            <td>
                                {{format_date($contact->created_at)}}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
        </div>
        <!--end::Card header-->
    </div>
@endsection