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
        <div class="py-12 flex-grow px-5">

            <div class="w-full p-2">
                <h1 class="w-full text-xl font-bold text-center"> Services</h1>
            </div>
            <div class="w-full flex flex-row-reverse p-2">
                <a href="{{route('admin.services.create')}}">
                    <button class="px-4 py-2 bg-blue-400 rounded-lg">Add Service</button>
                </a>

            </div>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($services as $service)
                        <tr class="bg-white border-b ">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{$service->name}}
                            </th>
                            <td class="px-6 py-4">
                               {{$service->description}}
                            </td>
                            <td class="px-6 py-4">
                               {{$service->price}}
                            </td>
                            <td class="px-6 py-4">
                               <div class="flex gap-2">
                                    <button>Edit</button>
                                    <button>Delete</button>
                               </div>
                            </td>
                        </tr>
                        @empty
                            <tr class="bg-white border-b ">
                                <td colspan="5">
                                    <div class="w-full p-2">
                                        <h1 class="text-center font-bold text-xl">No Item</h1>
                                    </div>
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>

        </div>
    </div>

</x-app-layout>
