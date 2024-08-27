@extends('layouts.clientPage')
@section('content')
<div class="content-wrapper p-4">
    <!-- Section Content -->
    <div class="flex flex-row gap-5 w-full items-center align-center">
        <div class="form-container">
            <div class="form">
                @if($clientData->profile_url)
                <img id="avatarPreview" class="w-full h-full object-cover" src="https://via.placeholder.com/150"
                    alt="Avatar">
                @endif
            </div>
        </div>
        <div class="form-container">
            <form method="POST" action="{{ route('login') }}" class="form">
                @csrf
                <!-- Header -->
                <div class=" flex flex-col">
                    <h3 class="heading3">
                        Personal data
                    </h3>
                </div>
                <div class="flex flex-row gap-3">
                    <div class="flex flex-col items-center">
                        <!-- Avatar Preview -->
                        <div class="relative w-32 h-32 rounded-full overflow-hidden bg-gray-100">
                            @if($clientData->profile_url)
                            <img id="avatarPreview" class="w-full h-full object-cover"
                                src="https://via.placeholder.com/150" alt="Avatar">
                            @endif
                            <label for="avatarUpload"
                                class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="currentcolor"
                                    viewBox="0 0 24 24" stroke="none" stroke-width="1">
                                    <path fill-rule="evenodd"
                                        d="M5.625 1.5H9a3.75 3.75 0 0 1 3.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 0 1 3.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 0 1-1.875-1.875V3.375c0-1.036.84-1.875 1.875-1.875Zm6.905 9.97a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 1 0 1.06 1.06l1.72-1.72V18a.75.75 0 0 0 1.5 0v-4.19l1.72 1.72a.75.75 0 1 0 1.06-1.06l-3-3Z"
                                        clip-rule="evenodd" />
                                    <path
                                        d="M14.25 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 16.5 7.5h-1.875a.375.375 0 0 1-.375-.375V5.25Z" />

                                </svg>
                            </label>
                        </div>
                        <!-- Avatar Upload Input -->
                        <input type="file" id="avatarUpload" name="avatar" class="hidden" accept="image/*">
                    </div>
                    <div class="flex flex-col gap-3">
                        <!-- Full name -->
                        <div class="">
                            <label for="name" class="form-label">{{ __('Full Name') }}</label>
                            <input id="name" type="text" name="name" value="{{ $clientData->name }}" required
                                autocomplete="name" autofocus
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name') border-red-500 @enderror">
                            @error('name')
                            <span class="text-red-500 text-sm mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <!-- Email -->
                        <div class="">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input id="email" type="email" name="email" value="{{ $clientData->email }}" required
                                autocomplete="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('email') border-red-500 @enderror">
                            @error('email')
                            <span class="text-red-500 text-sm mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        @if (Route::has('password.request'))
                        <div class="mt-4 text-sm">
                            <a class="text-blue-600 hover:underline dark:text-blue-400"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                        @endif
                        <div class="flex justify-end">
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                {{ __('Sign In') }}
                            </button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection