@extends('layouts.adminPage')
@section('content')
<!-- Register new user -->
<div class="content-wrapper">
    <div
        class="flex flex-col max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-row gap-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-7 h-7 text-gray-500 dark:text-gray-400 align-center">
                <path
                    d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM18.75 7.5a.75.75 0 0 0-1.5 0v2.25H15a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H21a.75.75 0 0 0 0-1.5h-2.25V7.5Z" />
            </svg>
            <div class="flex flex-col">
                <a href="#">
                    <h5 class="inline-flex mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Add
                        new
                        user
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Create new user</p>
            </div>
        </div>
        <a href="{{ route('admin.showregister') }}"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Register
        </a>
    </div>
</div>

@endsection