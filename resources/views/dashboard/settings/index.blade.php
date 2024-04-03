@extends('layouts.dashboard.admin')
@section('title', 'Settings')
@section('breadcrumb')
    @include('layouts.dashboard._partials._breadcrumb')
@endsection
@section('content')
    <div class="card py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>Settings</h2>
            </div>
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                    <a href="{{route('dashboard.index')}}" class="btn btn-light-dark btn-sm">
                        Back
                    </a>
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-5">
            <!--begin:Form-->
            <form id="edit_setting_form" class="form" action="{{route('dashboard.settings.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('dashboard.settings._form',['buttonText' => 'Update'])
            </form>
            <!--end:Form-->
        </div>
        <!--end::Card header-->
    </div>
@endsection
