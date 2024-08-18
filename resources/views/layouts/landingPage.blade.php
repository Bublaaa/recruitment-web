<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            <button id="theme-toggle" type="button"
                class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-light-icon" class="w-5 h-5 hidden" fill="none" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        d="M3.32031 11.6835C3.32031 16.6541 7.34975 20.6835 12.3203 20.6835C16.1075 20.6835 19.3483 18.3443 20.6768 15.032C19.6402 15.4486 18.5059 15.6834 17.3203 15.6834C12.3497 15.6834 8.32031 11.654 8.32031 6.68342C8.32031 5.50338 8.55165 4.36259 8.96453 3.32996C5.65605 4.66028 3.32031 7.89912 3.32031 11.6835Z">
                    </path>
                </svg>
                <svg id="theme-toggle-dark-icon" class="w-5 h-5 hidden" fill="none" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="6" stroke="currentColor" stroke-width="1.5" />
                    <path d="M12 2V3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M12 21V22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M22 12L21 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M3 12L2 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M19.0708 4.92969L18.678 5.32252" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" />
                    <path d="M5.32178 18.6777L4.92894 19.0706" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" />
                    <path d="M19.0708 19.0703L18.678 18.6775" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" />
                    <path d="M5.32178 5.32227L4.92894 4.92943" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" />
                </svg>
            </button>

            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get
                    started</button>
                <button data-collapse-toggle="navbar-cta" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="text-xl font-bold">
        Landing Page
    </h1>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>

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


</html>