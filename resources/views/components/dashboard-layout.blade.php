<div>
    <x-app-layout>

        <div class="grid grid-cols-12">
            <div class="md:col-start-1 col-end-13 col-start-1 absolute md:static hidden md:block w-full  md:col-end-4">
                <x-sidebar />
            </div>
            <div class="md:col-start-4 md:px-20 lg:px-60 col-start-1 col-end-13 md:col-end-13 border">


                {{$slot}}

            </div>
        </div>
    </x-app-layout>
</div>
