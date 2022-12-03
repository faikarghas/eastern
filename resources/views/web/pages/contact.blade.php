@extends('web/components/layout.index')
@section('meta-tag')
<title></title>
<meta name="description" content="meta description">
@endsection
@section('header')
@include('web/components/presentational.header')
@endsection
@section('main')
<main>
  <section class="px-4 lg:px-[6.5rem] pb-[6.5rem] pt-[10rem] relative">
    <div class="bg-[#001C34] absolute w-full h-[250px] top-0 left-0"></div>
    <div class="bg-white relative z-10 rounded-[10px] py-[6.5rem] p-8 shadow-[0px_5px_5px_5px_rgba(0,0,0,0.1);]">
      <div class="flex justify-center mb-24">
        <h1 class="font-intBold text-[35px] m-auto border-b-4 border-[#EE4C21] inline-block text-[#001C34]">Get in Touch</h1>
      </div>
      <div class="flex flex-wrap">
        <div class="basis-full lg:basis-1/2 pr-0 lg:pr-8 mb-16 lg:mb-0">
          <h4 class="font-intBold text-[20px] text-[#3C3C3C] mb-4">Leave us Message</h4>
          <form>
            <div class="grid gap-6 mb-4 md:grid-cols-2">
                <div>
                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="First Name" required>
                </div>
                <div>
                    <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Last Name" required>
                </div>
            </div>
            <div class="mb-4">
                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="E-Mail Address" required>
            </div> 
            <div class="mb-4">
                <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Phone Number" required>
            </div> 
            <div class="mb-4">
                <textarea rows="8" id="message" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Message" required></textarea>
            </div> 
            <button type="submit" class="w-full text-white bg-[#EE4C21] px-5 py-2.5 text-center font-intBold text-[14px]">Send</button>
          </form>
        </div>
        <div class="basis-full lg:basis-1/2 pl-0 lg:pl-8">
          <div>
              @foreach ($contact as $item)
                <h4 class="font-intBold text-[20px] text-[#3C3C3C] mb-4">{{$item->office}}</h4>
                <ul class="mb-8">
                  <li class="font-intMed text-[#3C3C3C] flex mb-4 items-start"><img class="w-6 mr-4 pt-1 object-contain" src="{{asset('images/map-pin.png')}}"/>{{$item->address}}</li>
                  <li class="font-intMed text-[#3C3C3C] flex mb-4 items-start"><img class="w-6 mr-4 pt-1 object-contain" src="{{asset('images/phone.png')}}"/>{{$item->phone}}</li>
                  <li class="font-intMed text-[#3C3C3C] flex mb-4 items-start"><img class="w-6 mr-4 pt-1 object-contain" src="{{asset('images/mail.png')}}"/>{{$item->email}}</li>
                </ul>
              @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
