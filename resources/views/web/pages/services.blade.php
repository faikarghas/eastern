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
                <h1 class="text-white text-[28px] lg:text-[49px] font-intBold leading-tight mb-6">Complicated cargo does not need to complicate your business</h1>
                <p class="text-white font-intMed leading-snug">Shipping and logistics does not need to be complicated. Eastern Oriental offers end to end services for both air and sea alike. With dedicated teams in both fields you can allow us to do the work and rest at ease.</p>
            </div>
            <div class="basis-full lg:basis-[50%] pt-24 pb-24 pl-8 pr-8 lg:pr-[6.5rem] flex items-center">
                <img src="{{asset('images/Gallery.png')}}"/>
            </div>
        </div>
    </section>
    <section class="">
        <div class="h-[870px]">
            <div class="relative bg-[#ECECEC] p-8 lg:p-0">
                <img class="hidden lg:block" src="{{asset('images/pngkit_china-map-outline-png_3823542 1.png')}}"/>
                <div class="lg:absolute top-[15%] w-full lg:w-[calc(100%-13rem)] lg:left-[6.5rem]">
                    <div>
                        <ul class="w-[100%] z-10 flex justify-between">
                            <li class="counser-prev cursor-pointer text-black text-[40px]">
                              <img class="w-[44px]" src="{{asset('images/Arrow-Left.png')}}"/>
                            </li>
                            <li class="counser-next cursor-pointer text-black text-[40px]">
                              <img class="w-[44px]" src="{{asset('images/Arrow-Right.png')}}"/>
                            </li>
                          </ul>
                    </div>
                    <div class="flex gap-8 slider-service1">
                        <div class="basis-1/3 card">
                            <div class="rounded-tr-[20px] rounded-tl-[20px] overflow-hidden">
                                <img class="rounded-tr-[20px] rounded-tl-[20px]" src="{{asset('images/ser1.png')}}" />
                            </div>
                            <div class="bg-white min-h-[380px] p-8 rounded-br-[20px] rounded-bl-[20px]">
                                <div class="mb-12">
                                    <h2 class="font-intBold text-[18px] relative">FULL CONTAINER LOAD (FLC)</h2>
                                </div>
                                <p class="font-intMed">For large loads across the sea, our FCL services with Eastern Oriental becomes seamless and easy. Our ability to provide your fast and affordable rates cut the complexities when dealing when normal carriers and allow us to sort for the fastest most economical solutions amongst the various shipping lines.
                                </p>
                            </div>
                        </div>
                        <div class="basis-1/3 card">
                            <div class="rounded-tr-[20px] rounded-tl-[20px] overflow-hidden">
                                <img class="rounded-tr-[20px] rounded-tl-[20px]" src="{{asset('images/ser1.png')}}" />
                            </div>
                            <div class="bg-white min-h-[380px] p-8 rounded-br-[20px] rounded-bl-[20px]">
                                <div class="mb-12">
                                    <h2 class="font-intBold text-[18px] relative">FULL CONTAINER LOAD (FLC)</h2>
                                </div>
                                <p class="font-intMed">For large loads across the sea, our FCL services with Eastern Oriental becomes seamless and easy. Our ability to provide your fast and affordable rates cut the complexities when dealing when normal carriers and allow us to sort for the fastest most economical solutions amongst the various shipping lines.
                                </p>
                            </div>
                        </div>
                        <div class="basis-1/3 card">
                            <div class="rounded-tr-[20px] rounded-tl-[20px] overflow-hidden">
                                <img class="rounded-tr-[20px] rounded-tl-[20px]" src="{{asset('images/ser1.png')}}" />
                            </div>
                            <div class="bg-white min-h-[380px] p-8 rounded-br-[20px] rounded-bl-[20px]">
                                <div class="mb-12">
                                    <h2 class="font-intBold text-[18px] relative">CONSOLIDATION / GROUPAGE</h2>
                                </div>
                                <p class="font-intMed">For large loads across the sea, our FCL services with Eastern Oriental becomes seamless and easy. Our ability to provide your fast and affordable rates cut the complexities when dealing when normal carriers and allow us to sort for the fastest most economical solutions amongst the various shipping lines.
                                </p>
                            </div>
                        </div>
                        <div class="basis-1/3 card">
                            <div class="rounded-tr-[20px] rounded-tl-[20px] overflow-hidden">
                                <img class="rounded-tr-[20px] rounded-tl-[20px]" src="{{asset('images/ser1.png')}}" />
                            </div>
                            <div class="bg-white min-h-[380px] p-8 rounded-br-[20px] rounded-bl-[20px]">
                                <div class="mb-12">
                                    <h2 class="font-intBold text-[18px] relative">AIR FREIGHT</h2>
                                </div>
                                <p class="font-intMed">For large loads across the sea, our FCL services with Eastern Oriental becomes seamless and easy. Our ability to provide your fast and affordable rates cut the complexities when dealing when normal carriers and allow us to sort for the fastest most economical solutions amongst the various shipping lines.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lg:ml-[6.5rem] pb-20 p-8 lg:p-[6.5rem] lg:px-[6.5rem] bg-[#001C34]">
       <h2 class="font-intBold text-white text-[49px] mb-16">Why Choose Us</h2>
       <div class="flex flex-wrap gap-8">
            <div class="basis-full lg:basis-[48%] border-white border-[5px] p-8 pt-16 mb-10 h-min-[350px] lg:h-[350px] relative">
                <div class="bg-[#001C34] absolute left-[2rem] top-[calc(-70px/2)] w-[90px] flex justify-center">
                    <img class="w-[70px]" src="{{asset('images/flexible.png')}}"/>
                </div>
                <h4 class="mb-4 text-white font-intBold">FLEXIBLE</h4>
                <p class="text-white font-intMed">In an ever-changing market with endless amounts of circumstances, we offer tailored flexibility ensure our customers needs are met as well as satisfied.</p>
            </div>
            <div class="basis-full lg:basis-[48%] border-white border-[5px] p-8 pt-16 mb-10 h-min-[350px] lg:h-[350px] relative">
                <div class="bg-[#001C34] absolute left-[2rem] top-[calc(-70px/2)] w-[90px] flex justify-center">
                    <img class="w-[70px]" src="{{asset('images/reliable.png')}}"/>
                </div>
                <h4 class="mb-4 text-white font-intBold">RELIABLE</h4>
                <p class="text-white font-intMed">We understand exactly how important the goods and their timely delivery are to our customers. Our dedicated staff along with our near endless amounts of resources provide assurances in places others can’t.
                </p>
            </div>
            <div class="basis-full lg:basis-[48%] border-white border-[5px] p-8 pt-16 h-min-[350px] lg:h-[350px] relative">
                <div class="bg-[#001C34] absolute left-[2rem] top-[calc(-70px/2)] w-[90px] flex justify-center">
                    <img class="w-[70px]" src="{{asset('images/experience.png')}}"/>
                </div>
                <h4 class="mb-4 text-white font-intBold">EXPERIENCE</h4>
                <p class="text-white font-intMed">With a combined experience of over 150 years in the Forwarding and Logistics Industry, we pride ourselves on our expertise in end to end services. We know what to do, how to do it, and the most cost effect means to get it done.
                </p>
            </div>
            <div class="basis-full lg:basis-[48%] border-white border-[5px] p-8 pt-16 h-min-[350px] lg:h-[350px] relative">
                <div class="bg-[#001C34] absolute left-[2rem] top-[calc(-70px/2)] w-[90px] flex justify-center">
                    <img class="w-[70px]" src="{{asset('images/services_icon.png')}}"/>
                </div>
                <h4 class="mb-4 text-white font-intBold">SERVICES</h4>
                <p class="text-white font-intMed">There are literally 1000’s of forwarders and consolidators in the Market. Yet far too often customers and partners alike are treated like like simple cash transactions; with very little sense of ownership. We feel this is wrong and part of any service is the sense of personal attention, appreciation, and commitment to a smooth sailings.
                </p>
            </div>
       </div>
    </section>
    <section class="bg-[#001C34]">
        <div class="flex justify-center h-[450px] rounded-tr-[60px] pt-20 bg-white">
            <h3 class="mb-4 text-[#001C34] font-intBold text-[35px] leading-tight">Eastern Oriental<br/> Containers Info</h3>
        </div>
        <div class="h-[300px] bg-[#EE4C21] p-[5.5rem] relative">
            <div class="absolute left-[50%] translate-x-[-50%] top-[-230px] w-[calc(100%-5rem)] lg:w-[calc(100%-10rem)]">
                <div class="slider-service2 ">
                    <div class="rounded-[20px] sr2">
                        <img class="rounded-[20px]" src="{{asset('images/container-eastern-oriental-1.jpg')}}" alt="" srcset="">
                    </div>
                    <div class="rounded-[20px] sr2">
                        <img class="rounded-[20px]" src="{{asset('images/container-eastern-oriental-2.jpg')}}" alt="" srcset="">
                    </div>
                    <div class="rounded-[20px] sr2">
                        <img class="rounded-[20px]" src="{{asset('images/container-eastern-oriental-3.jpg')}}" alt="" srcset="">
                    </div>
                    <div class="rounded-[20px] sr2">
                        <img class="rounded-[20px]" src="{{asset('images/container-eastern-oriental-4.jpg')}}" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
