<div x-data="{mobileMenu:false}">
    {{-- Logo and humber menu icon --}}
    <div class="grid items-center mx-auto rounded-sm grid-cols-2 justify-between shadow-lg px-8 py-5">
        <div class="font-bold">LOGO</div>
        <div class="self-end text-right md:hidden">
            <button @click="mobileMenu = ! mobileMenu" class="font-bold border inline-block shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        {{-- For desktop menu --}}
        <div class="hidden md:block">
            <div class="grid  text-center gap-x-1 grid-cols-6 justify-center align-middle content-center items-center">
                <a class="border-r p-1 inline-block text-sm font-bold hover:shadow-lg hover:bg-red-400 hover:text-white text-gray-600  rounded-lg transition-all cursor-pointer"
                    href="/">Home</a>
                <a class="border-r p-1 inline-block text-sm font-bold hover:shadow-lg hover:bg-red-400 hover:text-white text-gray-600  rounded-lg transition-all cursor-pointer"
                    href="{{route('countrys.index')}}">Country List</a>
                <a class="border-r p-1 inline-block text-sm font-bold hover:shadow-lg hover:bg-red-400 hover:text-white text-gray-600  rounded-lg transition-all cursor-pointer"
                    href="">About</a>
                <a class="border-r p-1 inline-block text-sm font-bold hover:shadow-lg hover:bg-red-400 hover:text-white text-gray-600  rounded-lg transition-all cursor-pointer"
                    href="">Reviews</a>
                <a class="border-r p-1 inline-block text-sm font-bold hover:shadow-lg hover:bg-red-400 hover:text-white text-gray-600  rounded-lg transition-all cursor-pointer"
                    href="">Contact
                    Us</a>
            </div>
        </div>

    </div>

    {{-- Mobile menu Show/Hidden --}}
    <div x-show="mobileMenu" class="md:hidden grid grid-cols-1 gap-y-1 px-6 py-5 bg-white shadow-lg rounded-md">
        <a class="border-b hover:bg-red-400 hover:text-white text-sm font-bold hover:shadow-lg text-gray-600 p-2 rounded-lg transition-all cursor-pointer"
            href="/">Home</a>
        <a class="border-b hover:bg-red-400 hover:text-white text-sm font-bold hover:shadow-lg text-gray-600 p-2 rounded-lg transition-all cursor-pointer"
            href="{{route('countrys.index')}}">Country List</a>

        <a class="border-b hover:bg-red-400 hover:text-white text-sm font-bold hover:shadow-lg text-gray-600 p-2 rounded-lg transition-all cursor-pointer"
            href="">About</a>
        <a class="border-b hover:bg-red-400 hover:text-white text-sm font-bold hover:shadow-lg text-gray-600 p-2 rounded-lg transition-all cursor-pointer"
            href="">Reviews</a>
        <a class=" hover:bg-red-400 hover:text-white text-sm font-bold hover:shadow-lg text-gray-600 p-2 rounded-lg transition-all cursor-pointer"
            href="">Contact
            Us</a>
    </div>
</div>
