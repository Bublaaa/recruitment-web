<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" /> -->
    @vite('resources/css/app.css')
</head>

<body class="bg-white dark:bg-gray-700">
    <div class="flex flex-col">
        @include('./components/navBar')
        <div class="flex flex-row">
            @include('./components/sideBar')
            <!-- Content -->
            <main id="main-content" class="md:ml-64 mt-20 p-4 w-full">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script>
    $(document).ready(function() {
        let currentUrl = window.location.pathname;
        console.log(currentUrl);

        function loadContent(url) {
            if (url === currentUrl) {
                return;
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

                    console.log(newContent);

                    // Re-initialize any JS plugins if necessary
                    if (typeof flowbite !== 'undefined') {
                        flowbite.init();
                    }

                    // Update the current URL
                    history.pushState(null, '', url);
                    currentUrl = url;
                },
                error: function(xhr, status, error) {
                    console.error('There was a problem with the AJAX request:', error);
                }
            });
        }

        $('.sidebar-link').on('click', function(event) {
            event.preventDefault();
            const url = $(this).attr('href');
            loadContent(url);
        });

        $(window).on('popstate', function(event) {
            const url = location.pathname;
            loadContent(url);
        });
    });
    </script>
</body>

</html>