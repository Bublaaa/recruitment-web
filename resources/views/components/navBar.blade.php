 <nav class="bg-white border-gray-200 dark:bg-gray-900 z-50">
     <div class="max-w-screen flex flex-wrap items-center justify-between mx-auto p-4">
         <a class="flex items-center space-x-3 ">
             <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
         </a>
         <div class="flex flex-row gap-5">
             @auth
             <div class="flex items-center justify-between">

                 <div class="flex items-center">
                     @include('./components/darkModeButton')
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
                                     {{ Auth::user()->name }}
                                 </p>
                                 <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                     {{ Auth::user()->email }}
                                 </p>
                             </div>
                             <ul class="py-1" role="none">
                                 <!-- <li>
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
                                 </li> -->
                                 <li>
                                     <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                         class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                         role="menuitem">Sign out</a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                         @csrf
                                     </form>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
             @else
             <!-- Login Button -->
             <div class="flex md:order-2 space-x-3 md:space-x-0 ">
                 <a type="button" href="{{ route('login') }}"
                     class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</a>
             </div>
             <!-- Toggle Button -->
             @include('./components/darkModeButton')
             @endauth
         </div>
     </div>
 </nav>