<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-white dark:bg-gray-700">
    <div class="flex flex-col">
        @include('./components/navBar')
        <div class="flex flex-row">
            @include('./components/sideBar')
            <!-- Content -->
            <main id="main-content" class="md:ml-64 mt-20 w-full">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script>
    $(document).ready(function() {
        let currentUrl = window.location.pathname;

        function loadContent(url) {
            if (url === currentUrl) {
                return; // Do nothing if the content is already loaded
            }
            $.ajax({
                url: url,
                method: 'GET',
                success: function(html) {
                    let tempDom = $('<div></div>').append($.parseHTML(html));
                    let newContent = tempDom.find('#main-content').html();
                    $('#main-content').html(newContent);

                    if (typeof flowbite !== 'undefined') {
                        flowbite.init(); // Re-initialize Flowbite components
                    }

                    history.pushState(null, '', url);
                    currentUrl = url;

                    // Reattach event listeners
                    attachListeners();
                    attachRowClickListeners();
                },
                error: function(xhr, status, error) {
                    console.error('There was a problem with the AJAX request:', error);
                }
            });
        }

        function attachListeners() {
            $('.ajax-link').off('click').on('click', function(event) {
                event.preventDefault(); // Prevent the default link behavior
                const url = $(this).attr('href');
                loadContent(url);
            });
        }

        function attachRowClickListeners() {
            $('tr[data-client-id]').off('click').on('click', function() {
                var clientId = $(this).data('client-id');
                console.log('Row clicked with ID:', clientId);
                loadClientData(clientId);
            });
        }

        function handlePopState() {
            $(window).on('popstate', function(event) {
                const url = location.pathname;
                loadContent(url);
            });
        }

        function loadClientData(clientId) {
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
                    $('#modal-client-category').val(data.category);
                    $('#modal-client-price').val(data.price);
                    // Show the modal
                    $('#edit-client-modal').removeClass('hidden');
                },
                error: function() {
                    alert('Failed to retrieve client data.');
                }
            });
        }

        // Function to hide the modal
        function hideModal(modalId) {
            $('#' + modalId).addClass('hidden');
        }

        // Initial setup
        attachListeners();
        handlePopState();
        attachRowClickListeners();
    });
    </script>
</body>

</html>