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
  <section class="banner bg-[#001C34] lg:h-screen mx-auto sm:px-6 md:px-10 lg:px-[6.5rem] relative flex flex-wrap justify-between">
    <div class="p-8 pt-24 w-full lg:w-[400px]">
      <h1 class="text-white text-[49px] font-intBold leading-tight mb-12">Timeless<br/> Passions for<br/> Logistics</h1>
      <h5 class="text-white font-intReg">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h5>
    </div>
    <div class="pt-24 hidden lg:block">
      <div class="flex">
        <img class="w-[130px] pt-24 h-full" src="{{asset('images/imgb1.png')}}" alt="banner" srcset="">
        <img class="w-[210px] mx-2 h-full" src="{{asset('images/imgb2.png')}}" alt="banner" srcset="">
        <img class="w-[110px] pt-14 h-full" src="{{asset('images/imgb3.png')}}" alt="banner" srcset="">
      </div>
    </div>
    <div class="block p-8 lg:hidden">
      <img class="w-[500px]" src="{{asset('images/Banner Gallery.png')}}" alt="banner" srcset="">
    </div>

    <div class="lg:absolute bottom-[-190px] left-[50%] lg:translate-x-[-50%] h-[300px] w-full px-8 lg:px-0 lg:w-[calc(100%-12rem)]">
      <div class="">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
            <li class="lg:mr-2 w-full lg:w-[170px]" role="presentation">
                <button data-target="export" class="w-full inline-block px-4 py-3 rounded-tl-lg  bg-[#EE4C21] hover:bg-[#EE4C21] text-white hover:text-white font-intReg" >Export</button>
            </li>
            <li class="lg:mr-2 w-full lg:w-[170px]" role="presentation">
                <button data-target="import" class="w-full inline-block px-4 py-3 bg-[#3C3C3C] hover:bg-[#EE4C21] text-white hover:text-white font-intReg" >Import</button>
            </li>
            <li class="lg:mr-2 w-full lg:w-[170px]" role="presentation">
                <button data-target="track" class="w-full inline-block px-4 py-3 bg-[#3C3C3C] hover:bg-[#EE4C21] text-white hover:text-white font-intReg" >Track & Trace</button>
            </li>
            <li class="lg:mr-2 w-full lg:w-[170px]" role="presentation">
                <button data-target="booking" class="w-full inline-block px-4 py-3 bg-[#3C3C3C] hover:bg-[#EE4C21] text-white hover:text-white font-intReg" >Online Booking</button>
            </li> 
        </ul>
      </div>
      <div id="myTabContent" class="pt-[1px] rounded-b-lg shadow-[0px_4px_50px_0px_#00000033]">
        <div class="wrapperTabContent flex items-center justify-center h-[241px] p-4 bg-gray-50 rounded-b-lg rounded-tr-lg dark:bg-gray-800" id="export" >
            @include('web/components/presentational.export')
        </div>
        <div class="wrapperTabContent  items-center justify-center hidden h-[241px] p-4 bg-gray-50 rounded-b-lg rounded-tr-lg dark:bg-gray-800" id="import" >
            @include('web/components/presentational.import')
        </div>
        <div class="wrapperTabContent  items-center justify-center hidden h-[241px] p-4 bg-gray-50 rounded-b-lg rounded-tr-lg dark:bg-gray-800" id="track" >
            @include('web/components/presentational.track')
        </div>
        <div class="wrapperTabContent  items-center justify-center hidden h-[241px] p-4 bg-gray-50 rounded-b-lg rounded-tr-lg dark:bg-gray-800" id="booking" >
            @include('web/components/presentational.booking')
        </div>
      </div>
    </div>

  </section>
  <section class="video mt-[200px] lg:mt-[300px] bg-[#001C34] px-8 py-10 xl:py-20">
    <div class="">
      <div class="lg:px-4 md:px-0 mb-10">
        <iframe class="embed-responsive-item mx-auto h-[470px] w-full md:w-[80%] xl:w-[70%]" src="https://www.youtube.com/embed/Bv5E1yj4n_c"></iframe>
      </div>
      <div class="sm:px-6 md:px-10 lg:px-[6.5rem] mb-14">
        <h3 class="text-center text-white mb-10 text-[48px] font-intBold">Our Story</h3>
        <p class="text-center text-white mb-8 font-intReg">Eastern Oriental Logistics is a collaborative network of international freight forwarders and experienced professionals focused on providing flexible, reliable, and tailor made logistics services to meet the ever changing needs of the transport industry.</p>
        <p class="text-center text-white font-intReg">Headquartered in Singapore, Eastern Oriental strives to implement innovative ideas, technologies, and practices needed to modernize processes and offer simplicity and comfort to our customers. Using these principles we have broken through traditional barriers and developed a smart, efficient, and flexible approach to logistics; allowing customers to focus on their what’s really important.</p>
      </div>
      <div class="text-center">
        <a class="bg-[#EE4C21] py-2 px-6 pb-[10px] text-white rounded-full leading-tight font-intReg">Learn More</a>
      </div>
    </div>
  </section>
  <section class="bg-[#001C34]">
    <div class="bg-white rounded-t-[100px] pb-0 lg:pb-20 py-20">
      <h3 class="text-center text-[#001C34] mb-10 text-[48px] font-intBold">Our Services</h3>
      <div class="relative">
        <ul class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] w-[70%] z-10 flex justify-between">
          <li class="ser-prev cursor-pointer text-black text-[40px]">
            <img class="w-[44px]" src="{{asset('images/Arrow-Left.png')}}"/>
          </li>
          <li class="ser-next cursor-pointer text-black text-[40px]">
            <img class="w-[44px]" src="{{asset('images/Arrow-Right.png')}}"/>
          </li>
        </ul>
        <div class="slider-services px-8 lg:px-0">
          @foreach ($services as $item)
            <div class="relative">
              <img class="w-[250px] lg:w-[650px] m-5" src="{{asset('images/service-1.png')}}"/>
              <div class="absolute bottom-[20%] left-16">
                <h4 class="font-intBold text-white text-[20px]">{{$item->title}}</h4>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <section class="bg-[#EE4C21] pt-20 relative">
    <ul class="absolute top-[30%] left-[50%] translate-x-[-50%] translate-y-[-50%] w-[80%] lg:w-[50%] z-10 flex justify-between">
      <li class="coun-prev cursor-pointer text-black text-[40px]">
        <img class="w-[44px]" src="{{asset('images/Arrow-Left.png')}}"/>
      </li>
      <li class="coun-next cursor-pointer text-black text-[40px]">
        <img class="w-[44px]" src="{{asset('images/Arrow-Right.png')}}"/>
      </li>
    </ul>
    <div class="slider-country w-full px-8 lg:p-0 lg:w-[500px] mx-auto">
      @foreach ($news as $item)
        <div class="text-center">
          <h3 class="text-white mb-10 font-bold text-[40px] leading-tight font-intBold">{{$item->title}}</h3>
          <p class="text-white mb-10 font-intReg">{{$item->deskripsi}}</p>
          <div class="rounded-t-xl h-[350px]">
            <img class="w-full rounded-t-[70px] h-full object-cover" src="{{asset('images/service-1.png')}}"/>
          </div>
        </div>
      @endforeach
    </div>
  </section>
  <section class="bg-white pt-20">
    <img class="w-full" src="{{asset('images/cta-banner.png')}}"/>
  </section>
</main>
@endsection
