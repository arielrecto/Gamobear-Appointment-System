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
            <h1 class="text-center text-xl font-bold"> Appointments</h1>
        </div>
        <div class="w-full flex flex-row-reverse p-2">
            <a href="{{route('admin.services.create')}}">
                <button class="px-4 py-2 bg-blue-400 rounded-lg">Add Service</button>
            </a>

        </div>

        @if(Session::has('rejected'))
        <div class="w-full p-5 bg-red-500">
            <h1 class="text-xl text-center">{{Session::get('rejected')}}</h1>
        </div>
        @endif
        @if(Session::has('approved'))
        <div class="w-full p-5 bg-green-500">
            <h1 class="text-xl text-center">{{Session::get('approved')}}</h1>
        </div>
        @endif
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                           user name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            time
                        </th>
                        <th scope="col" class="px-6 py-3">
                          schedule date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Services
                          </th>
                          <th scope="col" class="px-6 py-3">
                           type
                          </th>
                        <th scope="col" class="px-6 py-3">
                            action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($appointments as $appointment)
                    <tr class="bg-white border-b ">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{$appointment->user->name}}
                        </th>
                        <td class="px-6 py-4">
                           {{$appointment->time}}
                        </td>
                        <td class="px-6 py-4">
                           {{$appointment->date}}
                        </td>
                        <td class="px-6 py-4">
                            {{$appointment->services()->first()->name}}
                         </td>
                         <td class="px-6 py-4">
                            {{$appointment->type}}
                         </td>
                        <td class="px-6 py-4">
                           <div class="flex gap-2">

                            <form action="{{route('admin.appointment.approved', ['id' => $appointment->id])}}" method="post">
                                @csrf
                                <button>Approve</button>
                            </form>


                                <form action="{{route('admin.appointment.destroy', ['appointment' => $appointment->id])}}" method="post">
                                    @csrf
                                    @method('delete')
                                <button>Reject</button>
                            </form>
                           </div>
                        </td>
                    </tr>
                    @empty
                        <tr class="bg-white border-b ">
                            <td colspan="6">
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
