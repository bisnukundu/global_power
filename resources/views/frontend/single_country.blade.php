<x-frontend.layout>
    <x-slot name="title">
        {{ $country->country_name }}
    </x-slot>

    @php
        $airpower = collect($country->airPower->toArray())->except(['notes', 'country_id', 'id', 'created_at', 'updated_at']);
        $financials = collect($country->financials->toArray())->except(['notes', 'country_id', 'id', 'created_at', 'updated_at']);
        $georgraphy = collect($country->georgraphy->toArray())->except(['notes', 'country_id', 'id', 'created_at', 'updated_at']);
        $landforces = collect($country->landforces->toArray())->except(['notes', 'country_id', 'id', 'created_at', 'updated_at']);
        $logistic = collect($country->logistic->toArray())->except(['notes', 'country_id', 'id', 'created_at', 'updated_at']);
        $manpower = collect($country->manpower->toArray())->except(['notes', 'country_id', 'id', 'created_at', 'updated_at']);
        $naturalResources = collect($country->naturalResources->toArray())->except(['notes', 'country_id', 'id', 'created_at', 'updated_at']);
        $navalForces = collect($country->navalForces->toArray())->except(['notes', 'country_id', 'id', 'created_at', 'updated_at']);

        function dynamic_chart($chartData)
        {
            $chart = '';
            foreach ($chartData->toArray() as $key => $value) {
                $chart .= "['$key', $value],";
            }
            $chart = rtrim($chart, ',');
            return $chart;
        }

    @endphp

    <x-slot name="footer_js">
        <script>
            function chart(function_name, id_name, chart_data) {
                console.log(`${id_name} = ${chart_data}`)
                google.charts.load('current', {
                    'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(function_name);

                function function_name() {
                        var titleName = id_name;
                    var data = google.visualization.arrayToDataTable(chart_data);
                    var options = {
                        title: titleName,
                        is3D: true,
                    };

                    var chart = new google.visualization.PieChart(document.getElementById(id_name));

                    chart.draw(data, options);
                }

               window.addEventListener('resize',function_name)

            }

            // Air Power
            chart("airpower", "airPower", [
                ['Task', "AirPower"],
                <?php
                echo dynamic_chart($airpower); ?>
            ])
            //Financials
            chart("financial", "financials", [
                ['Task', 'financials'],
                <?php
                echo dynamic_chart($financials); ?>
            ])

            // Georgraphy
            chart("Georgraphy", "Georgraphy", [
                ['Task', "Georgraphy"],
                <?php
                echo dynamic_chart($georgraphy); ?>
            ])

            //Lanforces
            chart("landforces", "landforces", [
                ['Task', "landforces"],
                <?php
                echo dynamic_chart($landforces); ?>
            ])
            // // logistic
            chart("logistic", "logistic", [
                ['Task', "logistic"],
                <?php
                echo dynamic_chart($logistic); ?>
            ]);

            // // manpower
            chart("manpower", "manpower", [
                ['Task', "manpower"],
                <?php
                echo dynamic_chart($manpower); ?>
            ]);

            // // naturalResources
            chart("naturalResources", "naturalResources", [
                ['Task', "naturalResources"],
                <?php
                echo dynamic_chart($naturalResources); ?>
            ]);
            // // naturalResources
            chart("navalForces", "navalForces", [
                ['Task', "navalForces"],
                <?php
                echo dynamic_chart($navalForces); ?>
            ]);


        </script>
    </x-slot>

    <div id="chart_div"></div>

    <div class="h-full bg-gray-200">
        <div class="container mx-auto p-20 shadow-sm rounded-sm bg-white">
            <div class="grid md:grid-cols-2 items-center">
                <div class="">
                    <h3 class="text-4xl font-bold">{{ $country->country_title }}</h3>
                    <span class="inline-block w-28 h-1 bg-red-400"></span>
                    <x-country-flag>
                        {{ $country->country_code }}
                    </x-country-flag>
                    <p class=" leading-8">{{ $country->country_description }}</p>
                </div>
                <div class="mt-4 md:mt-0 md:ml-auto">
                    <x-big-country-flag>
                        {{ $country->country_code }}
                    </x-big-country-flag>
                </div>
            </div>
        </div>

        <div class="container mx-auto mt-2 md:p-20 shadow-sm rounded-sm bg-white">
            <h1 class="text-4xl font-bold">Breakdown</h1>
            <span class="w-28 h-1 inline-block bg-red-400"></span>

            <div class="bg-white shadow-sm mt-5 py-4 rounded-md p-8">
                <h3 class="text-center text-2xl mb-2 font-bold">AirPower</h3>
                <span class="w-20 mb-3 md:mb-0 h-1 block mx-auto  bg-red-400"></span>
                <div class="mb-36 shadow-md rounded lg:p-20">
                    <div class="grid gap-2 grid-cols-1 md:grid-cols-3">
                        <div class="border hover:shadow-md cursor-pointer rounded-md p-4 shadow-sm">
                            <h3 class="text-xl mb-2 font-bold">Total Aircraft Strength</h3>
                            @money($country->airPower->total_aircraft_strength)
                        </div>

                        <div class="border hover:shadow-md cursor-pointer rounded-md p-4 shadow-sm">
                            <h3 class="text-xl mb-2 font-bold">Fighters/Interceptors </h3>
                            @money($country->airPower->fighters_interceptors)
                        </div>

                        <div class="border hover:shadow-md cursor-pointer rounded-md p-4 shadow-sm">
                            <h3 class="text-xl mb-2 font-bold">Dedicated Attack</h3>
                            @money($country->airPower->dedicated_attack)
                        </div>

                        <div class="border hover:shadow-md cursor-pointer rounded-md p-4 shadow-sm">
                            <h3 class="text-xl mb-2 font-bold">Transports</h3>
                            @money($country->airPower->transports)
                        </div>

                        <div class="border hover:shadow-md cursor-pointer rounded-md p-4 shadow-sm">
                            <h3 class="text-xl mb-2 font-bold">Trainers</h3>
                            @money($country->airPower->trainers)
                        </div>

                        <div class="border hover:shadow-md cursor-pointer rounded-md p-4 shadow-sm">
                            <h3 class="text-xl mb-2 font-bold">Special-Mission</h3>
                            @money($country->airPower->special_mission)
                        </div>

                        <div class="border hover:shadow-md cursor-pointer rounded-md p-4 shadow-sm">
                            <h3 class="text-xl mb-2 font-bold">Tanker Fleet</h3>
                            @money($country->airPower->tanker_fleet)
                        </div>

                        <div class="border hover:shadow-md cursor-pointer rounded-md p-4 shadow-sm">
                            <h3 class="text-xl mb-2 font-bold">Helicopters</h3>
                            @money($country->airPower->helicopters)
                        </div>

                        <div class="border hover:shadow-md cursor-pointer rounded-md p-4 shadow-sm">
                            <h3 class="text-xl mb-2 font-bold">Attack Helicopters</h3>
                            @money($country->airPower->attack_helicopters)
                        </div>
                    </div>
                    <div class="lg:w-auto rounded-lg shadow-sm w-full my-10 mx-auto">
                        <div id="airPower" class="w-full h-96"></div>
                    </div>
                </div>
                {{-- Air Power End Here --}}

                <h3 class="text-center text-2xl mt-7 mb-2 font-bold">Financials</h3>
                <span class=" mb-3 md:mb-0 w-20 h-1 block mx-auto  bg-red-400"></span>
                <div class="mb-36 shadow-md rounded-md lg:p-20">
                    <div class="grid gap-2 grid-cols-1 md:grid-cols-3">

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Defense Budget</h3>
                            @money($country->financials->defense_budget)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">External Debt</h3>
                            @money($country->financials->external_debt)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Foreign Exchange/Gold</h3>
                            @money($country->financials->foreign_exchange_gold)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Purchasing Power Parity</h3>
                            @money($country->financials->purchasing_power_parity)
                        </div>
                    </div>
                    <div class="lg:w-auto border rounded-lg shadow-sm w-full my-10 mx-auto">
                        <div id="financials" class="w-full h-96"></div>
                    </div>
                </div>

                {{-- Financials End Here --}}

                <h3 class="text-center text-2xl mb-2 mt-7 font-bold">Georgraphy</h3>
                <span class="w-20 mb-3 md:mb-0 h-1 block mx-auto  bg-red-400"></span>
                <div class=" mb-36 shadow-md lg:p-20 rounded-md">
                    <div class="grid gap-2 grid-cols-1 md:grid-cols-3">
                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Square Land Area</h3>
                            @money($country->georgraphy->square_land_area)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Coastline Coverage</h3>
                            @money($country->georgraphy->coastline_coverage)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Shared Borders</h3>
                            @money($country->georgraphy->shared_borders)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Waterways (Usable)</h3>
                            @money($country->georgraphy->waterways_usable)
                        </div>
                    </div>
                    <div id="Georgraphy" class="w-full h-96"></div>
                </div>

                {{-- Georgraphy End Here --}}

                <h3 class="text-center text-2xl mb-2 mt-7 font-bold">LandForces</h3>
                <span class="w-20 mb-3 md:mb-0 h-1 block mx-auto  bg-red-400"></span>
                <div class="mb-36 shadow-md lg:p-20 rounded-md">
                    <div class="grid gap-2 grid-cols-1 md:grid-cols-3">

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Tanks</h3>
                            @money($country->landforces->tanks)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Armored Vehicles </h3>
                            @money($country->landforces->armored_vehicles)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Self-Propelled Artillery</h3>
                            @money($country->landforces->self_propelled_artillery)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Towed Artillery</h3>
                            @money($country->landforces->towed_artillery)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Rocket Projectors</h3>
                            @money($country->landforces->rocket_projectors)
                        </div>
                    </div>
                    <div id="landforces" class="w-full h-96"></div>
                </div>

                {{-- LandForces End Here --}}

                <h3 class="text-center text-2xl mb-2 mt-7 font-bold">Logistic</h3>
                <span class="w-20 mb-3 md:mb-0 h-1 block mx-auto  bg-red-400"></span>
                <div class="mb-36 shadow-md lg:p-20 rounded-md">
                    <div class="grid gap-2 grid-cols-1 md:grid-cols-3">

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Labor Force</h3>
                            @money($country->logistic->labor_force)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Merchant Marine Fleet </h3>
                            @money($country->logistic->marchant_marine_fleet)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Ports/Trade Terminals</h3>
                            @money($country->logistic->ports_trade_terminals)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Roadway Coverage</h3>
                            @money($country->logistic->roadway_coverage)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Railway Coverage</h3>
                            @money($country->logistic->railway_coverage)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Airports</h3>
                            @money($country->logistic->airports)
                        </div>
                    </div>
                    <div id="logistic" class="w-full h-96"></div>
                </div>

                {{-- Logistic End Here --}}

                <h3 class="text-center text-2xl mb-2 mt-7 font-bold">Man Power</h3>
                <span class="w-20 mb-3 md:mb-0 h-1 block mx-auto  bg-red-400"></span>
                <div class="mb-36 shadow-md lg:p-20 rounded-md">
                    <div class="grid  gap-2 grid-cols-1 md:grid-cols-3">
                        <a href="{{route('total_population')}}" class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Total Population</h3>
                            @money($country->manpower->total_population)
                        </a>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Available Manpower </h3>
                            @money($country->manpower->man_power)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Fit-For-Service</h3>
                            @money($country->manpower->fit_for_service)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Reaching Mil Age Annually</h3>
                            @money($country->manpower->reaching_mil_age_annually)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Tot Military Personnel (est.)</h3>
                            @money($country->manpower->tot_military_personnel)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Active Personnel</h3>
                            @money($country->manpower->active_personnel)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Reserve Personnel</h3>
                            @money($country->manpower->reserve_personnel)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Paramilitary</h3>
                            @money($country->manpower->paramilitary)
                        </div>
                    </div>
                    <div id="manpower" class="w-full h-96"></div>
                </div>

                {{-- Man power End Here --}}
                <h3 class="text-center text-2xl mb-2 mt-7 font-bold">Natural Resources</h3>
                <span class="w-20 mb-3 md:mb-0 h-1 block mx-auto  bg-red-400"></span>
                <div class="mb-36 shadow-md lg:p-20 rounded-md">
                    <div class="grid gap-2 grid-cols-1 md:grid-cols-3">

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Oil Production </h3>
                            @money($country->naturalResources->oil_production)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Oil Consumption</h3>
                            @money($country->naturalResources->oil_consumption)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Oil Proven Reserves</h3>
                            @money($country->naturalResources->oil_proven_reserves)
                        </div>
                    </div>
                    <div id="naturalResources" class="w-full h-96"></div>
                </div>


                {{-- Natural Resources End Here --}}

                <h3 class="text-center text-2xl mb-2 mt-7 font-bold">Naval Forces</h3>
                <span class="w-20 mb-3 md:mb-0 h-1 block mx-auto  bg-red-400"></span>
                <div class="mb-36 shadow-md lg:p-20 rounded-md">
                    <div class="grid  gap-2 grid-cols-1 md:grid-cols-3">
                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Total Assets</h3>
                            @money($country->navalForces->total_assets)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Aircraft Carriers </h3>
                            @money($country->navalForces->aircraft_carriers)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Helicopter Carriers</h3>
                            @money($country->navalForces->helicopter_carriers)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Destroyers</h3>
                            @money($country->navalForces->destroyers)
                        </div>

                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Frigates</h3>
                            @money($country->navalForces->frigates)
                        </div>
                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Corvettes</h3>
                            @money($country->navalForces->corvettes)
                        </div>
                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Submarines</h3>
                            @money($country->navalForces->submarines)
                        </div>
                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Patrol Vessels</h3>
                            @money($country->navalForces->patrol_vessels)
                        </div>
                        <div class="border rounded-md p-4 shadow-sm hover:shadow-md cursor-pointer">
                            <h3 class="text-xl mb-2 font-bold">Mine Warfare</h3>
                            @money($country->navalForces->mine_warfare)
                        </div>
                    </div>
                    <div id="navalForces" class="w-full h-96"></div>
                </div>


            </div>
            <div class="px-10">
                <h1 class="text-4xl mb-2 font-bold">Notes</h1>
                <span class="w-28 mb-9 h-1 inline-block bg-red-400"></span>
                <p class="text-gray-500"><b class="text-black">MANPOWER - </b>{{ $country->manpower->notes }}</p>
                <p class="text-gray-500 mt-5"><b class="text-black">NAVAL FORCES -
                    </b>{{ $country->navalForces->notes }}</p>
                <p class="text-gray-500 mt-5"><b class="text-black">AIRPOWER - </b>{{ $country->airPower->notes }}</p>
                <p class="text-gray-500 mt-5"><b class="text-black">LANDFORCES - </b>{{ $country->landforces->notes }}
                </p>
                <p class="text-gray-500 mt-5"><b class="text-black">NATURAL RESOURCES -
                    </b>{{ $country->naturalResources->notes }}</p>
                <p class="text-gray-500 mt-5"><b class="text-black">LOGISTICS - </b>{{ $country->logistic->notes }}
                </p>
                <p class="text-gray-500 mt-5"><b class="text-black">FINANCIALS -
                    </b>{{ $country->financials->notes }}
                </p>
                <p class="text-gray-500 mt-5"><b class="text-black">GEORGRAPHY -
                    </b>{{ $country->georgraphy->notes }}
                </p>
            </div>
        </div>
    </div>
</x-frontend.layout>
