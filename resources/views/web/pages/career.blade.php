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
            <div class="basis-full lg:basis-[50%] bg-[#001C34] pt-24 pb-24 pl-8 lg:pl-[6.5rem] pr-8 lg:pr-24 flex items-end">
                <h1 class="text-white text-[28px] lg:text-[49px] font-intBold leading-tight">Are You Ready for A Great Job?</h1>
            </div>
            <div class="basis-full lg:basis-[50%] pt-24 pb-24 pl-8 lg:pl-[4.75rem] pr-8 lg:pr-[6.5rem] flex items-center">
                <h2 class="text-[#001C34] text-[24px] lg:text-[40px] font-intReg font-medium">Find job details and your point of contact with only two clicks.
                </h2>
            </div>
            <div class="basis-full flex flex-wrap relative lg:h-[650px]">
                <div class="absolute left-0 h-[100px] w-[50%] z-10 bg-[#001C34]"></div>
                <div class="absolute left-0 top-[100px] h-[30px] bg-[#EE4C21] w-[100%] z-10"></div>
                <img class="mx-auto w-full lg:w-[calc(100%-13rem)] z-20 relative" src="{{asset('images/eastern-icon-55.png')}}" />
            </div>
        </div>
    </section>
    <section class="lg:mt-[150px] lg:mb-[100px] px-0 lg:px-[6.5rem] ">
        <div class="bg-[#F2F6F8] py-[8rem] px-8 lg:px-[6.5rem]">
            <h3 class="text-[#001C34] font-intBold text-[30px] text-center mb-4">Open Positions</h3>
            <p class="text-[#001C34] text-[16px] text-center font-intReg mb-[7rem]">You will receive a confirmation e-mail as soon as your application has been sent successfully.
            </p>
            <div id="accordion-collapse" data-accordion="collapse" data-inactive-classes="bg-[#001C34]" data-active-classes="bg-[#001C34]">
                <h2 id="accordion-collapse-heading-1">
                    <button type="button" style="background-color: #001C34;" class="flex items-center justify-between w-full p-5 font-medium  text-left text-white" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                        <span>BUSINESS DEVELOPMENT</span>
                        <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5 font-light border border-b-0 border-gray-200 bg-white">
                        <p class="font-intReg mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                        <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                    </div>
                </div>

                <h2 id="accordion-collapse-heading-2">
                    <button type="button" style="background-color: #001C34;" class="flex items-center justify-between w-full p-5 font-medium text-left text-white" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                        <span>OPERATIONS</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                    <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                        <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
