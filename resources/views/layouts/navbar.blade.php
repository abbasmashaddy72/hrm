<nav class="z-40 flex flex-wrap items-center justify-start py-2 bg-white dark:bg-dark-card">
    <div class="absolute justify-end flex-grow-0 hidden w-full bg-white top-12 px-7" id="navbar1">
        <ul class="flex mb-2 ml-auto rtl:ml-0 rtl:mr-auto lg:mb-0">
            <li class="nav-item dropdown" x-data="{ open: false }">
                <a href="#" class="block p-2 group" @click="open = ! open">
                    <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="text-gray-600 dark:text-white hover:text-gray-700 group group-focus:text-gray-700">
                        <path
                            d="M19.7695 11.6453C19.039 10.7923 18.7071 10.0531 18.7071 8.79716V8.37013C18.7071 6.73354 18.3304 5.67907 17.5115 4.62459C16.2493 2.98699 14.1244 2 12.0442 2H11.9558C9.91935 2 7.86106 2.94167 6.577 4.5128C5.71333 5.58842 5.29293 6.68822 5.29293 8.37013V8.79716C5.29293 10.0531 4.98284 10.7923 4.23049 11.6453C3.67691 12.2738 3.5 13.0815 3.5 13.9557C3.5 14.8309 3.78723 15.6598 4.36367 16.3336C5.11602 17.1413 6.17846 17.6569 7.26375 17.7466C8.83505 17.9258 10.4063 17.9933 12.0005 17.9933C13.5937 17.9933 15.165 17.8805 16.7372 17.7466C17.8215 17.6569 18.884 17.1413 19.6363 16.3336C20.2118 15.6598 20.5 14.8309 20.5 13.9557C20.5 13.0815 20.3231 12.2738 19.7695 11.6453Z"
                            fill="currentColor"></path>
                        <path opacity="0.4"
                            d="M14.0088 19.2283C13.5088 19.1215 10.4627 19.1215 9.96275 19.2283C9.53539 19.327 9.07324 19.5566 9.07324 20.0602C9.09809 20.5406 9.37935 20.9646 9.76895 21.2335L9.76795 21.2345C10.2718 21.6273 10.8632 21.877 11.4824 21.9667C11.8123 22.012 12.1482 22.01 12.4901 21.9667C13.1083 21.877 13.6997 21.6273 14.2036 21.2345L14.2026 21.2335C14.5922 20.9646 14.8734 20.5406 14.8983 20.0602C14.8983 19.5566 14.4361 19.327 14.0088 19.2283Z"
                            fill="currentColor"></path>
                    </svg>
                    <span class="bg-danger dots"></span>
                </a>
                <div x-show="open" class="absolute z-40 p-0 rounded top-14 w-80 r-40 " @click.outside="open = false"
                    x-transition:enter="transition ease-in duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-16"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-out duration-500"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform translate-y-0">
                    <div
                        class="relative flex flex-col m-0 bg-white rounded-t-lg rounded-b-lg shadow-lg right-64 dark:bg-dark-card">
                        <div class="flex justify-between px-5 py-3 bg-blue-500 rounded-t">
                            <div class="text-base text-left text-white">
                                <h5 class="mb-0 text-xl font-medium text-white">All Notifications</h5>
                            </div>
                        </div>
                        <div class="flex-auto p-0">
                            <a href="#"
                                class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                                <div class="flex items-center">
                                    <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                        src="../assets/images/shapes/01.png" alt="">
                                    <div class="w-full ml-3 rtl:ml-0 rtl:mr-3 LR">
                                        <h6 class="mb-0 text-base font-medium dark:text-gray-600">Emma Watson Bni</h6>
                                        <div class="flex items-center justify-between">
                                            <p class="mb-0 dark:text-gray-600">95 MB</p>
                                            <small class="float-end font-size-12 dark:text-gray-600">Just Now</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#"
                                class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group-hover:bg-blue-200">
                                <div class="flex items-center">
                                    <div class="">
                                        <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full"
                                            src="../assets/images/shapes/02.png" alt="">
                                    </div>
                                    <div class="w-full ml-3 rtl:ml-0 rtl:mr- LR">
                                        <h6 class="mb-0 text-base font-medium dark:text-gray-600">New customer is join
                                        </h6>
                                        <div class="flex items-center justify-between">
                                            <p class="mb-0 dark:text-gray-600">Cyst Bni</p>
                                            <small class="float-end font-size-12 dark:text-gray-600">5 days ago</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#"
                                class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group-hover:bg-blue-200">
                                <div class="flex items-center">
                                    <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full"
                                        src="../assets/images/shapes/03.png" alt="">
                                    <div class="w-full ml-3 rtl:ml-0 rtl:mr-3 LR">
                                        <h6 class="mb-0 text-base font-medium dark:text-gray-600">Two customer is left
                                        </h6>
                                        <div class="flex items-center justify-between">
                                            <p class="mb-0 dark:text-gray-600">Cyst Bni</p>
                                            <small class="float-end font-size-12 dark:text-gray-600">2 days ago</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#"
                                class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group-hover:bg-blue-200">
                                <div class="flex items-center">
                                    <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full"
                                        src="../assets/images/shapes/04.png" alt="">
                                    <div class="w-full ml-3 rtl:ml-0 rtl:mr-3 LR">
                                        <h6 class="mb-0 text-base font-medium dark:text-gray-600">New Mail from Fenny
                                        </h6>
                                        <div class="flex items-center justify-between">
                                            <p class="mb-0 dark:text-gray-600">Cyst Bni</p>
                                            <small class="float-end font-size-12 dark:text-gray-600">3 days ago</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown" x-data="{ open: false }">
                <a class="flex items-center px-2 py-0" href="#" @click="open = !open">
                    @if (!empty(Auth::user()->profile_image))
                        <img src="{{ Auth::user()->profile_image }}" alt="User-Profile"
                            class="max-w-full rounded-full " height="50px" width="50px">
                    @else
                        <div
                            class="relative flex items-center justify-center w-12 h-12 m-1 mr-2 text-xl text-white uppercase bg-blue-500 rounded-full">
                            {{ Auth::user()->initials }}</div>
                    @endif
                    <div class="hidden ml-4 rtl:ml-0 rtl:mr-4 md:block">
                        <h6 class="mb-0 text-base font-medium dark:text-gray-600">
                            {{ Auth::user()->name }}</h6>
                        <p class="mb-0 text-lg text-gray-600 caption-sub-title dark:text-white">
                            {{-- {{ Auth::user()->roles->pluck('name')[0] ?? '' }} --}} Dummy
                        </p>
                    </div>
                </a>
                <ul x-show="open" class="absolute right-0 z-40 w-40 p-0 py-2 bg-white" @click.outside="open = false"
                    x-transition:enter="transition ease-in duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-16"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-out duration-500"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform translate-y-0">
                    <x-dropdown-link :href="route('logout')" class="rounded-t">
                        {{ __('Profile') }}
                    </x-dropdown-link>
                    <x-hr-line />
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')" class="rounded-b" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </ul>
            </li>
        </ul>
    </div>
    <div class="w-full px-7 ">
        <div class="relative flex items-center justify-between ">
            <div class="absolute right-0 flex items-center px-2 py-1 text-xl border border-gray-500 rounded lg:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="inline-flex items-center justify-center text-xl text-gray-500 rounded"
                    onclick="toggleNavbar('navbar1', 'cancel', 'mobileicon')" aria-controls="mobile-menu"
                    aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block w-8 h-8" id="mobileicon" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden w-6 h-6" id="cancel" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                        fill="gray">
                        <path
                            d="M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="flex items-center justify-start flex-1 lg:justify-center sm:items-stretch ">
                <div class="flex items-center xl:hidden">
                    <div class="p-1 mr-4 text-white bg-blue-500 shadow-md top-5 rounded-2xl hover:cursor-pointer"
                        data-toggle="sidebar" data-active="true">
                        <i class="flex items-center">
                            <svg width="20px" height="20px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z">
                                </path>
                            </svg>
                        </i>
                    </div>
                    <svg width="30" class="text-blue-500" viewBox="0 0 30 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2"
                            transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"></rect>
                        <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)"
                            fill="currentColor"></rect>
                        <rect x="10.5366" y="16.3945" width="16" height="4" rx="2"
                            transform="rotate(45 10.5366 16.3945)" fill="currentColor"></rect>
                        <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2"
                            transform="rotate(45 10.5562 -0.556152)" fill="currentColor"></rect>
                    </svg>
                    <a class="m-0 mb-0 ml-4 text-2xl font-semibold opacity-100;" href="#">
                        Hope UI
                    </a>
                </div>

                <div class="hidden transition-all duration-700 ease-in-out lg:flex lg:flex-grow">
                    <ul class="flex mb-2 ml-auto rtl:ml-0 rtl:mr-auto lg:mb-0">
                        <li class="nav-item dropdown" x-data="{ open: false }">
                            <a class="flex items-center px-2 py-0" href="#" @click="open = !open">
                                @if (!empty(Auth::user()->profile_image))
                                    <img src="{{ Auth::user()->profile_image }}" alt="User-Profile"
                                        class="max-w-full rounded-full " height="50px" width="50px">
                                @else
                                    <div
                                        class="relative flex items-center justify-center w-12 h-12 m-1 mr-2 text-xl text-white uppercase bg-blue-500 rounded-full">
                                        {{ Auth::user()->initials }}</div>
                                @endif
                                <div class="hidden ml-4 rtl:ml-0 rtl:mr-4 md:block">
                                    <h6 class="mb-0 text-base font-medium dark:text-gray-600">
                                        {{ Auth::user()->name }}</h6>
                                    <p class="mb-0 text-lg text-gray-600 caption-sub-title dark:text-white">
                                        {{-- {{ Auth::user()->roles->pluck('name')[0] ?? '' }} --}} Dummy
                                    </p>
                                </div>
                            </a>
                            <ul x-show="open"
                                class="absolute right-0 z-40 w-40 p-0 py-2 bg-white rounded dark:bg-dark-card"
                                @click.outside="open = false" x-transition:enter="transition ease-in duration-500"
                                x-transition:enter-start="opacity-0 transform translate-y-16"
                                x-transition:enter-end="opacity-100 transform translate-y-0"
                                x-transition:leave="transition ease-out duration-500"
                                x-transition:leave-start="opacity-100 transform translate-y-0"
                                x-transition:leave-end="opacity-0 transform translate-y-0">
                                <x-dropdown-link :href="route('logout')" class="rounded-t">
                                    {{ __('Profile') }}
                                </x-dropdown-link>
                                <x-hr-line />
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" class="rounded-b" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
