<x-dashboard-layout>
    {{-- form --}}
    <h3 class="text-center bg-white text-lg font-bold rounded-md shadow-sm py-2 mt-3">Logistic</h3>
    <div class="grid w-full mt-3">
        @if (session('msg'))
            <x-alert>
                {{ session('msg') }}
            </x-alert>
        @endif

        <form action="{{ route('logistic.store') }}" method="POST">
            @csrf
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-6">
                            <label for="country_id" class="block text-sm font-medium text-gray-700">Country</label>
                            <select
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                name="country_id" id="country_id">
                                <option label="Select Country"></option>
                                @foreach ($countrys as $country)
                                    <option value="{{ $country->id }}">{{ $country->country_name }} <img
                                            class="h-10 w-10"
                                            src="https://www.countryflags.io/{{ $country->country_code }}/flat/64.png"
                                            alt=""></option>
                                @endforeach
                            </select>
                            @error('country_id')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror


                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="labor_force" class="block text-sm font-medium text-gray-700">Labor Force</label>
                            <input required value="{{old('labor_force')}}" type="number" name="labor_force" id="labor_force"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('labor_force')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror

                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="marchant_marine_fleet"
                                class="block text-sm font-medium text-gray-700">Marchant Marine Fleet</label>
                            <input required value="{{old('marchant_marine_fleet')}}" type="number" name="marchant_marine_fleet" id="marchant_marine_fleet"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('marchant_marine_fleet')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>

                        <div class="col-span-6  sm:col-span-3">
                            <label for="ports_trade_terminals" class="block text-sm font-medium text-gray-700">Ports Trade Terminals</label>
                            <input required value="{{old('ports_trade_terminals')}}" type="number" name="ports_trade_terminals" id="ports_trade_terminals"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('ports_trade_terminals')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6  sm:col-span-3">
                            <label for="road_coverage" class="block text-sm font-medium text-gray-700">Road Coverage</label>
                            <input required value="{{old('road_coverage')}}" type="number" name="road_coverage" id="road_coverage"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('road_coverage')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6  sm:col-span-3">
                            <label for="railway_coverage" class="block text-sm font-medium text-gray-700">Railway Coverage</label>
                            <input required value="{{old('railway_coverage')}}" type="number" name="railway_coverage" id="railway_coverage"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('railway_coverage')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6  sm:col-span-3">
                            <label for="airports"
                                class="block text-sm font-medium text-gray-700">AirPorts</label>
                            <input required value="{{old('airports')}}" type="number" name="airports" id="airports"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('airports')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>

                        <div class="col-span-6">
                            <label for="logistic_note" class="block text-sm font-medium text-gray-700">Notes</label>
                            <textarea value="{{old('logistic_note')}}" name="logistic_note" id="logistic_note"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                cols="30" rows="10"></textarea>

                            @error('logistic_note')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror

                        </div>

                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save
                    </button>
                </div>
            </div>
        </form>

    </div>
</x-dashboard-layout>
