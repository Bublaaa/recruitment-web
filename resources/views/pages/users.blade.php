@extends('layouts.adminPage')
@section('content')
<div class="content-wrapper">
    <!-- Section Content -->
    <div class="p-4">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg rounded-xl">
            <!-- Users table -->
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <caption class="bg-white dark:bg-gray-800">
                    <div class="flex sm:justify-between gap-5 w-full bg-white dark:bg-gray-800 p-5">
                        <h3 class="heading3">
                            Users
                        </h3>
                        <a href="{{ route('admin.showregister') }}"
                            class="ajax-link text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Register
                        </a>
                    </div>
                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Full Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 cursor-pointer"
                        data-client-id="{{ $client->id }}" data-modal-target="edit-client-modal">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $client->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $client->email }}
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Edit Modal -->
            <div id="edit-client-modal" tabindex="-1"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="fixed inset-0 bg-gray-900 bg-opacity-50"></div>
                <div class="fixed right-0 w-full max-w-2xl max-h-full">
                    <!-- Modal body -->
                    <div class="p-2 md:p-4 space-y-4">
                        <form id="edit-client-form" method="POST" action="" class="form">
                            <div class="flex items-center justify-between pb-4 md:pb-5 border-b  dark:border-gray-600">
                                <h4 class="heading4">
                                    Edit Client Details
                                </h4>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="edit-client-modal"
                                    onClick="$('#edit-client-modal').addClass('hidden');">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="modal-client-name" class="form-label">Full
                                    Name</label>
                                <input type="text" id="modal-client-name" name="name" autocomplete="name"
                                    class="form-text-input">
                            </div>

                            <div class="mb-4">
                                <label for="modal-client-email" class="form-label">Email</label>
                                <input type="email" id="modal-client-email" name="email" autocomplete="email"
                                    class="form-text-input">
                            </div>

                            <div class="mb-4">
                                <label for="modal-client-category" class="form-label">Category</label>
                                <input type="text" id="modal-client-category" name="category" class="form-text-input">
                            </div>

                            <div class="mb-4">
                                <label for="modal-client-price" class="form-label">Price</label>
                                <input type="text" id="modal-client-price" name="price" class="form-text-input">
                            </div>

                            <div class="flex justify-end">
                                <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).on('click', '[data-modal-hide]', function() {
    const modalId = $(this).data('modal-hide');
    $('#' + modalId).addClass('hidden');
});
</script>
@endsection