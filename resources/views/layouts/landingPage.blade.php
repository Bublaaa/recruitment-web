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
    @include('./components/navBar')
    <!-- Content -->
    <main id="main-content" class="w-full">
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script>
    $(document).ready(function() {
        let currentUrl = window.location.pathname;

        // Function to load content via AJAX
        function loadContent(url) {
            if (url === currentUrl) {
                return; // Do nothing if the content is already loaded
            }
            $.ajax({
                url: url,
                method: 'GET',
                success: function(html) {
                    // Create a temporary DOM element to extract specific content
                    let tempDom = $('<div></div>').append($.parseHTML(html));

                    // Extract the content you want to load, e.g., the content inside #main-content
                    let newContent = tempDom.find('#main-content').html();

                    // Update #main-content with the new content
                    $('#main-content').html(newContent);

                    // Re-initialize any JS plugins if necessary
                    if (typeof flowbite !== 'undefined') {
                        flowbite.init(); // Re-initialize Flowbite components
                    }

                    // Update the current URL
                    history.pushState(null, '', url);
                    currentUrl = url;

                    // Reattach event listeners for newly loaded content
                    attachListeners();
                },
                error: function(xhr, status, error) {
                    console.error('There was a problem with the AJAX request:', error);
                }
            });
        }

        // Function to attach event listeners
        function attachListeners() {
            $('.ajax-link').on('click', function(event) {
                event.preventDefault(); // Prevent the default link behavior
                const url = $(this).attr('href');
                loadContent(url); // Call the loadContent function
            });
        }

        // Handle browser back/forward buttons
        function handlePopState() {
            $(window).on('popstate', function(event) {
                const url = location.pathname; // Get the current URL from the browser
                loadContent(url); // Load content based on the URL
            });
        }

        // Initial setup
        attachListeners(); // Attach event listeners when the document is ready
        handlePopState(); // Handle back/forward navigation
    });
    </script>
</body>

</html>