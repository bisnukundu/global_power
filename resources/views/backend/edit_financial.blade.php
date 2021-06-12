<x-dashboard-layout>
    {{-- form --}}
    <h3 class="text-center bg-white text-lg font-bold rounded-md shadow-sm py-2 mt-3">Financials</h3>
    <div class="grid w-full mt-3">
        @if (session('msg'))
            <x-alert>
                {{ session('msg') }}
            </x-alert>
        @endif
{{-- {{$financials_edit}} --}}
        <form action="{{ route('financial.update',$financials_edit->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">

                        <div class="col-span-6 sm:col-span-3">
                            <label for="defense_budget" class="block text-sm font-medium text-gray-700">Defense
                                Budget</label>
                            <input value="{{$financials_edit->defense_budget}}" type="number" name="defense_budget" id="defense_budget"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('defense_budget')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror

                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="external_debt" class="block text-sm font-medium text-gray-700">External
                                Debt</label>
                            <input value="{{$financials_edit->external_debt}}" required type="number" name="external_debt" id="external_debt"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('external_debt')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>

                        <div class="col-span-6  sm:col-span-3">
                            <label for="foreign_exchange_gold" class="block text-sm font-medium text-gray-700">Foreign
                                Exchange Gold</label>
                            <input value="{{$financials_edit->foreign_exchange_gold}}" required type="number" name="foreign_exchange_gold" id="foreign_exchange_gold"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('foreign_exchange_gold')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>
                        <div class="col-span-6  sm:col-span-3">
                            <label for="purchaing_power_partiy"
                                class="block text-sm font-medium text-gray-700">Purchasing Power Parity</label>
                            <input value="{{$financials_edit->purchasing_power_parity}}" required type="number" name="purchaing_power_partiy" id="purchaing_power_partiy"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @error('purchaing_power_partiy')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>


                        <div class="col-span-6">
                            <label for="financial_notes" class="block text-sm font-medium text-gray-700">Notes</label>
                            <textarea value="{{old('financial_notes')}}" required name="financial_notes" id="financial_notes"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                cols="30" rows="10">
                                {{$financials_edit->notes}}
                            </textarea>

                            @error('financial_notes')
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
