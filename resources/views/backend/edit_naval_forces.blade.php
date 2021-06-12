<x-dashboard-layout>
    {{-- form --}}
    <h3 class="text-center bg-white text-lg font-bold rounded-md shadow-sm py-2 mt-3">Naval Forces</h3>
    <div class="grid w-full mt-3">
        @if (session('msg'))
            <x-alert>
                {{ session('msg') }}
            </x-alert>
        @endif

        <form action="{{ route('naval_forces.update',$edit_naval_forces->id) }}" method="POST">
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


                        </div> --}}
                        <div class="col-span-6 sm:col-span-3">
                            <label for="total_assets" class="block text-sm font-medium text-gray-700">Total Assets</label>
                            <input required value="{{$edit_naval_forces->total_assets}}" type="number" name="total_assets" id="total_assets"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('total_assets')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror

                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="aircraft_carriers"
                                class="block text-sm font-medium text-gray-700">Aircraft Carriers</label>
                            <input required value="{{$edit_naval_forces->aircraft_carriers}}" type="number" name="aircraft_carriers" id="aircraft_carriers"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('aircraft_carriers')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>

                        <div class="col-span-6  sm:col-span-3">
                            <label for="helicopter_carriers" class="block text-sm font-medium text-gray-700">Helicopter Carriers</label>
                            <input required value="{{$edit_naval_forces->helicopter_carriers}}" type="number" name="helicopter_carriers" id="helicopter_carriers"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('helicopter_carriers')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6  sm:col-span-3">
                            <label for="destroyers" class="block text-sm font-medium text-gray-700">Destroyers</label>
                            <input required value="{{$edit_naval_forces->destroyers}}" type="number" name="destroyers" id="destroyers"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('destroyers')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6  sm:col-span-6">Frigates
                            <label for="frigates" class="block text-sm font-medium text-gray-700">frigates</label>
                            <input required value="{{$edit_naval_forces->frigates}}" type="number" name="frigates" id="frigates"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('frigates')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6  sm:col-span-3">
                            <label for="corvettes"
                                class="block text-sm font-medium text-gray-700">Corvettes</label>
                            <input required value="{{$edit_naval_forces->corvettes}}" type="number" name="corvettes" id="corvettes"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('corvettes')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>

                        <div class="col-span-6  sm:col-span-3">
                            <label for="submarines" class="block text-sm font-medium text-gray-700">Submarines</label>
                            <input required value="{{$edit_naval_forces->submarines}}" type="number" name="submarines" id="submarines"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('submarines')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6  sm:col-span-3">
                            <label for="patrol_vessels" class="block text-sm font-medium text-gray-700">Patrol Vessels</label>
                            <input required value="{{$edit_naval_forces->patrol_vessels}}" type="number" name="patrol_vessels" id="patrol_vessels"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('patrol_vessels')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6  sm:col-span-3">
                            <label for="mine_warfare" class="block text-sm font-medium text-gray-700">Mine Warfare</label>
                            <input required value="{{$edit_naval_forces->mine_warfare}}" type="number" name="mine_warfare" id="mine_warfare"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('mine_warfare')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>

                        <div class="col-span-6">
                            <label for="naval_forces_notes" class="block text-sm font-medium text-gray-700">Notes</label>
                            <textarea  name="naval_forces_notes" id="naval_forces_notes"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                cols="30" rows="10">
                            {{$edit_naval_forces->notes}}
                            </textarea>

                            @error('naval_forces_notes')
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
