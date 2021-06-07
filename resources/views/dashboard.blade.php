<x-dashboard-layout>
    {{-- form --}}
    <div class="grid w-full mt-3">
        @if (session('msg'))
            <x-alert>
                {{ session('msg') }}
            </x-alert>
        @endif

        <form action="{{ route('country.store') }}" method="POST">
            @csrf
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="country_name" class="block text-sm font-medium text-gray-700">Country
                                name</label>
                            <input required value="{{ old('country_name') }}" type="text" name="country_name"
                                id="country_name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('country_name')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="country_code" class="block text-sm font-medium text-gray-700">Country
                                Code</label>
                            <input required value="{{ old('country_code') }}" type="text" name="country_code"
                                id="country_code"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('country_code')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>

                        <div class="col-span-6  sm:col-span-6">
                            <label for="country_title" class="block text-sm font-medium text-gray-700">Country
                                Title</label>
                            <input required value="{{ old('country_title') }}" type="text" name="country_title"
                                id="country_title"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('country_title')
                                <x-error-show>
                                    {{ $message }}
                                </x-error-show>
                            @enderror
                        </div>



                        <div class="col-span-6">
                            <label for="country_desc" class="block text-sm font-medium text-gray-700">Country
                                Description</label>
                            <textarea required value="{{ old('country_desc') }}" name="country_desc" id="country_desc"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                cols="30" rows="10"></textarea>
                            @error('country_desc')
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


    {{-- table --}}
    <div class="flex flex-col mt-11">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 mb-3">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Country Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Country Code
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Country Title
                                </th>
                                {{-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Country Description
                              </th> --}}
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">

                            @forelse ($country as $count)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <a href="{{ route('country_details', $count->id) }}">
                                                    <x-country-flag>
                                                        {{ $count->country_code }}
                                                    </x-country-flag>
                                                </a>
                                            </div>
                                            <div class="ml-4">
                                                <div class=" text-lg font-medium text-gray-900">
                                                    {{ $count->country_name }}
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    {{ $count->created_at->diffForHumans() }}</div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                                        {{ $count->country_code }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $count->country_title }}</div>
                                    </td>

                                    <form action="{{ route('country.destroy', $count->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <button type="submit"
                                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Delete</a>
                                        </td>
                                    </form>

                                </tr>
                                @empty
                                <td colspan="4">
                                    <h3 class="text-center text-2xl font-bold text-gray-500">Country Not Found</h3>
                                </td>
                            @endforelse
                            <!-- More people... -->
                        </tbody>
                    </table>
                    {{ $country->links() }}
                </div>
            </div>
        </div>
    </div>

</x-dashboard-layout>
