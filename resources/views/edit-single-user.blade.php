<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Edit User') }}
      </h2>
    </x-slot>

    <div class="py-6">
      <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
          <h1 class="text-2xl font-bold mb-4 text-gray-900 dark:text-gray-100">Edit User</h1>
          <form method="POST" action="/dashboard/action-edit-user/{{ $user->id }}">
            @csrf
            @method('POST')
            <div class="mb-4">
              <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
              <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="mt-1 block w-full p-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-gray-300" required>
            </div>

            <div class="mb-4">
              <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
              <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="mt-1 block w-full p-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-gray-300" required>
            </div>

            <div class="flex justify-end">
              <a href="/dashboard/users/{{ $user->id }}" class="text-gray-500 hover:text-gray-700 dark:hover:text-gray-300 underline mr-4">Cancel</a>
              <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </x-app-layout>
