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
            <div class="w-full flex justify-center">
                <div class="w-5/6 bg-gray-200 drop-shadow-lg ">
                    <h1 class="w-full text-center text-xl font-bold p-2">Create Service Form</h1>
                    @if(Session::has('message'))

                    <div class="bg-blue-300 p-4 rounded-lg w-full">
                        <h1 class="text-center">{{Session::get('message')}}</h1>
                    </div>
                    @endif
                    <form action="{{route('admin.services.store')}}" method="post" class="p-2">
                        @csrf
                        <div class="mb-6">
                            <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                            <input type="text" id="default-input" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                             ">
                        </div>
                        <div class="mb-6">
                            <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 ">description</label>
                            <input type="text" id="default-input" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                             ">
                        </div>
                        <div class="mb-6">
                            <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 ">price</label>
                            <input type="text" id="default-input" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                             ">
                        </div>
                        <div class="flex flex-row-reverse p-2">
                            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
