<header class="flex justify-center z-50 bg-white fixed top-0 left-0 w-full mx-auto h-[100px] px-8 sm:px-6 md:px-10 lg:px-16 xl:px-24">
    <nav class="flex justify-between items-center w-full">
        <div class="logo"><a href="/" ><img class="w-[100px]" src="{{asset('images/Logo.png')}}"/></a></div>
        {{-- DESKTOP --}}
        <ul class="hidden lg:flex items-center">
            <li class="mr-2 md:mr-5 lg:mr-10"><a href='/' class="font-intReg font-bold text-[14px] lg:text-[16px]">Home</a></li>
            <li class="mr-2 md:mr-5 lg:mr-10"><a href='/about' class="font-intReg font-bold text-[14px] lg:text-[16px]">About</a></li>
            <li class="mr-2 md:mr-5 lg:mr-10"><a href='/services' class="font-intReg font-bold text-[14px] lg:text-[16px]">Services</a></li>
            <li class="mr-2 md:mr-5 lg:mr-10"><a href='/career' class="font-intReg font-bold text-[14px] lg:text-[16px]">Career</a></li>
            <li class="mr-2 md:mr-5 lg:mr-10"><a href='/news' class="font-intReg font-bold text-[14px] lg:text-[16px]">News & Events</a></li>
            <li class="mr-2 md:mr-5 lg:mr-10"><a href='/contact' class="font-intReg font-bold text-[14px] lg:text-[16px]">Contact</a></li>
            <li class="ml-2 mb:ml-4 lg:ml-7"><a class="font-intReg font-bold bg-[#EE4C21] py-[12px] px-[16px] lg:py-[14px] xl:py-[17px] lg:px-[20px] rounded-lg text-white text-[14px] lg:text-[8px] xl:text-[16px]">LOGIN NOW</a></li>
        </ul>
        {{-- MOBILE --}}
        <div id="menu-hamburger" class="block lg:hidden">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <div id="menu-mobile" class="hidden bg-white fixed left-0 top-[100px] w-full h-full z-50">
        <ul class="flex flex-col lg:hidden items-center py-28">
            <li class="mr-2 md:mr-5 mb-4"><a href='/' class="font-intReg font-bold text-[30px] ">Home</a></li>
            <li class="mr-2 md:mr-5 mb-4"><a href='/about' class="font-intReg font-bold text-[30px] ">About</a></li>
            <li class="mr-2 md:mr-5 mb-4"><a href='/services' class="font-intReg font-bold text-[30px] ">Services</a></li>
            <li class="mr-2 md:mr-5 mb-4"><a href='/career' class="font-intReg font-bold text-[30px] ">Career</a></li>
            <li class="mr-2 md:mr-5 mb-4"><a href='/news' class="font-intReg font-bold text-[30px] ">News & Events</a></li>
            <li class="mr-2 md:mr-5 mb-4"><a href='/contact' class="font-intReg font-bold text-[30px] ">Contact</a></li>
        </ul>
    </div>

</header>