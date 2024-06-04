<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <ul class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @foreach($users as $user)
                    <li class="border-b border-gray-200 dark:border-gray-700">
                        <a href="./dashboard/user/{{$user->id}}" class="block p-4 hover:bg-gray-100 dark:hover:bg-gray-900">
                            <h2>{{ $user->name }}</h2>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <ul class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <li class="border-b border-gray-200 dark:border-gray-700">
                    <h2 class="block p-4 font-semibold text-xl text-gray-800 leading-tight">Rooms</h2>
               </li>
                @foreach($rooms as $room)
                    <li class="border-b border-gray-200 dark:border-gray-700">
                        <a href="./dashboard/rooms/{{$room->room_id}}" class="block p-4 hover:bg-gray-100 dark:hover:bg-gray-900">
                            <h2>{{ $room->room_name }}</h2>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>
