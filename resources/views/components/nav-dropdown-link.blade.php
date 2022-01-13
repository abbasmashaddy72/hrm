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
            <svg xmlns="http://www.w3.org/2000/svg" class="rtl:rotate-180" width="18" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                </path>
            </svg>
        </i>
    </a>
    <ul class="p-0 mb-0 overflow-hidden transition-all duration-800 max-h-0" id="horizontal-menu" x-ref="container1"
        x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
        <li class="iq-sidebar">
            <a class="flex items-center px-4 py-2 text-gray-600 transition-all rounded cursor-pointer dark:text-gray-600 hover:bg-blue-100 hover:text-blue-500 dark:hover:text-blue-500 dark:hover:bg-blue-800"
                data-sidebar-parent="1" href="../dashboard/index-horizontal.html">
                <i class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
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
