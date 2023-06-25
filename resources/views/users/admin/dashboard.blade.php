<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex gap-2">
        <div>
            <x-admin-siderbar></x-admin-siderbar>
      </div>
        <div class="py-12 flex-grow">
            <div class="flex flex-wrap">
                <div>
                    admin dashboard
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
