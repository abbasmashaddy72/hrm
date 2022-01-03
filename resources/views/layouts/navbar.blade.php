<nav class="z-40 flex flex-wrap items-center justify-start py-2 bg-white dark:bg-dark-card">
    <div class="absolute justify-end flex-grow-0 hidden w-full bg-white top-12 px-7" id="navbar1">
        <ul class="flex mb-2 ml-auto rtl:ml-0 rtl:mr-auto lg:mb-0">
            <li class="nav-item dropdown" x-data="{ open: false }">
                <button class="block p-2" type="button">
                    <img src="../assets/images/Flag/flag001.png" @click="open = ! open" class="max-w-full rounded-full"
                        alt="user" style="height: 30px; min-width: 30px; width: 30px;">
                    <span class="bg-primary"></span>
                </button>
                <div x-show="open" class="absolute z-40 p-0 rounded top-14 w-72" @click.outside="open = false"
                    x-transition:enter="transition ease-in duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-16"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-out duration-500"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform translate-y-0">
                    <div class="relative flex flex-col bg-white rounded-t-lg rounded-b-lg shadow-lg dark:bg-dark-card">
                        <div class="p-0 ">
                            <ul class="flex flex-col p-0 dark:text-gray-600">
                                <li
                                    class="inline-block w-full px-5 py-3 border-b rounded-t dark:bg-dark-card dark:hover:bg-indigo-100 dark:border-gray-700">
                                    <a class="flex items-center p-0" href="#"><img
                                            src="../assets/images/Flag/flag-03.png" alt="img-flaf"
                                            class="w-full mr-2"
                                            style="width: 15px;height: 15px;min-width: 15px;">Spanish</a></li>
                                <li
                                    class="inline-block w-full px-5 py-3 border-b hover:bg-indigo-100 dark:border-gray-700">
                                    <a class="flex items-center p-0" href="#"><img
                                            src="../assets/images/Flag/flag-04.png" alt="img-flaf"
                                            class="w-full mr-2"
                                            style="width: 15px;height: 15px;min-width: 15px;">Italian</a></li>
                                <li
                                    class="inline-block w-full px-5 py-3 border-b hover:bg-indigo-100 dark:border-gray-700">
                                    <a class="flex items-center p-0" href="#"><img
                                            src="../assets/images/Flag/flag-02.png" alt="img-flaf"
                                            class="w-full mr-2"
                                            style="width: 15px;height: 15px;min-width: 15px;">French</a></li>
                                <li
                                    class="inline-block w-full px-5 py-3 border-b hover:bg-indigo-100 dark:border-gray-700">
                                    <a class="flex items-center p-0" href="#"><img
                                            src="../assets/images/Flag/flag-05.png" alt="img-flaf"
                                            class="w-full mr-2"
                                            style="width: 15px;height: 15px;min-width: 15px;">German</a></li>
                                <li
                                    class="inline-block w-full px-5 py-3 border-b rounded-b hover:bg-indigo-100 dark:border-gray-700">
                                    <a class="flex items-center p-0" href="#"><img
                                            src="../assets/images/Flag/flag-06.png" alt="img-flaf"
                                            class="w-full mr-2"
                                            style="width: 15px;height: 15px;min-width: 15px;">Japanese</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
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
                <a href="#" class="block p-2 group" @click="open = !open">
                    <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="text-gray-600 dark:text-white hover:text-gray-700 group group-focus:text-gray-700">
                        <path opacity="0.4"
                            d="M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z"
                            fill="currentColor"></path>
                        <path
                            d="M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z"
                            fill="currentColor"></path>
                    </svg>
                    <span class="bg-primary count-mail"></span>
                </a>
                <div x-show="open" class="absolute z-40 p-0 rounded top-14 w-80 r-72" @click.outside="open = false"
                    x-transition:enter="transition ease-in duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-16"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-out duration-500"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform translate-y-0">
                    <div
                        class="relative flex flex-col m-0 bg-white rounded-t-lg rounded-b-lg shadow-lg right-64 dark:text-gray-600 dark:bg-dark-card">
                        <div class="flex justify-between px-5 py-3 bg-blue-500 rounded-t">
                            <div class="text-base text-left text-white">
                                <h5 class="mb-0 text-xl font-medium text-white">All Message</h5>
                            </div>
                        </div>
                        <div class="flex-auto p-0">
                            <a href="#"
                                class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                                <div class="flex items-center">
                                    <div class="">
                                        <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                            src="../assets/images/shapes/01.png" alt="">
                                    </div>
                                    <div class="ml-3 LR">
                                        <h6 class="mb-0 text-base font-medium ">Bni Emma Watson</h6>
                                        <small class="float-start font-size-12">13 Jun</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#"
                                class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                                <div class="flex items-center">
                                    <div class="">
                                        <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                            src="../assets/images/shapes/02.png" alt="">
                                    </div>
                                    <div class="ml-3">
                                        <h6 class="mb-0 text-base font-medium">Lorem Ipsum Watson</h6>
                                        <small class="float-start font-size-12">20 Apr</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#"
                                class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                                <div class="flex items-center">
                                    <div class="">
                                        <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                            src="../assets/images/shapes/03.png" alt="">
                                    </div>
                                    <div class="ml-3">
                                        <h6 class="mb-0 text-base font-medium">Why do we use it ?</h6>
                                        <small class="float-start font-size-12">30 Jun</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#"
                                class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                                <div class="flex items-center">
                                    <div class="">
                                        <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                            src="../assets/images/shapes/04.png" alt="">
                                    </div>
                                    <div class="ml-3">
                                        <h6 class="mb-0 text-base font-medium">Variations Passages</h6>
                                        <small class="float-start font-size-12">12 Sep</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#"
                                class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                                <div class="flex items-center">
                                    <div class="">
                                        <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                            src="../assets/images/shapes/05.png" alt="">
                                    </div>
                                    <div class="ml-3">
                                        <h6 class="mb-0 text-base font-medium">Lorem Ipsum generators</h6>
                                        <small class="float-start font-size-12">5 Dec</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>y
                </div>
            </li>
            <li class="nav-item dropdown" x-data="{ open: false }">
                <a class="flex items-center px-2 py-0" href="#" @click="open = !open">
                    <img src="../assets/images/avatars/01.png" alt="User-Profile" class="max-w-full rounded-full "
                        height="50px" width="50px">
                    <div class="hidden ml-4 rtl:ml-0 rtl:mr-4 md:block">
                        <h6 class="mb-0 text-base font-medium dark:text-gray-600 ">Austin Robertson</h6>
                        <p class="mb-0 text-gray-500 caption-sub-title dark:text-white">Marketing Administrator</p>
                    </div>
                </a>
                <ul x-show="open" class="absolute right-0 z-40 w-40 p-0 py-2 bg-white" @click.outside="open = false"
                    x-transition:enter="transition ease-in duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-16"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-out duration-500"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform translate-y-0">
                    <li><a class="block w-full px-4 py-1 font-normal text-gray-700 rounded-t focus:bg-blue-500 focus:text-white whitespace-nowrap"
                            href="../dashboard/app/user-profile.html">Profile</a></li>
                    <li><a class="block w-full px-4 py-1 font-normal text-gray-700 focus:bg-blue-500 focus:text-white whitespace-nowrap"
                            href="../dashboard/app/user-privacy-setting.html">Privacy Setting</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="block w-full px-4 py-1 pt-2 font-normal text-gray-700 rounded-b focus:bg-blue-500 focus:text-white whitespace-nowrap"
                            href="../dashboard/auth/sign-in.html">Logout</a></li>
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
                    <div class="p-1 mr-4 text-white bg-blue-500 shadow-md top-5 rounded-2xl" data-toggle="sidebar"
                        data-active="true">
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


                <div class="relative items-center hidden text-gray-500 xl:flex dark:text-gray-600">
                    <svg class="absolute w-5 h-5 pointer-events-none left-3" width="18" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></circle>
                        <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <input type="search"
                        class="w-full py-2 pl-10 pr-3 placeholder-gray-600 border rounded outline-none dark:bg-dark-card focus:shadow-lg dark:border-gray-700 focus:border-blue-500"
                        name="search" placeholder="Search..." autocomplete="off" aria-label="Search...">
                </div>

                <div class="hidden transition-all duration-700 ease-in-out lg:flex lg:flex-grow">
                    <ul class="flex mb-2 ml-auto rtl:ml-0 rtl:mr-auto lg:mb-0">
                        <li class="nav-item dropdown" x-data="{ open: false }">
                            <button class="block p-2" type="button">
                                <img src="../assets/images/Flag/flag001.png" @click="open = ! open"
                                    class="max-w-full rounded-full" alt="user"
                                    style="height: 30px; min-width: 30px; width: 30px;">
                                <span class="bg-primary"></span>
                            </button>
                            <div x-show="open" class="absolute z-40 p-0 rounded top-14 w-72 "
                                @click.outside="open = false" x-transition:enter="transition ease-in duration-500"
                                x-transition:enter-start="opacity-0 transform translate-y-16"
                                x-transition:enter-end="opacity-100 transform translate-y-0"
                                x-transition:leave="transition ease-out duration-500"
                                x-transition:leave-start="opacity-100 transform translate-y-0"
                                x-transition:leave-end="opacity-0 transform translate-y-0">
                                <div
                                    class="relative flex flex-col bg-white rounded-t-lg rounded-b-lg shadow-lg right-60 dark:bg-dark-card">
                                    <div class="p-0 ">
                                        <ul class="flex flex-col p-0">
                                            <li
                                                class="inline-block w-full px-5 py-3 text-lg text-gray-500 border-b rounded-t hover:bg-indigo-100 dark:border-gray-700">
                                                <a class="flex p-0" href="#"><img
                                                        src="../assets/images/Flag/flag-03.png" alt="img-flag"
                                                        class="w-full mt-2 mr-2 rtl:mr-0 rtl:ml-2"
                                                        style="width: 15px;height: 15px;min-width: 15px;">Spanish</a>
                                            </li>
                                            <li
                                                class="inline-block w-full px-5 py-3 text-lg text-gray-500 border-b hover:bg-indigo-100 dark:border-gray-700">
                                                <a class="flex p-0" href="#"><img
                                                        src="../assets/images/Flag/flag-04.png" alt="img-flag"
                                                        class="w-full mt-2 mr-2 rtl:mr-0 rtl:ml-2"
                                                        style="width: 15px;height: 15px;min-width: 15px;">Italian</a>
                                            </li>
                                            <li
                                                class="inline-block w-full px-5 py-3 text-lg text-gray-500 border-b hover:bg-indigo-100 dark:border-gray-700">
                                                <a class="flex p-0" href="#"><img
                                                        src="../assets/images/Flag/flag-02.png" alt="img-flag"
                                                        class="w-full mt-2 mr-2 rtl:mr-0 rtl:ml-2"
                                                        style="width: 15px;height: 15px;min-width: 15px;">French</a>
                                            </li>
                                            <li
                                                class="inline-block w-full px-5 py-3 text-lg text-gray-500 border-b hover:bg-indigo-100 dark:border-gray-700">
                                                <a class="flex p-0" href="#"><img
                                                        src="../assets/images/Flag/flag-05.png" alt="img-flag"
                                                        class="w-full mt-2 mr-2 rtl:mr-0 rtl:ml-2"
                                                        style="width: 15px;height: 15px;min-width: 15px;">German</a>
                                            </li>
                                            <li
                                                class="inline-block w-full px-5 py-3 text-lg text-gray-500 rounded-b hover:bg-indigo-100">
                                                <a class="flex p-0" href="#"><img
                                                        src="../assets/images/Flag/flag-06.png" alt="img-flag"
                                                        class="w-full mt-2 mr-2 rtl:mr-0 rtl:ml-2"
                                                        style="width: 15px;height: 15px;min-width: 15px;">Japanese</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
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
                            <div x-show="open" class="absolute z-40 p-0 top-14 w-80 right-80"
                                @click.outside="open = false" x-transition:enter="transition ease-in duration-500"
                                x-transition:enter-start="opacity-0 transform translate-y-16"
                                x-transition:enter-end="opacity-100 transform translate-y-0"
                                x-transition:leave="transition ease-out duration-500"
                                x-transition:leave-start="opacity-100 transform translate-y-0"
                                x-transition:leave-end="opacity-0 transform translate-y-0">
                                <div
                                    class="relative flex flex-col m-0 bg-white rounded-t-lg rounded-b-lg shadow-lg dark:bg-dark-card ">
                                    <div class="flex justify-between px-5 py-3 bg-blue-500 rounded-t-lg ">
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
                                                <div class="w-full ml-3 rtl:ml-0 rtl:mr-3">
                                                    <h6 class="mb-0 text-base font-medium dark:text-gray-600">Emma
                                                        Watson Bni</h6>
                                                    <div class="flex items-center justify-between">
                                                        <p class="mb-0 text-lg text-gray-500 dark:text-gray-600 LR">95
                                                            MB</p>
                                                        <small
                                                            class="text-sm text-gray-500 float-end dark:text-gray-600">Just
                                                            Now</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                                            <div class="flex items-center">
                                                <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                                    src="../assets/images/shapes/02.png" alt="">
                                                <div class="w-full ml-3 rtl:ml-0 rtl:mr-3">
                                                    <h6 class="mb-0 text-base font-medium dark:text-gray-600">New
                                                        customer is join</h6>
                                                    <div class="flex items-center justify-between">
                                                        <p class="mb-0 text-lg text-gray-500 dark:text-gray-600">Cyst
                                                            Bni</p>
                                                        <small
                                                            class="text-sm text-gray-500 float-end dark:text-gray-600 LR">5
                                                            days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                                            <div class="flex items-center">
                                                <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                                    src="../assets/images/shapes/03.png" alt="">
                                                <div class="w-full ml-3 rtl:ml-0 rtl:mr-3">
                                                    <h6 class="mb-0 text-base font-medium dark:text-gray-600">Two
                                                        customer is left</h6>
                                                    <div class="flex items-center justify-between">
                                                        <p class="mb-0 text-lg text-gray-500 dark:text-gray-600">Cyst
                                                            Bni</p>
                                                        <small
                                                            class="text-sm text-gray-500 float-end dark:text-gray-600 LR">2
                                                            days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="inline-block w-full px-5 py-3 hover:bg-indigo-100 group">
                                            <div class="flex items-center">
                                                <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                                    src="../assets/images/shapes/04.png" alt="">
                                                <div class="w-full ml-3 rtl:ml-0 rtl:mr-3">
                                                    <h6 class="mb-0 text-base font-medium dark:text-gray-600">New Mail
                                                        from Fenny</h6>
                                                    <div class="flex items-center justify-between">
                                                        <p class="mb-0 text-lg text-gray-500 dark:text-gray-600">Cyst
                                                            Bni</p>
                                                        <small
                                                            class="text-sm text-gray-500 float-end dark:text-gray-600 LR">3
                                                            days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown" x-data="{ open: false }">
                            <a href="#" class="block p-2 group" @click="open = !open">
                                <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    class="text-gray-600 dark:text-white hover:text-gray-700 group group-focus:text-gray-700">
                                    <path opacity="0.4"
                                        d="M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z"
                                        fill="currentColor"></path>
                                </svg>
                                <span class="bg-primary count-mail"></span>
                            </a>
                            <div x-show="open" class="absolute z-40 p-0 rounded top-14 w-80 right-72"
                                @click.outside="open = false" x-transition:enter="transition ease-in duration-500"
                                x-transition:enter-start="opacity-0 transform translate-y-16"
                                x-transition:enter-end="opacity-100 transform translate-y-0"
                                x-transition:leave="transition ease-out duration-500"
                                x-transition:leave-start="opacity-100 transform translate-y-0"
                                x-transition:leave-end="opacity-0 transform translate-y-0">
                                <div
                                    class="relative flex flex-col m-0 bg-white rounded-t-lg rounded-b-lg shadow-lg dark:text-gray-600 dark:bg-dark-card">
                                    <div class="flex justify-between px-5 py-3 bg-blue-500 rounded-t">
                                        <div class="text-base text-left text-white">
                                            <h5 class="mb-0 text-xl font-medium text-white">All Message</h5>
                                        </div>
                                    </div>
                                    <div class="flex-auto p-0">
                                        <a href="#"
                                            class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                                            <div class="flex items-center">
                                                <div class="">
                                                    <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                                        src="../assets/images/shapes/01.png" alt="">
                                                </div>
                                                <div class="ml-3 rtl:ml-0 rtl:mr-3 LR">
                                                    <h6 class="mb-0 text-base font-medium">Bni Emma Watson</h6>
                                                    <small
                                                        class="text-sm text-gray-500 LR float-start dark:text-gray-600">13
                                                        Jun</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                                            <div class="flex items-center">
                                                <div class="">
                                                    <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                                        src="../assets/images/shapes/02.png" alt="">
                                                </div>
                                                <div class="ml-3 rtl:ml-0 rtl:mr-3 LR">
                                                    <h6 class="mb-0 text-base font-medium">Lorem Ipsum Watson</h6>
                                                    <small
                                                        class="text-sm text-gray-500 float-start dark:text-gray-600">20
                                                        Apr</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                                            <div class="flex items-center">
                                                <div class="">
                                                    <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                                        src="../assets/images/shapes/03.png" alt="">
                                                </div>
                                                <div class="ml-3 rtl:ml-0 rtl:mr-3 LR">
                                                    <h6 class="mb-0 text-base font-medium">Why do we use it ?</h6>
                                                    <small
                                                        class="text-sm text-gray-500 float-start dark:text-gray-600">30
                                                        Jun</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                                            <div class="flex items-center">
                                                <div class="">
                                                    <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                                        src="../assets/images/shapes/04.png" alt="">
                                                </div>
                                                <div class="ml-3 rtl:ml-0 rtl:mr-3 LR">
                                                    <h6 class="mb-0 text-base font-medium">Variations Passages</h6>
                                                    <small
                                                        class="text-sm text-gray-500 float-start dark:text-gray-600">12
                                                        Sep</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="inline-block w-full px-5 py-3 hover:bg-indigo-100 group">
                                            <div class="flex items-center">
                                                <div class="">
                                                    <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                                        src="../assets/images/shapes/05.png" alt="">
                                                </div>
                                                <div class="ml-3 rtl:ml-0 rtl:mr-3 LR">
                                                    <h6 class="mb-0 text-base font-medium">Lorem Ipsum generators</h6>
                                                    <small
                                                        class="text-sm text-gray-500 float-start dark:text-gray-600">5
                                                        Dec</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown" x-data="{ open: false }">
                            <a class="flex items-center px-2 py-0" href="#" @click="open = !open">
                                <img src="../assets/images/avatars/01.png" alt="User-Profile"
                                    class="max-w-full rounded-full " height="50px" width="50px">
                                <div class="hidden ml-4 rtl:ml-0 rtl:mr-4 md:block">
                                    <h6 class="mb-0 text-base font-medium dark:text-gray-600">Austin Robertson</h6>
                                    <p class="mb-0 text-lg text-gray-600 caption-sub-title dark:text-white">Marketing
                                        Administrator</p>
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
                                <li><a class="block w-full px-4 py-1 text-lg text-gray-600 rounded-t focus:bg-blue-500 focus:text-white whitespace-nowrap hover:text-blue-500 "
                                        href="../dashboard/app/user-profile.html">Profile</a></li>
                                <li><a class="block w-full px-4 py-1 text-lg text-gray-600 focus:bg-blue-500 focus:text-white whitespace-nowrap hover:text-blue-500"
                                        href="../dashboard/app/user-privacy-setting.html">Privacy Setting</a></li>
                                <li>
                                    <hr class="dark:border-gray-700 ">
                                </li>
                                <li><a class="block w-full px-4 py-1 pt-2 text-lg text-gray-600 rounded-b focus:bg-blue-500 focus:text-white whitespace-nowrap hover:text-blue-500"
                                        href="../dashboard/auth/sign-in.html">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
