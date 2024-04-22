<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{asset('asset/js/shared/jQuery.min.js')}}"></script>
<script src="{{asset('asset/js/dashboard/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('asset/js/dashboard/assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{asset('asset/js/dashboard/assets/plugins/custom/datatable/datatable.bundle.js')}}"></script>
<script src="{{asset('asset/js/dashboard/assets/plugins/custom/tinymce/tinymce.bundle.js')}}"></script>
<script src="{{asset('asset/js/dashboard/assets/plugins/custom/toastr/build/toastr.min.js')}}"></script>

@include('shared.toaster_alert_script')
@include('shared.shared_script')
<script src="{{asset('asset/js/dashboard/dashboard.custom.js')}}"></script>
@yield('scripts')
@stack('scripts')
<!--end::Custom Javascript-->