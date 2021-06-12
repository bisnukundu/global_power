<div class="bg-red-400 h-full fixed w-96 left-0 top-0 shadow-xl pl-3 rounded-sm">
    <div class="flex space-x-3 border-b mb-2 items-center
 w-full font-bold mt-2 text-base t-bold text-white py-3  px-3 rounded-3xl
        rounded-r-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z"
                clip-rule="evenodd" />
        </svg>
       <a href="">
        Dashboard
       </a>
    </div>

    <div class="flex space-x-3 items-center hover:text-red-400
 @if (\Request::is('dashboard')) text-red-400
 bg-white @endif w-full font-bold mt-2 text-base t-bold text-white py-3 hover:bg-white px-3 rounded-3xl
        rounded-r-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z"
                clip-rule="evenodd" />
        </svg>
        <a href="{{ route('dashboard') }}">
            Country
        </a>
    </div>

    <div class="
@if (\Request::is('airpower')) text-red-400
bg-white @endif flex space-x-3 items-center hover:bg-white hover:text-red-400 w-full font-bold mt-2
        text-base t-bold text-white py-3 transition-all px-3 rounded-3xl rounded-r-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path
                d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
        </svg>
        <a href="{{ route('airpower.index') }}">
            Air Power
        </a>
    </div>

    <div class="
    @if (\Request::is('financial')) text-red-400
bg-white @endif flex space-x-3 items-center hover:bg-white hover:text-red-400 w-full font-bold mt-2
        text-base t-bold text-white py-3 transition-all px-3 rounded-3xl rounded-r-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path
                d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
            <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                clip-rule="evenodd" />
        </svg>
        <a href="{{ route('financial.index') }}">
            Financials
        </a>
    </div>

    <div class="
    @if (\Request::is('geography')) text-red-400
bg-white @endif flex space-x-3 items-center hover:bg-white hover:text-red-400 w-full font-bold mt-2
        text-base t-bold text-white py-3 transition-all px-3 rounded-3xl rounded-r-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                clip-rule="evenodd" />
        </svg>
        <a href="{{ route('geography.index') }}">
            Geography
        </a>
    </div>

    <div class="
    @if (\Request::is('landforces')) text-red-400
bg-white @endif flex space-x-3 items-center hover:bg-white hover:text-red-400 w-full font-bold mt-2
        text-base t-bold text-white py-3 transition-all px-3 rounded-3xl rounded-r-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M12 1.586l-4 4v12.828l4-4V1.586zM3.707 3.293A1 1 0 002 4v10a1 1 0 00.293.707L6 18.414V5.586L3.707 3.293zM17.707 5.293L14 1.586v12.828l2.293 2.293A1 1 0 0018 16V6a1 1 0 00-.293-.707z"
                clip-rule="evenodd" />
        </svg>
        <a href="{{ route('landforces.index') }}">
            Land Forces
        </a>
    </div>

    <div class="
    @if (\Request::is('logistic')) text-red-400
bg-white @endif flex space-x-3 items-center hover:bg-white hover:text-red-400 w-full font-bold mt-2
        text-base t-bold text-white py-3 transition-all px-3 rounded-3xl rounded-r-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
            <path
                d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z" />
        </svg>
        <a href="{{ route('logistic.index') }}">
            Logistic
        </a>
    </div>

    <div class="
    @if (\Request::is('manpower')) text-red-400
        bg-white @endif flex space-x-3 items-center hover:bg-white hover:text-red-400 w-full font-bold mt-2
        text-base t-bold text-white py-3 transition-all px-3 rounded-3xl rounded-r-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
          </svg>
        <a href="{{ route('manpower.index') }}">
            ManPower
        </a>
    </div>

    <div class="
    @if (\Request::is('naturl_resource')) text-red-400
        bg-white @endif flex space-x-3 items-center hover:bg-white hover:text-red-400 w-full font-bold mt-2
        text-base t-bold text-white py-3 transition-all px-3 rounded-3xl rounded-r-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
          </svg>
        <a href="{{ route('naturl_resource.index') }}">
            Natural Resources
        </a>
    </div>

    <div class="
    @if (\Request::is('naval_forces')) text-red-400
        bg-white @endif flex space-x-3 items-center hover:bg-white hover:text-red-400 w-full font-bold mt-2
        text-base t-bold text-white py-3 transition-all px-3 rounded-3xl rounded-r-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path
                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
        </svg>
        <a href="{{ route('naval_forces.index') }}">
           Naval Forces
        </a>
    </div>


    <div class="
    @if (\Request::is('profile.show')) text-red-400
        bg-white @endif flex space-x-3 items-center hover:bg-white hover:text-red-400 w-full font-bold mt-2
        text-base t-bold text-white py-3 transition-all px-3 rounded-3xl rounded-r-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
          </svg>
        <a href="{{ route('profile.show') }}">
           Profile
        </a>
    </div>


    <div class="
   flex space-x-3  items-center hover:bg-white hover:text-red-400 w-full font-bold mt-2
        text-base t-bold text-white py-3 transition-all px-3 rounded-3xl rounded-r-none">

        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
          </svg>
        <form class="p-0 m-0" method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">
                Logout
            </button>
        </form>

    </div>

</div>
