<link rel="shortcut icon" href="{{Vite::asset('resources/images/shared/fav.png')}}" />
<link rel="stylesheet" href="{{asset('asset/js/front/aos/aos.css')}}?version={{config('app.asset_version')}}">
<link rel="stylesheet" href="{{asset('asset/css/front/toastr.min.css')}}?version={{config('app.asset_version')}}">
<link rel="stylesheet" href="{{asset('asset/js/front/fontawesome-6.5.2-web/css/fontawesome.css')}}?version={{config('app.asset_version')}}">
<link rel="stylesheet" href="{{asset('asset/js/front/fontawesome-6.5.2-web/css/brands.css')}}?version={{config('app.asset_version')}}">
<link rel="stylesheet" href="{{asset('asset/js/front/fontawesome-6.5.2-web/css/all.css')}}?version={{config('app.asset_version')}}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;600;800&family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    #toast-container>div{
        font-size: 12px;
    }
</style>
@vite(['resources/app.css', 'resources/app.js'])