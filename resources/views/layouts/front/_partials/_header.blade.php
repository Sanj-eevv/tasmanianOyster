<header class="bg-black/60 py-4 nav-container text-white">
    <div class="flex items-center justify-between container">
        <div>
            <a href="{{route('front.index')}}">
                <img
                        class="h-[80px] w-[100px] lg:h-[94px] lg:w-[113px] bg-center bg-cover"
                        src="{{ asset("storage/uploads/settings/".config('app.settings.app_logo')) }}" alt="logo">
            </a>
        </div>
        <nav class="hidden md:block">
            <ul class="flex items-center text-sm md:gap-x-6 lg:gap-x-8 tracking-wide">
                <li><a href="#" class="font-medium pb-[10px]">ABOUT US</a></li>
                <li class="relative parent-menu">
                    <a href="{{route('front.john-reserve.index')}}" class="font-medium pb-[10px]">JON'S RESERVE</a>
                    <div class="sub-menu hidden absolute min-w-[210px] top-[30px]">
                        <ul>
                            <li class="py-[8px] px-[20px] hover:bg-white bg-black/60 hover:text-black duration-300 ease-linear"><a href="#" class="whitespace-nowrap first-of-type:rounded-t-lg text-sm font-medium">Boomer Bay</a> </li>
                            <li class="py-[8px] px-[20px] hover:bg-white bg-black/60 hover:text-black duration-300 ease-linear"><a href="#" class="whitespace-nowrap first-of-type:rounded-t-lg text-sm font-medium">Duck Bay</a> </li>
                            <li class="py-[8px] px-[20px] hover:bg-white bg-black/60 hover:text-black duration-300 ease-linear"><a href="#" class="whitespace-nowrap first-of-type:rounded-t-lg text-sm font-medium">Pipeclay Bay</a> </li>
                            <li class="py-[8px] px-[20px] hover:bg-white bg-black/60 hover:text-black duration-300 ease-linear"><a href="#" class="whitespace-nowrap first-of-type:rounded-t-lg text-sm font-medium">Boomer Bay</a> </li>
                            <li class="py-[8px] px-[20px] hover:bg-white bg-black/60 hover:text-black duration-300 ease-linear"><a href="#" class="whitespace-nowrap first-of-type:rounded-t-lg text-sm font-medium">Pttwater</a><li>
                            <li class="py-[8px] px-[20px] hover:bg-white bg-black/60 hover:text-black duration-300 ease-linear"><a href="#" class="whitespace-nowrap first-of-type:rounded-t-lg text-sm font-medium">Exlcusive Suppliers</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#" class="font-medium pb-[10px]">GROWING REGION</a></li>
                <li><a href="#" class="font-medium pb-[10px]">CORPORATE</a></li>
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
