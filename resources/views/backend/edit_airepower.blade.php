<x-dashboard-layout>
    {{-- form --}}
    <h3 class="text-center bg-white text-lg font-bold rounded-md shadow-sm py-2 mt-3">AirPower</h3>
 
    <div class="grid w-full mt-3">
        @if (session('msg'))
            <x-alert>
                {{ session('msg') }}
            </x-alert>
        @endif

        <form action="{{ route('airpower.update',$airepower_edit->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">

                        {{-- <div class="col-span-6 sm:col-span-6">
                            <label for="country_id" class="block text-sm font-medium text-gray-700">Country</label>
                            <select
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                name="country_id" id="country_id">
                                <option label="Select Country"></option>
                                @foreach ($countrys as $country)
                                    <option value="{{ $country->id }}">
                                        {{ $country->country_name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('country_id')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div> --}}

                        <div class="col-span-6 sm:col-span-3">
                            <label for="aircraft_strength" class="block text-sm font-medium text-gray-700">Total
                                Aircraft Strength</label>
                            <input required value="{{ $airepower_edit->total_aircraft_strength }}" type="number"
                                name="aircraft_strength" id="aircraft_strength"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('aircraft_strength')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror

                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="fighters"
                                class="block text-sm font-medium text-gray-700">Fighters/Interceptors</label>
                            <input required value="{{ $airepower_edit->fighters_interceptors }}" type="number" name="fighters" id="fighters"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('fighters')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>

                        <div class="col-span-6  sm:col-span-3">
                            <label for="dedicated_attack" class="block text-sm font-medium text-gray-700">Dedicated
                                Attack</label>
                            <input required value="{{ $airepower_edit->dedicated_attack }}" type="number" name="dedicated_attack"
                                id="dedicated_attack"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('dedicated_attack')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6  sm:col-span-3">
                            <label for="transports" class="block text-sm font-medium text-gray-700">Transports</label>
                            <input required value="{{ $airepower_edit->transports }}" type="number" name="transports"
                                id="transports"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('transports')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6  sm:col-span-6">
                            <label for="trainers" class="block text-sm font-medium text-gray-700">Trainers</label>
                            <input required value="{{ $airepower_edit->trainers }}" type="number" name="trainers" id="trainers"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('trainers')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6  sm:col-span-3">
                            <label for="special_mission"
                                class="block text-sm font-medium text-gray-700">Special-Mission</label>
                            <input required value="{{ $airepower_edit->special_mission }}" type="number" name="special_mission"
                                id="special_mission"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('special_mission')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>

                        <div class="col-span-6  sm:col-span-3">
                            <label for="tanker_fleet" class="block text-sm font-medium text-gray-700">Tanker
                                Fleet</label>
                            <input required value="{{ $airepower_edit->tanker_fleet }}" type="number" name="tanker_fleet"
                                id="tanker_fleet"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('tanker_fleet')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6  sm:col-span-3">
                            <label for="helicopter" class="block text-sm font-medium text-gray-700">Helicopters</label>
                            <input required value="{{ $airepower_edit->helicopters}}" type="number" name="helicopter"
                                id="helicopter"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('helicopter')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6  sm:col-span-3">
                            <label for="attack_helicopter" class="block text-sm font-medium text-gray-700">Attack
                                Helicopters</label>
                            <input required value="{{ $airepower_edit->attack_helicopters }}" type="number"
                                name="attack_helicopter" id="attack_helicopter"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('attack_helicopter')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>

                        <div class="col-span-6">
                            <label for="airpower_notes" class="block text-sm font-medium text-gray-700">Notes</label>
                            <textarea  name="airpower_notes" id="airpower_notes"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                cols="30" rows="10">
                                {{ $airepower_edit->notes }}
                            </textarea>

                            @error('airpower_notes')
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
                        Update
                    </button>
                </div>
            </div>
        </form>

    </div>
</x-dashboard-layout>
