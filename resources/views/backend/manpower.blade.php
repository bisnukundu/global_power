<x-dashboard-layout>
    {{-- form --}}
    <h3 class="text-center bg-white text-lg font-bold rounded-md shadow-sm py-2 mt-3">Man Power</h3>
    <div class="grid w-full mt-3">
        @if (session('msg'))
            <x-alert>
                {{ session('msg') }}
            </x-alert>
        @endif

        <form action="{{ route('manpower.store') }}" method="POST">
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
                            <label for="total_popolation" class="block text-sm font-medium text-gray-700">Total Population</label>
                            <input required value="{{old('total_popolation')}}" type="number" name="total_popolation" id="total_popolation"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('total_popolation')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror

                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="man_power"
                                class="block text-sm font-medium text-gray-700">Man Power</label>
                            <input required value="{{old('man_power')}}" type="number" name="man_power" id="man_power"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('man_power')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>

                        <div class="col-span-6  sm:col-span-3">
                            <label for="fit_for_service" class="block text-sm font-medium text-gray-700">Fit For Service</label>
                            <input required value="{{old('fit_for_service')}}" type="number" name="fit_for_service" id="fit_for_service"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('fit_for_service')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6  sm:col-span-3">
                            <label for="reaching_mil_annually" class="block text-sm font-medium text-gray-700">Reaching Mil Age Annually</label>
                            <input required value="{{old('reaching_mil_annually')}}" type="number" name="reaching_mil_annually" id="reaching_mil_annually"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('reaching_mil_annually')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6  sm:col-span-6">
                            <label for="tot_military_personnel" class="block text-sm font-medium text-gray-700">Tot Military Personnel</label>
                            <input required value="{{old('tot_military_personnel')}}" type="number" name="tot_military_personnel" id="tot_military_personnel"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('tot_military_personnel')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6  sm:col-span-3">
                            <label for="active_personnel"
                                class="block text-sm font-medium text-gray-700">Active Personnel</label>
                            <input required value="{{old('active_personnel')}}" type="number" name="active_personnel" id="active_personnel"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('active_personnel')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>

                        <div class="col-span-6  sm:col-span-3">
                            <label for="reserve_personnel" class="block text-sm font-medium text-gray-700">Reserve Personnel
                                Fleet</label>
                            <input required value="{{old('reserve_personnel')}}" type="number" name="reserve_personnel" id="reserve_personnel"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('reserve_personnel')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6  sm:col-span-6">
                            <label for="paramilitary" class="block text-sm font-medium text-gray-700">Paramilitary</label>
                            <input required value="{{old('paramilitary')}}" type="number" name="paramilitary" id="paramilitary"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('paramilitary')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>


                        <div class="col-span-6">
                            <label for="manpower_notes" class="block text-sm font-medium text-gray-700">Notes</label>
                            <textarea value="{{old('manpower_notes')}}" name="manpower_notes" id="manpower_notes"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                cols="30" rows="10"></textarea>

                            @error('manpower_notes')
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
