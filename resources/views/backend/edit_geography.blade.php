<x-dashboard-layout>
    {{-- form --}}
    <h3 class="text-center bg-white text-lg font-bold rounded-md shadow-sm py-2 mt-3">Geography</h3>
    <div class="grid w-full mt-3">
        @if (session('msg'))
            <x-alert>
                {{ session('msg') }}
            </x-alert>
        @endif
        <form action="{{ route('geography.update',$edit_geography->id) }}" method="POST">
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
                            <label for="square_land_area" class="block text-sm font-medium text-gray-700">Square Land Area</label>
                            <input required value="{{$edit_geography->square_land_area}}" type="number" name="square_land_area" id="square_land_area"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('square_land_area')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror

                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="coastline_coverage"
                                class="block text-sm font-medium text-gray-700">Coastline Coverage</label>
                            <input required value="{{$edit_geography->coastline_coverage}}" type="number" name="coastline_coverage" id="coastline_coverage"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('coastline_coverage')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>

                        <div class="col-span-6  sm:col-span-3">
                            <label for="shared_borders" class="block text-sm font-medium text-gray-700">Shared Borders</label>
                            <input required value="{{$edit_geography->shared_borders}}" type="number" name="shared_borders" id="shared_borders"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('shared_borders')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6  sm:col-span-3">
                            <label for="waterways_usable" class="block text-sm font-medium text-gray-700">Waterways Usable</label>
                            <input required value="{{$edit_geography->waterways_usable}}" type="number" name="waterways_usable" id="waterways_usable"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('waterways_usable')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6">
                            <label for="geography_note" class="block text-sm font-medium text-gray-700">Notes</label>
                            <textarea name="geography_note" id="geography_note"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                cols="30" rows="10">
                                {{$edit_geography->notes}}
                            </textarea>
                            @error('geography_note')
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
