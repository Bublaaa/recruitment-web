<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
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
    // Get the toggle button and icons
    const themeToggleBtn = document.getElementById('theme-toggle');
    const lightIcon = document.getElementById('theme-toggle-light-icon');
    const darkIcon = document.getElementById('theme-toggle-dark-icon');

    // On page load or when changing themes, ensure the correct icon is displayed
    if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
        darkIcon.classList.remove('hidden');
    } else {
        lightIcon.classList.remove('hidden');
    }

    themeToggleBtn.addEventListener('click', () => {
        // Toggle the dark class on the root element
        document.documentElement.classList.toggle('dark');

        // Toggle which icon is visible
        lightIcon.classList.toggle('hidden');
        darkIcon.classList.toggle('hidden');

        // Save the user's preference in local storage
        if (document.documentElement.classList.contains('dark')) {
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
    });
    </script>
</body>


</html>