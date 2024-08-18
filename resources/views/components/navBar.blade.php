 <nav class="bg-white border-gray-200 dark:bg-gray-900">
     <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
         <a class="flex items-center space-x-3 ">
             <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
         </a>
         <div class="flex flex-row gap-5">
             @auth
             <div class="flex items-center justify-between">
                 <div class="flex items-center justify-start rtl:justify-end">
                     <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                         aria-controls="logo-sidebar" type="button"
                         class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                         <span class="sr-only">Open sidebar</span>
                         <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                             <path clip-rule="evenodd" fill-rule="evenodd"
                                 d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                             </path>
                         </svg>
                     </button>
                     <a href="https://flowbite.com" class="flex ms-2 md:me-24">
                         <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                         <span
                             class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Flowbite</span>
                     </a>
                 </div>
                 <div class="flex items-center">
                     <div class="flex items-center ms-3">
                         <div>
                             <button type="button"
                                 class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                 aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                 <span class="sr-only">Open user menu</span>
                                 <img class="w-8 h-8 rounded-full"
                                     src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                     alt="user photo">
                             </button>
                         </div>
                         <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                             id="dropdown-user">
                             <div class="px-4 py-3" role="none">
                                 <p class="text-sm text-gray-900 dark:text-white" role="none">
                                     Neil Sims
                                 </p>
                                 <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                     neil.sims@flowbite.com
                                 </p>
                             </div>
                             <ul class="py-1" role="none">
                                 <li>
                                     <a href="#"
                                         class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                         role="menuitem">Dashboard</a>
                                 </li>
                                 <li>
                                     <a href="#"
                                         class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                         role="menuitem">Settings</a>
                                 </li>
                                 <li>
                                     <a href="#"
                                         class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                         role="menuitem">Earnings</a>
                                 </li>
                                 <li>
                                     <a href="#"
                                         class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                         role="menuitem">Sign out</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
             @else
             <!-- Login Button -->
             <div class="flex md:order-2 space-x-3 md:space-x-0 ">
                 <button type="button"
                     class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
             </div>
             <!-- Toggle Button -->
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
             @endauth
         </div>
     </div>
 </nav>