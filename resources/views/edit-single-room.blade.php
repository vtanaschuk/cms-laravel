<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Room') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4 text-gray-900 dark:text-gray-100">Edit Room</h1>
                <form method="POST" action="/dashboard/action-edit-rooms/{{ $room->room_id }}">
                    @csrf
                    @method('POST')

                    <div class="mb-4">
                        <label for="room_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Room ID</label>
                        <input type="text" name="room_id" id="room_id" value="{{ $room->room_id }}" class="mt-1 block w-full p-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-gray-300" disabled>
                    </div>

                    <div class="mb-4">
                        <label for="room_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Room Name</label>
                        <input type="text" name="room_name" id="room_name" value="{{ $room->room_name }}" class="mt-1 block w-full p-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-gray-300" required>
                    </div>

                    <div class="flex justify-end">
                        <a href="/dashboard/rooms/{{  $room->room_id }}" class="text-gray-500 hover:text-gray-700 dark:hover:text-gray-300 underline mr-4">Cancel</a>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
