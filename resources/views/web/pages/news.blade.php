@extends('web/components/layout.index')
@section('meta-tag')
<title></title>
<meta name="description" content="meta description">
@endsection
@section('header')
@include('web/components/presentational.header')
@endsection
@section('main')
<main class="mt-[100px]">
    <section>
        <div class="flex flex-wrap relative">
            <div class="basis-full lg:h-[90vh] bg-center bg-contain flex items-center justify-center bg-[#001C34] pt-24 pb-24 pl-12 lg:pl-[6.5rem] pr-8 lg:pr-24" style="background-image: url('images/artikel-banner.png')">
                <h1 class="text-white text-[28px] lg:text-[49px] font-intBold leading-tight text-center">Latest News and Events from<br/> Eastern Oriental</h1>

                <div class="basis-full shadow-[0px_0px_5px_rgba(0,0,0,0.2);] rounded-xl flex flex-wrap bg-white lg:h-[350px] w-[calc(100%-4rem)] lg:w-[calc(100%-13rem)] absolute left-[50%] translate-x-[-50%] bottom-[-160%] lg:bottom-[-45%]">
                    <div class="basis-full lg:basis-1/2 h-[200px] lg:h-full">
                        <img class="object-cover h-full w-full" src={{asset('images/Eastern-Shenzhen-Promo.png')}} />
                    </div>
                    <div class="basis-full lg:basis-1/2 p-10 flex flex-col justify-between shadow-[1px_2px_3px_rgba(0,0,0,0.2);] lg:shadow-none">
                        <div>
                            <span class="mb-6 inline-block bg-[rgba(238,76,33,0.3)] text-[#EE4C21] font-intBold text-[12px] py-1 px-6 rounded-xl">FEATURED</span>
                            <h4 class="text-[#001C34] font-intReg font-semibold text-[20px] lg:text-[30px] mb-4">This is just an example of Title of Featured Article</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page ...</p>
                        </div>
                        <div class="">
                            <ul class="flex justify-between">
                                <li></li>
                                <li class="font-intReg text-[#3C3C3C] text-[13px]">17 September 22</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-[550px] lg:mt-[350px] px-8 lg:px-[6.5rem]">
        <h4 class="font-intReg text-[25px] font-semibold">Recent Articles</h4>
        <span class="font-intReg">Here’s what we’ve been up to recently.</span>

        <div class="grid grid-flow-row lg:grid-cols-3 gap-8 py-8">
            @foreach ($news as $item)
                <a href="{{route('news-detail','ini-slug')}}" class="shadow-[1px_2px_3px_rgba(0,0,0,0.2);] rounded-2xl cursor-pointer">
                    <div class="h-[230px]">
                        <img class="object-cover h-full rounded-t-2xl" src="{{asset('images/slider-eastern-18.png')}}" />
                    </div>
                    <div class="h-[270px] p-6">
                        <span class="mb-6 inline-block bg-[rgba(77,123,162,0.3)] text-[#4D7BA1] font-intBold text-[12px] py-1 px-6 rounded-xl">PROMO</span>
                        <h4 class="text-[#001C34] font-intReg font-semibold">{{$item->title}}</h4>
                    </div>
                    <div class="p-6">
                        <ul class="flex justify-between">
                            <li></li>
                            <li class="font-intReg text-[#3C3C3C] text-[13px]">{{$item->date}}</li>
                        </ul>
                    </div>
                </a>
            @endforeach

            <div class="shadow-[1px_2px_3px_rgba(0,0,0,0.2);] rounded-2xl">
                <div class="h-[230px]">
                    <img class="object-cover h-full rounded-t-2xl" src="{{asset('images/slider-eastern-18.png')}}" />
                </div>
                <div class="h-[270px]">

                </div>
            </div>
        </div>
    </section>
</main>
@endsection
