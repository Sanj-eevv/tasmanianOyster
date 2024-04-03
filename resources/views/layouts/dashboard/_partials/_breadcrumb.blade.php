<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                 <?php $segments = ''; ?>
                @foreach(Request::segments() as $segment)
                           <?php $segments .= '/'.$segment; ?>
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ $segments }}" class="text-muted text-hover-primary">{{ucwords($segment)}}</a>
                    </li>
                    @if(!empty($breadCrumbCount) && $loop->iteration === $breadCrumbCount)
                        @break
                    @endif
                    @if(!$loop->last)
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                    @endif
                @endforeach
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
    </div>
    <!--end::Toolbar container-->
</div>