@extends('layouts.adminPage')
@section('content')
<div class="content-wrapper">
    <!-- Section header -->
    <div class="flex justify-between w-full bg-white dark:bg-gray-800 p-5">
        <h3 class="heading3">
            Users
        </h3>
        <a href="{{ route('admin.showregister') }}"
            class="ajax-link text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Register
        </a>
    </div>
    <!-- Section Content -->
    <div class="p-4">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                        data-client-id="{{ $client->id }}" data-modal-target="bottom-left-modal">
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
            <div id="bottom-left-modal" data-modal-placement="bottom-left" tabindex="-1"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                Edit Client Details
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="bottom-left-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <form id="edit-client-form" method="POST" action="" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <label for="modal-client-name" class="form-label">Full
                                        Name</label>
                                    <input type="text" id="modal-client-name" name="name" class="form-text-input">
                                </div>

                                <div class="mb-4">
                                    <label for="modal-client-email" class="form-label">Email</label>
                                    <input type="email" id="modal-client-email" name="email" class="form-text-input">
                                </div>

                                <div class="mb-4">
                                    <label for="modal-client-category" class="form-label">Category</label>
                                    <input type="text" id="modal-client-category" name="category"
                                        class="form-text-input">
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
</div>
<script>
$(document).ready(function() {
    $('tr[data-client-id]').on('click', function() {
        var clientId = $(this).data('client-id');
        console.log(clientId);
        // AJAX request to get client data
        $.ajax({
            url: '/admin/user/' + clientId + '/edit',
            type: 'GET',
            success: function(data) {
                // Update the form action URL with the client ID
                $('#edit-client-form').attr('action', '/admin/user/' + clientId);

                // Populate the modal with the client data
                $('#modal-client-name').val(data.name);
                $('#modal-client-email').val(data.email);
                $('#modal-client-category').val(data
                    .category); // Assuming you have this field
                $('#modal-client-price').val(data.price); // Assuming you have this field

                // Show the modal
                $('#bottom-left-modal').removeClass('hidden');
            },
            error: function() {
                alert('Failed to retrieve client data.');
            }
        });
    });

    // Hide modal when close button is clicked
    $('[data-modal-hide]').on('click', function() {
        $('#bottom-left-modal').addClass('hidden');
    });
});
</script>

@endsection