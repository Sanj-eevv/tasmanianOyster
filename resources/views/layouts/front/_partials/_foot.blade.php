<script src="{{asset('asset/js/shared/jQuery.min.js')}}?version={{config('app.asset_version')}}"></script>
<script src="{{asset('asset/js/front/aos/aos.js')}}?version={{config('app.asset_version')}}"></script>
<script src="{{asset('asset/js/front/toastr.min.js')}}?version={{config('app.asset_version')}}"></script>
<script src="{{asset('asset/js/front/slick-1.8.1/slick/slick.min.js')}}?version={{config('app.asset_version')}}"></script>
<script src="{{asset('asset/js/front/typed/typed.umd.js')}}?version={{config('app.asset_version')}}"></script>
<script>
    AOS.init();
</script>
@include('shared.shared_script')
@include('shared.toaster_alert_script')
