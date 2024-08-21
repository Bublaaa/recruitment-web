@extends('layouts.adminPage')

@section('content')
<div class="flex justify-center items-center max-w-sm mx-auto">
    <form method="POST" action="{{ route('admin.register') }}"
        class="w-full bg-white p-6 rounded-lg shadow-md dark:bg-gray-800">
        @csrf
        <div class="mb-5">
            <label for="name"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Name') }}</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name') border-red-500 @enderror">
            @error('name')
            <span class="text-red-500 text-sm mt-2" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-5">
            <label for="email"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Email Address') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('email') border-red-500 @enderror">
            @error('email')
            <span class="text-red-500 text-sm mt-2" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-5">
            <label for="role"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Role') }}</label>
            <select id="role" name="role" required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="admin">{{ __('Admin') }}</option>
                <option value="peserta">{{ __('Peserta') }}</option>
            </select>
            @error('role')
            <span class="text-red-500 text-sm mt-2" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-5">
            <label for="password"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="new-password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('password') border-red-500 @enderror">
            @error('password')
            <span class="text-red-500 text-sm mt-2" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-5">
            <label for="password-confirm"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" name="password_confirmation" required
                autocomplete="new-password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</div>
@endsection