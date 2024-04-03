<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{Vite::asset('resources/js/shared/jQuery.min.js')}}"></script>
<script src="{{Vite::asset('resources/js/dashboard/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{Vite::asset('resources/js/dashboard/assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{Vite::asset('resources/js/dashboard/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{Vite::asset('resources/js/dashboard/assets/js/widgets.bundle.js')}}"></script>
<script src="{{Vite::asset('resources/js/dashboard/assets/js/custom/widgets.js')}}"></script>
<script src="{{Vite::asset('resources/js/dashboard/assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{Vite::asset('resources/js/dashboard/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{Vite::asset('resources/js/dashboard/assets/js/custom/utilities/modals/create-app.js')}}"></script>
<script src="{{Vite::asset('resources/js/dashboard/assets/js/custom/utilities/modals/new-target.js')}}"></script>
<script src="{{Vite::asset('resources/js/dashboard/assets/js/custom/utilities/modals/users-search.js')}}"></script>
<script src="{{Vite::asset('resources/js/dashboard/assets/plugins/custom/datatable/datatable.bundle.js')}}"></script>
<script src="{{Vite::asset('resources/js/dashboard/assets/plugins/custom/toastr/build/toastr.min.js')}}"></script>
@include('shared.toaster_alert_script')
@include('shared.shared_script')
<script src="{{Vite::asset('resources/js/dashboard/dashboard.custom.js')}}"></script>
@yield('scripts')
@stack('scripts')
<!--end::Custom Javascript-->