<aside x-data="{ open: false }" x-bind:class="open ? 'sidebar sidebar-mini' : 'sidebar'"
    class="bg-white dark:bg-dark-card">
    <div class="relative flex items-center justify-start mb-3 border-b dark:border-gray-700">
        <a href="../dashboard/index.html" class="flex px-5 py-4 mr-4 text-xl rtl:ml-4 rtl:mr-0 whitespace-nowraps ">
            <x-application-logo class="w-auto h-10" />
            <h4 id="sid1" class="font-semibold sidebar-logo dark:text-white">Hope UI</h4>
        </a>
        <div class="absolute p-1 text-white bg-blue-500 shadow-md sidearrow xl:-right-3 right-4 top-5 rounded-2xl hover:cursor-pointer"
            x-on:click="open = ! open" data-toggle="sidebar" data-active="true">
            <i class="flex" x-bind:style="open ? 'transform:  rotate(180deg)' : ''">
                <svg width="20" viewBox="0 0 24 24" class="rtl:rotate-180" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </i>
        </div>
    </div>
    <div class="sidebar-body data-scrollbar">
        <ul class="iq-main-menu dark:bg-dark-card" x-data="sidebar">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <i class="icon">
                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4"
                            d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z"
                            fill="currentColor"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z"
                            fill="currentColor"></path>
                    </svg>
                </i>
                <span class="item-name rtl:pr-4">{{ __('Dashboard') }}</span>
            </x-nav-link>
            <li class="iq-sidebar">
                <a class="flex items-center px-4 py-2 transition-all rounded cursor-pointer dark:text-gray-600"
                    :class="selected == 1 ? 'bg-blue-500 text-white dark:text-white shadow-active' : 'hover:bg-blue-100 hover:text-blue-500 text-gray-600 dark:hover:text-blue-500 dark:hover:bg-blue-800'"
                    @click="toggle(1)">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4"
                                d="M10.0833 15.958H3.50777C2.67555 15.958 2 16.6217 2 17.4393C2 18.2559 2.67555 18.9207 3.50777 18.9207H10.0833C10.9155 18.9207 11.5911 18.2559 11.5911 17.4393C11.5911 16.6217 10.9155 15.958 10.0833 15.958Z"
                                fill="currentColor"></path>
                            <path opacity="0.4"
                                d="M22.0001 6.37867C22.0001 5.56214 21.3246 4.89844 20.4934 4.89844H13.9179C13.0857 4.89844 12.4102 5.56214 12.4102 6.37867C12.4102 7.1963 13.0857 7.86 13.9179 7.86H20.4934C21.3246 7.86 22.0001 7.1963 22.0001 6.37867Z"
                                fill="currentColor"></path>
                            <path
                                d="M8.87774 6.37856C8.87774 8.24523 7.33886 9.75821 5.43887 9.75821C3.53999 9.75821 2 8.24523 2 6.37856C2 4.51298 3.53999 3 5.43887 3C7.33886 3 8.87774 4.51298 8.87774 6.37856Z"
                                fill="currentColor"></path>
                            <path
                                d="M21.9998 17.3992C21.9998 19.2648 20.4609 20.7777 18.5609 20.7777C16.6621 20.7777 15.1221 19.2648 15.1221 17.3992C15.1221 15.5325 16.6621 14.0195 18.5609 14.0195C20.4609 14.0195 21.9998 15.5325 21.9998 17.3992Z"
                                fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name rtl:pr-4">Menu Style</span>
                    <i class="transition-all duration-800 right-icon"
                        x-bind:style="selected == 1 ? 'transform:  rotate(90deg)' : ''">
                        <svg xmlns="http://www.w3.org/2000/svg" class="rtl:rotate-180" width="18" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </i>
                </a>
                <ul class="p-0 mb-0 overflow-hidden transition-all duration-800 max-h-0" id="horizontal-menu"
                    x-ref="container1"
                    x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    <li class="iq-sidebar">
                        <a class="flex items-center px-4 py-2 text-gray-600 transition-all rounded cursor-pointer dark:text-gray-600 hover:bg-blue-100 hover:text-blue-500 dark:hover:text-blue-500 dark:hover:bg-blue-800"
                            data-sidebar-parent="1" href="../dashboard/index-horizontal.html">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="hidden opacity-0"> H </i>
                            <span class="item-name rtl:pr-4"> Horizontal </span>
                        </a>
                    </li>
                    <li class="iq-sidebar">
                        <a class="flex items-center px-4 py-2 text-gray-600 transition-all rounded cursor-pointer dark:text-gray-600 hover:bg-blue-100 hover:text-blue-500 dark:hover:text-blue-500 dark:hover:bg-blue-800"
                            data-sidebar-parent="1" href="../dashboard/index-dual-horizontal.html">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="hidden opacity-0"> D </i>
                            <span class="item-name rtl:pr-4">Dual Horizontal</span>
                        </a>
                    </li>
                    <li class="iq-sidebar">
                        <a class="flex items-center px-4 py-2 text-gray-600 transition-all rounded cursor-pointer dark:text-gray-600 hover:bg-blue-100 hover:text-blue-500 dark:hover:text-blue-500 dark:hover:bg-blue-800"
                            data-sidebar-parent="1" href="../dashboard/index-dual-compact.html">
                            <i class="text-gray-600 icon svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="hidden opacity-0"> D </i>
                            <span class="item-name rtl:pr-4">Dual Compact</span>
                        </a>
                    </li>
                    <li class="iq-sidebar">
                        <a class="flex items-center px-4 py-2 text-gray-600 transition-all rounded cursor-pointer dark:text-gray-600 hover:bg-blue-100 hover:text-blue-500 dark:hover:text-blue-500 dark:hover:bg-blue-800"
                            data-sidebar-parent="1" href="../dashboard/index-boxed.html">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="hidden opacity-0"> B </i>
                            <span class="item-name rtl:pr-4">Boxed Horizontal</span>
                        </a>
                    </li>
                    <li class="iq-sidebar">
                        <a class="flex items-center px-4 py-2 text-gray-600 transition-all rounded cursor-pointer dark:text-gray-600 hover:bg-blue-100 hover:text-blue-500 dark:hover:text-blue-500 dark:hover:bg-blue-800"
                            data-sidebar-parent="1" href="../dashboard/index-boxed-fancy.html">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="hidden opacity-0"> B </i>
                            <span class="item-name rtl:pr-4">Boxed Fancy</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="iq-sidebar">
                <a class="flex items-center px-4 py-2 text-gray-600 transition-all rounded cursor-pointer dark:text-gray-600 hover:bg-blue-100 hover:text-blue-500 dark:hover:text-blue-500 dark:hover:bg-blue-800"
                    aria-current="page" href="../" target="_blank">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M21.9964 8.37513H17.7618C15.7911 8.37859 14.1947 9.93514 14.1911 11.8566C14.1884 13.7823 15.7867 15.3458 17.7618 15.3484H22V15.6543C22 19.0136 19.9636 21 16.5173 21H7.48356C4.03644 21 2 19.0136 2 15.6543V8.33786C2 4.97862 4.03644 3 7.48356 3H16.5138C19.96 3 21.9964 4.97862 21.9964 8.33786V8.37513ZM6.73956 8.36733H12.3796H12.3831H12.3902C12.8124 8.36559 13.1538 8.03019 13.152 7.61765C13.1502 7.20598 12.8053 6.87318 12.3831 6.87491H6.73956C6.32 6.87664 5.97956 7.20858 5.97778 7.61852C5.976 8.03019 6.31733 8.36559 6.73956 8.36733Z"
                                fill="currentColor"></path>
                            <path opacity="0.4"
                                d="M16.0374 12.2966C16.2465 13.2478 17.0805 13.917 18.0326 13.8996H21.2825C21.6787 13.8996 22 13.5715 22 13.166V10.6344C21.9991 10.2297 21.6787 9.90077 21.2825 9.8999H17.9561C16.8731 9.90338 15.9983 10.8024 16 11.9102C16 12.0398 16.0128 12.1695 16.0374 12.2966Z"
                                fill="currentColor"></path>
                            <circle cx="18" cy="11.8999" r="1" fill="currentColor"></circle>
                        </svg>
                    </i>
                    <span class="item-name rtl:pr-4">Design System<span
                            class="ml-4 rtl:mr-4 rtl:ml-0 inline-block whitespace-nowrap px-2 py-0.5 text-xs text-center font-bold leading-none text-white bg-green-500 rounded-full">UI</span></span>
                </a>
            </li>
            <li>
                <hr class="hr-horizontal dark:border-gray-700">
            </li>
        </ul>
    </div>

</aside>
