<x-dashboard-layout>
    {{-- form --}}
    <div class="container">
        <h3 class="text-center bg-white text-lg font-bold rounded-md shadow-sm py-2 mt-3">{{ $country->country_name }}
            -
            Details {{$country->airPower->id}}</h3>

        <div class="grid gap-y-5 grid-cols-1 md:grid-cols-2 items-center bg-white shadow-sm rounded-md p-8">
            <div>
                <h3 class="mb-2 text-4xl text-black font-bold border-b-4">{{ $country->country_title }}</h3>
                <x-country-flag>
                    {{ $country->country_code }}
                </x-country-flag>
                <p class="mt-2">{{ $country->country_description }}</p>
            </div>
            <div class="md:place-self-end">
                <x-big-country-flag>
                    {{ $country->country_code }}
                </x-big-country-flag>
            </div>
        </div>

        <div class="bg-white shadow-sm mt-5 py-4 rounded-md p-8">
            <h3 class="text-center text-2xl mb-3 font-bold">AirPower | <a href="{{route('airpower.edit',$country->airPower->id)}}" class=" text-red-400 inline-block border rounded-lg px-2">Edit</a></h3>
            <div class="grid gap-2 grid-cols-1 md:grid-cols-3">

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Total Aircraft Strength</h3>
                    @money($country->airPower->total_aircraft_strength)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Fighters/Interceptors </h3>
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
            {{-- Air Power End Here --}}
<hr>
            <h3 class="text-center text-2xl mb-3 mt-7 font-bold">Financials | <a href="{{route('financial.edit',$country->financials->id)}}" class=" text-red-400 inline-block border rounded-lg px-2">Edit</a></h3>
            <div class="grid gap-2 grid-cols-1 md:grid-cols-3">

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Defense Budget</h3>
                    @money($country->financials->defense_budget)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">External Debt</h3>
                    @money($country->financials->external_debt)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Foreign Exchange/Gold</h3>
                    @money($country->financials->foreign_exchange_gold)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Purchasing Power Parity</h3>
                    @money($country->financials->purchasing_power_parity)
                </div>
            </div>

            {{-- Financials End Here --}}
<hr>
            <h3 class="text-center text-2xl mb-3 mt-7 font-bold">Georgraphy | <a href="{{route('geography.edit',$country->georgraphy->id)}}" class=" text-red-400 inline-block border rounded-lg px-2">Edit</a></h3>
            <div class="grid gap-2 grid-cols-1 md:grid-cols-3">

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Square Land Area</h3>
                    @money($country->georgraphy->square_land_area)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Coastline Coverage</h3>
                    @money($country->georgraphy->coastline_coverage)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Shared Borders</h3>
                    @money($country->georgraphy->shared_borders)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Waterways (Usable)</h3>
                    @money($country->georgraphy->waterways_usable)
                </div>
            </div>

            {{-- Georgraphy End Here --}}
<hr>
            <h3 class="text-center text-2xl mb-3 mt-7 font-bold">LandForces | <a href="{{route('landforces.edit',$country->landforces->id)}}" class=" text-red-400 inline-block border rounded-lg px-2">Edit</a></h3>
            <div class="grid gap-2 grid-cols-1 md:grid-cols-3">

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Tanks</h3>
                    @money($country->landforces->tanks)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Armored Vehicles </h3>
                    @money($country->landforces->armored_vehicles)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Self-Propelled Artillery</h3>
                    @money($country->landforces->self_propelled_artillery)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Towed Artillery</h3>
                    @money($country->landforces->towed_artillery)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Rocket Projectors</h3>
                    @money($country->landforces->rocket_projectors)
                </div>


            </div>

            {{-- LandForces End Here --}}
<hr>
            <h3 class="text-center text-2xl mb-3 mt-7 font-bold">Logistic | <a href="{{route('logistic.edit',$country->logistic->id)}}" class=" text-red-400 inline-block border rounded-lg px-2">Edit</a></h3>
            <div class="grid gap-2 grid-cols-1 md:grid-cols-3">

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Labor Force</h3>
                    @money($country->logistic->labor_force)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Merchant Marine Fleet </h3>
                    @money($country->logistic->marchant_marine_fleet)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Ports/Trade Terminals</h3>
                    @money($country->logistic->ports_trade_terminals)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Roadway Coverage</h3>
                    @money($country->logistic->roadway_coverage)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Railway Coverage</h3>
                    @money($country->logistic->railway_coverage)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Airports</h3>
                    @money($country->logistic->airports)
                </div>


            </div>

            {{-- Logistic End Here --}}
<hr>
            <h3 class="text-center text-2xl mb-3 mt-7 font-bold">Man Power | <a href="{{route('manpower.edit',$country->manpower->id)}}" class=" text-red-400 inline-block border rounded-lg px-2">Edit</a></h3>
            <div class="grid gap-2 grid-cols-1 md:grid-cols-3">
                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Total Population</h3>
                    @money($country->manpower->total_population)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Available Manpower </h3>
                    @money($country->manpower->man_power)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Fit-For-Service</h3>
                    @money($country->manpower->fit_for_service)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Reaching Mil Age Annually</h3>
                    @money($country->manpower->reaching_mil_age_annually)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Tot Military Personnel (est.)</h3>
                    @money($country->manpower->tot_military_personnel)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Active Personnel</h3>
                    @money($country->manpower->active_personnel)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Reserve Personnel</h3>
                    @money($country->manpower->reserve_personnel)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Paramilitary</h3>
                    @money($country->manpower->paramilitary)
                </div>
            </div>

            {{-- Man power End Here --}}
            <h3 class="text-center text-2xl mb-3 mt-7 font-bold">Natural Resources | <a href="{{route('naturl_resource.edit',$country->naturalResources->id)}}" class=" text-red-400 inline-block border rounded-lg px-2">Edit</a></h3>
            <div class="grid gap-2 grid-cols-1 md:grid-cols-3">

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Oil Production </h3>
                    @money($country->naturalResources->oil_production)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Oil Consumption</h3>
                    @money($country->naturalResources->oil_consumption)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Oil Proven Reserves</h3>
                    @money($country->naturalResources->oil_proven_reserves)
                </div>
            </div>


            {{--Natural Resources End Here --}}
<hr>
            <h3 class="text-center text-2xl mb-3 mt-7 font-bold">Naval Forces <a href="{{route('naval_forces.edit',$country->navalForces->id)}}" class=" text-red-400 inline-block border rounded-lg px-2">Edit</a></h3>
            <div class="grid gap-2 grid-cols-1 md:grid-cols-3">
                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Total Assets</h3>
                    @money($country->navalForces->total_assets)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Aircraft Carriers </h3>
                    @money($country->navalForces->aircraft_carriers)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Helicopter Carriers</h3>
                    @money($country->navalForces->helicopter_carriers)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Destroyers</h3>
                    @money($country->navalForces->destroyers)
                </div>

                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Frigates</h3>
                    @money($country->navalForces->frigates)
                </div>
                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Corvettes</h3>
                    @money($country->navalForces->corvettes)
                </div>
                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Submarines</h3>
                    @money($country->navalForces->submarines)
                </div>
                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Patrol Vessels</h3>
                    @money($country->navalForces->patrol_vessels)
                </div>
                <div class="border rounded-md p-4 shadow-sm">
                    <h3 class="text-xl mb-2 font-bold">Mine Warfare</h3>
                    @money($country->navalForces->mine_warfare)
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
