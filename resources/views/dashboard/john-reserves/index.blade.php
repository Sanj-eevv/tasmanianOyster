@extends('layouts.dashboard.admin')
@section('title', 'John Reserve')
@section('breadcrumb')
    @include('layouts.dashboard._partials._breadcrumb')
@endsection
@section('content')
    <div class="card py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>John Reserve</h2>
            </div>
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                    <a href="{{route('dashboard.index')}}" class="btn btn-light-dark btn-sm me-2">
                        Back
                    </a>
                    <a href="{{route('dashboard.john-reserve.create')}}" class="btn btn-light-primary btn-sm">
                        Add
                    </a>
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-5">
            <div class="d-flex justify-content-end w-100">
                <label>
                    <input type="text" style="width: fit-content" class="form-control form-control-solid table-search" placeholder="Search"/>
                </label>
            </div>
            <div class="table-responsive">
                <table class="table table-row-bordered gy-5" id="johnReserveDatatable">
                    <thead>
                    <tr class="fw-semibold fs-6 text-muted">
                        <th>Id</th>
                        <th>Title</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        <!--end::Card header-->
    </div>
@endsection
@section('scripts')
    <script>
        $( document ).ready(function( $ ) {
            let table = $('#johnReserveDatatable').DataTable({
                "serverSide": true,
                "ajax": {
                    "url": "{{route('dashboard.john-reserve.index')}}",
                    "dataType":"json",
                    "type":"GET",
                    "data":{"_token":CSRF_TOKEN},
                    "tryCount" : 0,
                    "retryLimit" : 3,
                    error: function(xhr) {
                        if (xhr.status === 500) {
                            this.tryCount++;
                            if (this.tryCount <= this.retryLimit) {
                                $.ajax(this);
                                return;
                            }
                        }
                        let obj = JSON.parse(xhr.responseText);
                        if(obj.message){
                            toastr.error(obj.message)
                        }
                    },
                },
                "columns":[
                    {"data":"id"},
                    {"data": "title"},
                    {"data":"created_at"},
                    {"data":"action","searchable":false,"orderable":false}
                ],
                "rowId": 'id',
                "order": [[ 0, "asc" ]],
                "lengthMenu": [[25, 50, 100, 500], [ 25, 50, 100, 500]],
                "pageLength": 25,
                "deferRender": true,
                fixedHeader: true,
                "searchable": false,
                "dom": '<"top">rt<" bottom.d-md-flex.justify-content-between"lip><"clear">',
                "language": {
                    "emptyTable": " "
                }
            });

            const DebouncedLoad = debounceInput((value) => {
                table.search( value ).draw();
            }, 500);

            $('.table-search').on( 'keyup', function () {
                DebouncedLoad(this.value)
            } );
        });
    </script>
@endsection