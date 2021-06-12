<x-frontend.layout>
    <x-slot name="title">
        Country List
    </x-slot>
    <div class="h-full bg-gray-200">
        <div class="container mx-auto border bg-white p-20 shadow-sm rounded-sm">
           <div>
            <h3 class="text-4xl text-gray-600 font-bold text-left">Global Firepower Countries Index</h3>
            <p class="text-xl text-gray-500 mt-3">ALl military powers considered for the yearly GFP defense review.</p>
            <div class="w-28 h-2 bg-red-500 mt-5"></div>
            <p class=" mt-16 text-gray-500 leading-8 text-left text-lg">There are currently 140 countries considered for the Global Firepower (GFP) annual defense review (which currently covers the year 2021). Each country is evaluated on a multitude of factors related to a prolonged offensive or defensive military campaign. Categories are weighted and processed through our in-house formula to produce the 'PwrIndx' rating which is used to compile the finalized GFP list. Nations are grouped below in alphabetical order from A-to-Z.</p>
           </div>


           <div class="grid mt-20 md:grid-cols-6 sm:grid-cols-3 lg:grid-cols-12 gap-5">
               @foreach ($countrys as $country)
               <div class="">
                    <a href="{{route('countrys.show',$country->id)}}" class="border block hover:shadow-md">
                        <img src="{{asset('img/country_flag')}}/{{$country->country_code}}.png" class="w-full sm:h-full md:h-20 rounded-sm object-cover block shadow-md" alt="country_flag">
                    </a>
                    <h3 class="mt-2">{{$country->country_name}}</h3>
             </div>
             @endforeach
           </div>

        </div>
    </div>
</x-frontend.layout>

