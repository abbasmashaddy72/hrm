<div class="fixed right-0 z-50 top-96">
    <a class="flex px-3 py-3 text-lg font-normal text-center text-white bg-orange-500 rounded shadow-md hover:bg-orange-600 hover:shadow-xl"
        @click="openNav">
        <svg width="24" viewBox="0 0 24 24" class="cursor-pointer animated-rotate" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M20.8064 7.62361L20.184 6.54352C19.6574 5.6296 18.4905 5.31432 17.5753 5.83872V5.83872C17.1397 6.09534 16.6198 6.16815 16.1305 6.04109C15.6411 5.91402 15.2224 5.59752 14.9666 5.16137C14.8021 4.88415 14.7137 4.56839 14.7103 4.24604V4.24604C14.7251 3.72922 14.5302 3.2284 14.1698 2.85767C13.8094 2.48694 13.3143 2.27786 12.7973 2.27808H11.5433C11.0367 2.27807 10.5511 2.47991 10.1938 2.83895C9.83644 3.19798 9.63693 3.68459 9.63937 4.19112V4.19112C9.62435 5.23693 8.77224 6.07681 7.72632 6.0767C7.40397 6.07336 7.08821 5.98494 6.81099 5.82041V5.82041C5.89582 5.29601 4.72887 5.61129 4.20229 6.52522L3.5341 7.62361C3.00817 8.53639 3.31916 9.70261 4.22975 10.2323V10.2323C4.82166 10.574 5.18629 11.2056 5.18629 11.8891C5.18629 12.5725 4.82166 13.2041 4.22975 13.5458V13.5458C3.32031 14.0719 3.00898 15.2353 3.5341 16.1454V16.1454L4.16568 17.2346C4.4124 17.6798 4.82636 18.0083 5.31595 18.1474C5.80554 18.2866 6.3304 18.2249 6.77438 17.976V17.976C7.21084 17.7213 7.73094 17.6516 8.2191 17.7822C8.70725 17.9128 9.12299 18.233 9.37392 18.6717C9.53845 18.9489 9.62686 19.2646 9.63021 19.587V19.587C9.63021 20.6435 10.4867 21.5 11.5433 21.5H12.7973C13.8502 21.5001 14.7053 20.6491 14.7103 19.5962V19.5962C14.7079 19.088 14.9086 18.6 15.2679 18.2407C15.6272 17.8814 16.1152 17.6807 16.6233 17.6831C16.9449 17.6917 17.2594 17.7798 17.5387 17.9394V17.9394C18.4515 18.4653 19.6177 18.1544 20.1474 17.2438V17.2438L20.8064 16.1454C21.0615 15.7075 21.1315 15.186 21.001 14.6964C20.8704 14.2067 20.55 13.7894 20.1108 13.5367V13.5367C19.6715 13.284 19.3511 12.8666 19.2206 12.3769C19.09 11.8873 19.16 11.3658 19.4151 10.928C19.581 10.6383 19.8211 10.3982 20.1108 10.2323V10.2323C21.0159 9.70289 21.3262 8.54349 20.8064 7.63277V7.63277V7.62361Z"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <circle cx="12.1747" cy="11.8891" r="2.63616" stroke="currentColor" stroke-width="1.5"
                stroke-linecap="round" stroke-linejoin="round"></circle>
        </svg>
    </a>
    <div id="mySidenav"
        class="fixed top-0 right-0 z-50 w-0 h-full overflow-hidden transition-all duration-500 ease-in-out bg-white sidenav dark:bg-dark-card dark:text-gray-600">
        <div class="p-4">
            <div class="flex items-center justify-between pb-4">
                <h3 class="text-4xl">Settings</h3>
                <a href="javascript:void(0)" class="text-4xl text-black closebtn dark:text-white"
                    onclick="closeNav()">&times;</a>
            </div>
            <div class="py-4">
                <h5 class="mb-3 text-2xl font-semibold">Scheme</h5>
                <div class="grid grid-cols-3 mb-6 gap-7">
                    <div class="flex items-center justify-center px-4 py-2 text-gray-600 border-2 rounded-lg cursor-pointer dark:border-gray-700 hover:border-gray-500 dark:hover:border-gray-600"
                        id="auto" onclick="autoMode(this.id)" data-setting="color-mode" data-name="color"
                        data-value="auto">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M7,2V13H10V22L17,10H13L17,2H7Z"></path>
                        </svg>
                        <span class="ml-2 font-semibold rtl:mr-2"> Auto </span>
                    </div>
                    <div class="flex items-center justify-center px-4 py-2 text-gray-600 border-2 rounded-lg cursor-pointer dark:border-gray-700 hover:border-gray-500 dark:hover:border-gray-600"
                        id="dark" onclick="darkMode(this.id)">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor"
                                d="M9,2C7.95,2 6.95,2.16 6,2.46C10.06,3.73 13,7.5 13,12C13,16.5 10.06,20.27 6,21.54C6.95,21.84 7.95,22 9,22A10,10 0 0,0 19,12A10,10 0 0,0 9,2Z">
                            </path>
                        </svg>
                        <span class="ml-2 font-semibold rtl:mr-2"> Dark </span>
                    </div>
                    <div class="flex items-center justify-center px-4 py-2 text-gray-600 border-2 rounded-lg cursor-pointer dark:border-gray-700 hover:border-gray-500 dark:hover:border-gray-600"
                        id="light" onclick="darkMode(this.id)">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor"
                                d="M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8M12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18M20,8.69V4H15.31L12,0.69L8.69,4H4V8.69L0.69,12L4,15.31V20H8.69L12,23.31L15.31,20H20V15.31L23.31,12L20,8.69Z">
                            </path>
                        </svg>
                        <span class="ml-2 font-semibold rtl:mr-2"> Light</span>
                    </div>
                </div>

                <hr class="my-1 dark:border-gray-700">

                <div class="py-4">
                    <h5 class="mb-3 text-2xl font-semibold">Scheme Direction</h5>
                    <div class="grid grid-cols-2 gap-8">
                        <button class="relative text-center cursor-pointer" id="ltr" onclick="Direction(this.id)">
                            <img src="../assets/images/settings/light/01.png" alt="ltr"
                                class="rounded-lg opacity-100 dark:opacity-0 active">

                            <img src="../assets/images/settings/dark/01.png" alt="ltr"
                                class="absolute top-0 rounded-lg opacity-0 dark:opacity-100 active">
                            <span class="mt-2 text-xl font-semibold text-gray-600 "> LTR </span>
                        </button>
                        <button class="relative text-center cursor-pointer" id="rtl" onclick="Direction(this.id)">
                            <img src="../assets/images/settings/light/02.png" alt="rtl"
                                class="rounded-lg opacity-100 dark:opacity-0">

                            <img src="../assets/images/settings/dark/02.png" alt=""
                                class="absolute top-0 rounded-lg opacity-0 dark:opacity-100">
                            <span class="mt-2 text-xl font-semibold text-gray-600 "> RTL </span>
                        </button>
                    </div>
                </div>

                <hr class="my-1 dark:border-gray-700">

                <div class="py-4">
                    <h5 class="mb-3 text-2xl font-semibold">Sidebar color</h5>
                    <div class="grid grid-cols-2 mb-6 gap-7">
                        <a href="../dashboard/sidebar-index/blackdark.html"
                            class="flex items-center justify-center px-4 py-2 text-gray-600 border-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                                <circle cx="12" cy="12" r="8" fill="black"></circle>
                            </svg>
                            <span class="ml-2 "> Dark </span>
                        </a>
                        <a href="../dashboard/sidebar-index/colour.html"
                            class="flex items-center justify-center px-4 py-2 text-gray-600 border-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                                <circle cx="12" cy="12" r="8" fill="blue"></circle>
                            </svg>
                            <span class="ml-2 "> Color </span>
                        </a>
                        <a href="../dashboard/index.html"
                            class="flex items-center justify-center px-4 py-2 text-gray-600 border-2 rounded-lg ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                                <circle cx="12" cy="12" r="8" fill="White" stroke="black" stroke-width="3">
                                </circle>
                            </svg>
                            <span class="ml-2 "> Default</span>
                        </a>
                        <a href="../dashboard/sidebar-index/trans.html"
                            class="flex items-center justify-center px-4 py-2 text-gray-600 border-2 rounded-lg ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                                <circle cx="12" cy="12" r="8" fill="#F5F6FA" stroke="black" stroke-width="3"></circle>
                            </svg>
                            <span class="ml-2 "> Transparent</span>
                        </a>
                    </div>
                </div>


            </div>

        </div>



    </div>
</div>
