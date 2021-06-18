<x-frontend.layout>
    <x-slot name="title">
        {{ __('Total Population') }}
    </x-slot>

    <div class="h-full bg-gray-200">
        <div class="container mx-auto p-5 lg:p-20 shadow-sm rounded-sm bg-white">
            <div class="grid md:grid-cols-2 items-center mb-16">
                <div class="">
                    <h3 class="text-4xl font-bold">Total Population By Country</h3>
                    <span class="inline-block w-28 h-1 bg-red-400"></span>
                    <p class=" leading-8">For the purposes of the GFP ranking, Total Populations are used as the
                        starting point for all other population-related values including Active Labor Force, Available
                        Military Manpower and those Fit-for-Military-Service. Typically the higher the base population,
                        the larger the military fighting force.</p>
                </div>
                <div class="mt-4 md:mt-0 md:ml-auto">
                    <x-big-country-flag>
                        BD
                    </x-big-country-flag>
                </div>

            </div>

            @php
                $total_population = [];

                foreach ($totalPopulations as $key => $value) {
                    array_push($total_population, ['total_population' => $value->total_population, 'country_code' => $value->country->country_code, 'country_id' => $value->country_id, 'country_name' => $value->country->country_name]);
                }
                rsort($total_population);
            @endphp




            @foreach ($total_population as $key => $item)
                <div class="border px-5 shadow-md mb-5 rounded-md">
                    <a href="{{ route('countrys.show', $item['country_id']) }}">
                        <div class="flex items-center justify-between">
                            <label for="disk_c" class="flex items-center space-x-2 font-bold">
                                <x-country-flag>
                                    {{ $item['country_code'] }}
                                </x-country-flag><span>{{ $item['country_name'] }}</span>
                            </label>
                            <span class="block font-bold">@money($item['total_population'])</span>
                        </div>

                        <meter id="disk_c" class="w-full h-10 bg-red" value="{{ $item['total_population'] }}" min="0"
                            max="{{ $maxPopulation }}"> {{ $item['total_population'] }}</meter>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

</x-frontend.layout>
