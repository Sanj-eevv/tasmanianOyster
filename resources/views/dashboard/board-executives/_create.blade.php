@extends('layouts.dashboard.admin')
@section('title', 'Board & Executive')
@section('breadcrumb')
    @include('layouts.dashboard._partials._breadcrumb')
@endsection
@section('content')
    <div class="card py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>Board & Executive</h2>
            </div>
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                    <a href="{{route('dashboard.board-executives.index')}}" class="btn btn-light-dark btn-sm">
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
            <form id="create_john_reserve_form" class="form" action="{{route('dashboard.board-executives.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('dashboard.board-executives._partials._form',['buttonText' => 'Create'])
            </form>
            <!--end:Form-->
        </div>
        <!--end::Card header-->
    </div>
@endsection