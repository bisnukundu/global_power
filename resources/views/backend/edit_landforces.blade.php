<x-dashboard-layout>
    {{-- form --}}
    <h3 class="text-center bg-white text-lg font-bold rounded-md shadow-sm py-2 mt-3">Land Forces</h3>
    <div class="grid w-full mt-3">
        @if (session('msg'))
            <x-alert>
                {{ session('msg') }}
            </x-alert>
        @endif

        <form action="{{ route('landforces.update',$edit_landforces->id) }}" method="POST">
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
                            <label for="tanks" class="block text-sm font-medium text-gray-700">Tanks</label>
                            <input required value="{{$edit_landforces->tanks}}" type="number" name="tanks" id="tanks"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('tanks')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror

                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="armored_vehicles"
                                class="block text-sm font-medium text-gray-700">Armored Vehicles</label>
                            <input required value="{{$edit_landforces->armored_vehicles}}" type="number" name="armored_vehicles" id="armored_vehicles"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('armored_vehicles')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>

                        <div class="col-span-6  sm:col-span-3">
                            <label for="self_propelled_artillery" class="block text-sm font-medium text-gray-700">Self Propelled Artillery</label>
                            <input required value="{{$edit_landforces->self_propelled_artillery}}" type="number" name="self_propelled_artillery" id="self_propelled_artillery"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('self_propelled_artillery')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6  sm:col-span-3">
                            <label for="towed_artillery" class="block text-sm font-medium text-gray-700">Towed Artillery</label>
                            <input required value="{{$edit_landforces->towed_artillery}}" type="number" name="towed_artillery" id="towed_artillery"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('towed_artillery')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6  sm:col-span-6">
                            <label for="rocket_projectors" class="block text-sm font-medium text-gray-700">Rocket Projectors</label>
                            <input required value="{{$edit_landforces->rocket_projectors}}" type="number" name="rocket_projectors" id="rocket_projectors"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('rocket_projectors')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>


                        <div class="col-span-6">
                            <label for="landforce_note" class="block text-sm font-medium text-gray-700">Notes</label>
                            <textarea value="{{old('landforce_note')}}" name="landforce_note" id="landforce_note"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                cols="30" rows="10">
                                {{$edit_landforces->notes}}
                            </textarea>

                            @error('landforce_note')
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
