<header class="{{$transparentHeader ? 'bg-black/60': 'bg-black' }} nav-container text-white">
    <div class="flex items-center justify-between container h-[80px] sm:h-[100px]">
        <a href="{{route('front.index')}}">
            <img
                    class="h-[65px] w-[65px] sm:h-[85px] sm:w-[85px] bg-center bg-cover"
                    src="{{ asset("storage/uploads/".config('app.settings.app_logo')) }}" alt="logo">
        </a>
        <nav class="hidden md:block">
            <ul class="flex items-center text-sm md:gap-x-6 lg:gap-x-8 tracking-wide">
                <li><a href="{{route('front.story.index')}}" class="font-medium pb-[10px]">OUR STORY</a></li>
                <li class="relative parent-menu">
                    <a href="{{route('front.john-reserve.index')}}" class="font-medium pb-[10px]">JON'S RESERVE</a>
                    <div class="sub-menu hidden absolute min-w-[210px] top-[30px] z-20 -right-[10px]">
                        <ul>
                            @foreach($GLOBAL_JOHN_RESERVES_MENU as $johnReserveMenuSlug => $johnReserveMenuTitle)
                                <li class="hover:bg-white bg-black/60 hover:text-black duration-300 ease-linear"><a href="{{route('front.john-reserve.details', $johnReserveMenuSlug)}}" class="px-[20px] py-[8px] whitespace-nowrap first-of-type:rounded-t-lg text-sm font-medium capitalize inline-block w-full">{{$johnReserveMenuTitle}}</a> </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li><a href="{{route('front.sustainability.index')}}" class="font-medium pb-[10px]">SUSTAINABILITY</a></li>
                <li class="relative parent-menu">
                    <a href="javascript:void(0)" class="font-medium pb-[10px]">GROWING REGION</a>
                    <div class="sub-menu hidden absolute min-w-[210px] top-[30px] z-20 -right-[10px]">
                        <ul>
                            @foreach($GLOBAL_GROWING_REGIONS_MENU as $growingRegionMenuSlug => $growingRegionMenuTitle)
                                <li class="hover:bg-white bg-black/60 hover:text-black duration-300 ease-linear"><a href="{{route('front.growing-region.details', $growingRegionMenuSlug)}}" class="px-[20px] py-[8px] whitespace-nowrap first-of-type:rounded-t-lg text-sm font-medium capitalize inline-block w-full">{{$growingRegionMenuTitle}}</a> </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                
                <li class="relative parent-menu">
                    <a href="javascript:void(0)" class="font-medium pb-[10px]">CORPORATE</a>
                    <div class="sub-menu hidden absolute min-w-[210px] top-[30px] z-20 -right-[10px]">
                        <ul>
                            <li class="hover:bg-white bg-black/60 hover:text-black duration-300 ease-linear"><a href="{{route('front.our-people.index')}}" class="px-[20px] py-[8px] whitespace-nowrap first-of-type:rounded-t-lg text-sm font-medium capitalize inline-block w-full">Our People</a> </li>
                            <li class="hover:bg-white bg-black/60 hover:text-black duration-300 ease-linear"><a href="{{route('front.quality-grading.index')}}" class="px-[20px] py-[8px] whitespace-nowrap first-of-type:rounded-t-lg text-sm font-medium capitalize inline-block w-full">Quality Grading System</a> </li>
                            <li class="hover:bg-white bg-black/60 hover:text-black duration-300 ease-linear"><a href="{{route('front.board-executive.index')}}" class="px-[20px] py-[8px] whitespace-nowrap first-of-type:rounded-t-lg text-sm font-medium capitalize inline-block w-full">Board & Executive</a> </li>
                            <li class="hover:bg-white bg-black/60 hover:text-black duration-300 ease-linear"><a href="{{route('front.investor.index')}}" class="px-[20px] py-[8px] whitespace-nowrap first-of-type:rounded-t-lg text-sm font-medium capitalize inline-block w-full">Investors</a> </li>
                            <li class="hover:bg-white bg-black/60 hover:text-black duration-300 ease-linear"><a href="{{route('front.publication.index')}}" class="px-[20px] py-[8px] whitespace-nowrap first-of-type:rounded-t-lg text-sm font-medium capitalize inline-block w-full">Publications</a> </li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{route('front.order.index')}}" class="font-medium pb-[10px]">SHOP NOW</a></li>
                @auth
                    <li class="border font-medium border-white border-[2px] inline-block cursor-pointer py-2 px-6 text-sm hover:bg-white rounded-full hover:text-black transition ease-in-out duration-300"
                        onClick="document.getElementById('logout-form').submit()"
                    >LOGOUT</li>
                @endauth
            </ul>
            @auth
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endauth
        </nav>
    </div>
</header>
