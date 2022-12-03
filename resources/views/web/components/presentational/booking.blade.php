<div class="px-8 w-[70%]">
    <h5 class="mb-2 font-intBold text-[#1E1E1E]">ONLINE BOOKING</h5>
    <p class="font-intReg mb-10">Please select your destination to look up the latest sailing schedule</p>
    <form action="" class="flex flex-wrap justify-between w-full">
        <div class="basis-full lg:basis-[47%]">
            <select id="countries" class="font-intReg bg-cs-select border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @foreach ($port as $item)
                    <option value="{{$item->id}}">{{$item->nama}}</option>
                @endforeach
            </select>
        </div>
    </form>
</div>