<x-dashboard-layout>
    {{-- form --}}
    <div class="container">
        <h3 class="text-center bg-white text-lg font-bold rounded-md shadow-sm py-2 mt-3">{{ $country->country_name }}
            -
            Details</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 items-center bg-white shadow-sm rounded-md p-8">
            <div>
                <h3 class="mb-2 text-4xl text-black font-bold border-b-4">{{ $country->country_title }}</h3>
                <x-country-flag>
                    {{ $country->country_code }}
                </x-country-flag>
                <p class="mt-2">{{ $country->country_description }}</p>
            </div>
            <div class="">
                <x-country-flag>
                    {{ $country->country_code }}
                </x-country-flag>
            </div>
        </div>
        {{-- <pre>
                @php
                print_r($country->airPower);
            @endphp
            </pre> --}}

        <div class="bg-white shadow-sm mt-5 py-4 rounded-md p-8">
            <h3 class="text-center text-2xl font-bold">AirPower</h3>
            <div class="grid gap-2 grid-cols-1 md:grid-cols-3">


                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Total Aircraft Strength</h3>
                    @money($country->airPower->total_aircraft_strength)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Fighters/Interceptors</h3>
                    @money($country->airPower->fighters_interceptors)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Dedicated Attack</h3>
                    @money($country->airPower->dedicated_attack)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Transports</h3>
                    @money($country->airPower->transports)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Trainers</h3>
                    @money($country->airPower->trainers)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Special-Mission</h3>
                    @money($country->airPower->special_mission)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Tanker Fleet</h3>
                    @money($country->airPower->tanker_fleet)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Helicopters</h3>
                    @money($country->airPower->helicopters)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Attack Helicopters</h3>
                    @money($country->airPower->attack_helicopters)
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
