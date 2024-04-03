<base href="../../../"/>
<title>@yield('title', config('app.name'))</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta property="og:url" content="{{config('app.url')}}" />
<meta property="og:site_name" content="{{config('app.name')}}" />
<link rel="shortcut icon" href="{{Vite::asset('resources/js/dashboard/assets/media/logos/favicon.ico')}}" />
<!--begin::Fonts(mandatory for all pages)-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
<!--end::Fonts-->
<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
<link href="{{Vite::asset('resources/js/dashboard/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Vite::asset('resources/js/dashboard/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Vite::asset('resources/css/auth/auth.custom.css')}}" rel="stylesheet" type="text/css" />
<!--end::Global Stylesheets Bundle-->