<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Single room') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4 text-gray-900 dark:text-gray-100">Single room</h1>
                <p class="text-gray-700 dark:text-gray-300 mb-2">Room ID: {{$room->room_id}}</p>
                <p class="text-gray-700 dark:text-gray-300 mb-4">Room Name: {{$room->room_name}}</p>

                <div class="flex justify-between items-center">
                    <a href="/dashboard" class="text-blue-500 hover:underline">Back</a>

                    @auth
                        <a href="/dashboard/edit-rooms/{{$room->room_id}}" class="text-green-500 hover:underline">Edit</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

