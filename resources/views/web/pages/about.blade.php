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
            <div class="basis-full lg:basis-[50%] bg-[#001C34] pt-24 pb-24 pl-8 lg:pl-[6.5rem] pr-8 lg:pr-24">
                <h1 class="text-white text-[28px] lg:text-[49px] font-intBold leading-tight ">We are your trusted international freight providers</h1>
            </div>
            <div class="basis-full lg:basis-[50%] pt-24 pb-24 pl-0 pr-[3.5rem] lg:pl-[4.75rem] lg:pr-[6.5rem] flex items-center">
                <div class="border-l-[8px] py-1 border-[#EE4C21] pl-10 lg:w-[420px]">
                    <p class="text-[#001C34] font-intReg font-medium">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                </div>
            </div>
            <div class="basis-full flex flex-wrap relative h-[650px]">
                <div class="absolute left-0 h-[270px] w-full lg:w-[50%] z-10 bg-[#001C34]"></div>
                <img class="mx-auto object-cover w-full lg:w-[calc(100%-13rem)] z-20 relative" src="{{asset('images/slider-eastern-18.png')}}" />

            </div>
        </div>
    </section>
    <section class="mt-[150px] lg:mt-[350px] mb-24 px-8 lg:px-[6.5rem]">
        <div class="flex flex-wrap">
            <div class="basis-full">
                <h2 class="text-[#001C34] font-intBold text-[49px] font-bold leading-tight mb-14">Eur-Asian Transport<br/>Specialist</h2>
            </div>
            <div class="basis-full lg:basis-1/2 pr-12">
                <p class="mb-8 font-intMed leading-[30px]">Eastern Oriental Logistics is a collaborative network of international freight forwarders and experienced professionals focused on providing flexible, reliable, and tailor made logistics services to meet the ever changing needs of the transport industry.</p>

                <p class="mb-8 font-intMed leading-[30px]">Headquartered in Singapore, Eastern Oriental strives to implement innovative ideas, technologies, and practices needed to modernize processes and offer simplicity and comfort to our customers. Using these principles we have broken through traditional barriers and developed a smart, efficient, and flexible approach to logistics; allowing customers to focus on their what’s really important.</p>

                <p class="mb-8 font-intMed leading-[30px]">With a dedicated overseas agent network, spanning across the globe and covering over 30 countries, we are able to provide solutions for Ocean, Air, and Land transport. Our mission, as an international logistics provider, is to provide an all-inclusive solution with superior service, flexibility, and dependability: that customers not only need, but also expect.</p>

                <p class="mb-8 font-intMed leading-[30px]">Though our expertise in Ocean and Air freight services is well documented, through strategic partnerships, we have gone above and beyond traditional forwarding; proudly providing solutions in all aspects of logistics: including warehousing, trucking, vessel chartering, customs clearance, special equipment, project management, and many more.</p>
            </div>
            <div class="basis-full lg:basis-1/2 flex flex-col items-end">
                <img class="mb-8 h-[90%] object-contain" src={{asset('images/EuroAsianNetwork.png')}} />
                <img class="mb-8 h-[90%] object-contain" src={{asset('images/AmericaNetwork.png')}} />
                <a class="bg-[#EE4C21] font-intBold text-white w-full p-3 text-center">See Our Services</a>
            </div>
        </div>
    </section>
</main>
@endsection
