@extends('layout.layout')

@section('content')
    <div class="flex flex-col justify-start items-start p-7">
        <div class="w-full flex justify-between mb-5 items-center h-20">
            <h1 class="text-4xl font-extrabold bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text text-center animate-bounce">Users Page</h1>
            @if (session('success'))
                <div class="flex items-center justify-between p-4 text-left font-semibold bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text animate-pulse text-gray-300 bg-gray-700 border border-gray-600 rounded-lg flash-message">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-sm font-medium">Permissions Successfully Updated</span>
                    </div>
                </div>
            @endif
        </div>

        <div class="w-full">
            <table class="min-w-full border border-gray-600 shadow-md text-white">
                <thead class="bg-gray-800">
                    <tr>
                        <th class="px-3 py-3 text-left font-semibold bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text animate-pulse text-gray-300">Username</th>
                        <th class="px-3 py-3 text-left font-semibold bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text animate-pulse text-gray-300">Email</th>
                        <th class="px-3 py-3 text-left font-semibold bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text animate-pulse text-gray-300">Manage Permissions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-600 bg-gray-900 ">
                    @foreach ($users as $user)
                        <tr class="hover:bg-gray-800 transition-all">
                            <td class="px-3 py-3 font-semibold text-gray-400">{{ $user->name }}</td>
                            <td class="px-3 py-3 text-gray-400">{{ $user->email }}</td>
                            <td class="px-3 py-3">
                                <form action="{{ route('update-permissions', $user->id) }}" method="POST"
                                    class="space-y-2 flex justify-between">
                                    @csrf
                                    <div class="mb-2">
                                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mt-1">
                                            @foreach ($permissions as $permission)
                                                <label
                                                    class="flex items-center space-x-2 bg-gray-800 p-2 rounded-md shadow-sm border border-gray-700">
                                                    <input type="checkbox" name="permissions[]"
                                                        value="{{ $permission->name }}"
                                                        class="form-checkbox text-blue-500 h-5 w-5"
                                                        @if ($user->hasPermissionTo($permission->name)) checked @endif>
                                                    <span class="text-gray-400">{{ $permission->name }}</span>
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="flex justify-center items-center h-100" style="margin-top: 0 !important;">
                                        <button type="submit"
                                            class="px-4 py-2 bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600 text-white font-medium py-2 rounded-lg transition duration-300 active:scale-95">
                                            Update Permissions
                                        </button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <style>
        .flash-message {
            animation: fadeOut 3s ease-in-out forwards;
            opacity: 1;
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }
            80% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                display: none;
            }
        }
    </style>
@endsection
