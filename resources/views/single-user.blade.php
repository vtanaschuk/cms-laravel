<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Single User') }}
      </h2>
    </x-slot>

    <div class="py-6">
      <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
          <h1 class="text-2xl font-bold mb-4 text-gray-900 dark:text-gray-100">User Details</h1>

          <ul>
            <li class="text-gray-700 dark:text-gray-300 mb-2">
              <strong>ID:</strong> {{ $user->id }}
            </li>
            <li class="text-gray-700 dark:text-gray-300 mb-2">
              <strong>Name:</strong> {{ $user->name }}
            </li>
            <li class="text-gray-700 dark:text-gray-300 mb-2">
              <strong>Email:</strong> {{ $user->email }}
            </li>
            <li class="text-gray-700 dark:text-gray-300 mb-2">
              <strong>Email Verified At:</strong> {{ $user->email_verified_at }}
            </li>
            <li class="text-gray-700 dark:text-gray-300 mb-2">
              <strong>Created At:</strong> {{ $user->created_at }}
            </li>
            <li class="text-gray-700 dark:text-gray-300 mb-2">
              <strong>Updated At:</strong> {{ $user->updated_at }}
            </li>
          </ul>

          <div class="flex justify-between items-center">
            <a href="/dashboard" class="text-blue-500 hover:underline">Back</a>

            @auth
            <a href="/dashboard/edit-user/{{ $user->id }}" class="text-green-500 hover:underline">Edit</a>
            @endauth
          </div>
        </div>
      </div>
    </div>
  </x-app-layout>
