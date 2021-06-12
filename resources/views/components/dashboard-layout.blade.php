<div>
    <x-app-layout>

        <div class="grid grid-cols-12">
            <div class="md:col-start-1 w-96 border md:col-end-3 hidden xl:block col-end-13 col-start-1">
                <x-sidebar />
            </div>
            <div class="xl:col-start-3 px-10 lg:pl-36 lg:pr-10 col-start-1 col-end-13 xl:col-end-13">
                {{$slot}}
            </div>
        </div>
    </x-app-layout>
</div>
