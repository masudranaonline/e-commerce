<script setup>
    import {
        Link
    } from '@inertiajs/vue3';
</script>

<template>
    <!--Start Topbar section-->

    <div class="bg-[#49688E]">
        <div class="mx-auto max-w-7xl px-4">

            <div class="md:flex justify-between">
                <div class="flex py-2 gap-4 text-slate-200">
                    <div class="flex justify-start items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                        <p class="text-sm">0190000000</p>
                    </div>
                    <div class="flex justify-start items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                        <p class="text-sm">e-khulna@gmail.com</p>
                    </div>
                </div>
                <div class="flex justify-center border-t md:border-t-0 text-slate-200">
                    <div class="border-l">
                        <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover"
                            data-dropdown-trigger="hover"
                            class="text-white  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button"><span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 400" class="h-4 w-6">
                                    <!-- Blue rectangle (Union) -->
                                    <rect width="300" height="200" fill="#3C3B6E"></rect>

                                    <!-- White stripes -->
                                    <rect width="600" height="40" y="40" fill="#fff"></rect>
                                    <rect width="600" height="40" y="120" fill="#fff"></rect>
                                    <rect width="600" height="40" y="200" fill="#fff"></rect>
                                    <rect width="600" height="40" y="280" fill="#fff"></rect>

                                    <!-- Red stripes -->
                                    <rect width="600" height="40" y="80" fill="#FF0000"></rect>
                                    <rect width="600" height="40" y="160" fill="#FF0000"></rect>
                                    <rect width="600" height="40" y="240" fill="#FF0000"></rect>

                                    <!-- Stars (simplified representation) -->
                                    <circle cx="30" cy="30" r="5" fill="#fff"></circle>
                                    <circle cx="90" cy="30" r="5" fill="#fff"></circle>
                                    <circle cx="150" cy="30" r="5" fill="#fff"></circle>
                                    <circle cx="210" cy="30" r="5" fill="#fff"></circle>
                                    <circle cx="270" cy="30" r="5" fill="#fff"></circle>
                                    <circle cx="30" cy="70" r="5" fill="#fff"></circle>
                                    <circle cx="90" cy="70" r="5" fill="#fff"></circle>
                                    <circle cx="150" cy="70" r="5" fill="#fff"></circle>
                                    <circle cx="210" cy="70" r="5" fill="#fff"></circle>
                                    <circle cx="270" cy="70" r="5" fill="#fff"></circle>
                                    <circle cx="30" cy="110" r="5" fill="#fff"></circle>
                                    <circle cx="90" cy="110" r="5" fill="#fff"></circle>
                                    <circle cx="150" cy="110" r="5" fill="#fff"></circle>
                                    <circle cx="210" cy="110" r="5" fill="#fff"></circle>
                                    <circle cx="270" cy="110" r="5" fill="#fff"></circle>
                                </svg>
                            </span> English
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownHover"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownHoverButton">
                                <li>
                                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        href="https://anjinmetalindustries.com/set-locale/en">
                                        <div class="inline-flex items-center gap-2"><span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 400"
                                                    class="h-4 w-6">
                                                    <!-- Blue rectangle (Union) -->
                                                    <rect width="300" height="200" fill="#3C3B6E"></rect>

                                                    <!-- White stripes -->
                                                    <rect width="600" height="40" y="40" fill="#fff"></rect>
                                                    <rect width="600" height="40" y="120" fill="#fff">
                                                    </rect>
                                                    <rect width="600" height="40" y="200" fill="#fff">
                                                    </rect>
                                                    <rect width="600" height="40" y="280" fill="#fff">
                                                    </rect>

                                                    <!-- Red stripes -->
                                                    <rect width="600" height="40" y="80" fill="#FF0000"></rect>
                                                    <rect width="600" height="40" y="160" fill="#FF0000">
                                                    </rect>
                                                    <rect width="600" height="40" y="240" fill="#FF0000">
                                                    </rect>

                                                    <!-- Stars (simplified representation) -->
                                                    <circle cx="30" cy="30" r="5" fill="#fff">
                                                    </circle>
                                                    <circle cx="90" cy="30" r="5" fill="#fff">
                                                    </circle>
                                                    <circle cx="150" cy="30" r="5" fill="#fff">
                                                    </circle>
                                                    <circle cx="210" cy="30" r="5" fill="#fff">
                                                    </circle>
                                                    <circle cx="270" cy="30" r="5" fill="#fff">
                                                    </circle>
                                                    <circle cx="30" cy="70" r="5" fill="#fff">
                                                    </circle>
                                                    <circle cx="90" cy="70" r="5" fill="#fff">
                                                    </circle>
                                                    <circle cx="150" cy="70" r="5" fill="#fff">
                                                    </circle>
                                                    <circle cx="210" cy="70" r="5" fill="#fff">
                                                    </circle>
                                                    <circle cx="270" cy="70" r="5" fill="#fff">
                                                    </circle>
                                                    <circle cx="30" cy="110" r="5" fill="#fff">
                                                    </circle>
                                                    <circle cx="90" cy="110" r="5" fill="#fff">
                                                    </circle>
                                                    <circle cx="150" cy="110" r="5" fill="#fff">
                                                    </circle>
                                                    <circle cx="210" cy="110" r="5" fill="#fff">
                                                    </circle>
                                                    <circle cx="270" cy="110" r="5" fill="#fff">
                                                    </circle>
                                                </svg>
                                            </span> English</div>
                                    </a>
                                </li>
                                <li>
                                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        href="https://anjinmetalindustries.com/set-locale/bn">
                                        <div class="inline-flex items-center gap-2"><span><svg class="h-4 w-6"
                                                    viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                    role="img" preserveAspectRatio="xMidYMid meet">
                                                    <path fill="#006A4D"
                                                        d="M36 27a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V9a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v18z">
                                                    </path>
                                                    <circle fill="#F42A41" cx="16" cy="17.5" r="7">
                                                    </circle>
                                                </svg></span> বাংলা</div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="flex text-slate-200  text-lg justify-center ">
                        <a href="#" class="border-x py-2 px-2"><svg fill="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg></a>

                        <a href="#" class="border-r py-2 px-2"><svg class="h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                                viewBox="0 0 48 48">
                                <path fill="#f44336"
                                    d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5 V37z">
                                </path>
                                <path fill="#fff"
                                    d="M36.499,25.498c-0.276-0.983-1.089-1.758-2.122-2.021C32.506,23,24,23,24,23s-8.506,0-10.377,0.478 c-1.032,0.263-1.846,1.037-2.122,2.021C11,27.281,11,31,11,31s0,3.719,0.501,5.502c0.276,0.983,1.089,1.758,2.122,2.021 C15.494,39,24,39,24,39s8.505,0,10.377-0.478c1.032-0.263,1.846-1.037,2.122-2.021C37,34.719,37,31,37,31S37,27.281,36.499,25.498z">
                                </path>
                                <path fill="#f44336"
                                    d="M16.333 37L14.667 37 14.667 26.655 13 26.655 13 25 18 25 18 26.655 16.333 26.655zM23 37h-1.5l-.167-1.132C20.675 36.579 19.892 37 19.283 37c-.533 0-.908-.231-1.092-.653C18.083 36.083 18 35.687 18 35.092V27.5h1.667v7.757c.042.24.217.33.433.33.333 0 .867-.363 1.233-.843V27.5H23V37zM35 32.663v-2.701c0-.777-.192-1.338-.533-1.702-.458-.496-1.117-.76-1.942-.76-.842 0-1.492.264-1.967.76C30.2 28.623 30 29.218 30 29.995v4.593c0 .768.225 1.313.575 1.669C31.05 36.752 31.7 37 32.567 37c.858 0 1.533-.256 1.983-.785.2-.231.333-.496.392-.785C34.95 35.298 35 34.943 35 34.522h-1.667v.661c0 .38-.375.694-.833.694s-.833-.314-.833-.694v-2.52H35zM31.667 29.392c0-.388.375-.694.833-.694s.833.306.833.694v2.123h-1.667V29.392zM28.783 28.492c-.208-.646-.717-1.001-1.35-1.01-.808-.008-1.142.414-1.767 1.142V25H24v12h1.5l.167-1.034C26.192 36.611 26.875 37 27.433 37c.633 0 1.175-.331 1.383-.977.1-.348.175-.67.183-1.399V30.28C29 29.461 28.892 28.84 28.783 28.492zM27.333 34.41c0 .869-.2 1.167-.65 1.167-.258 0-.75-.174-1.017-.439v-5.686c.267-.265.758-.521 1.017-.521.45 0 .65.273.65 1.142V34.41z">
                                </path>
                                <path fill="#fff"
                                    d="M15 9l1.835.001 1.187 5.712.115 0 1.128-5.711 1.856-.001L19 16.893V21h-1.823l-.003-3.885L15 9zM21.139 14.082c0-.672.219-1.209.657-1.606.437-.399 1.024-.6 1.764-.601.675 0 1.225.209 1.655.63.429.418.645.96.645 1.622l.003 4.485c0 .742-.209 1.326-.63 1.752C24.812 20.788 24.234 21 23.493 21c-.714 0-1.281-.221-1.712-.656-.428-.435-.64-1.023-.641-1.76l-.003-4.503L21.139 14.082 21.139 14.082zM22.815 18.746c0 .236.057.423.178.553.115.128.279.193.495.193.221 0 .394-.066.524-.201.129-.129.196-.314.196-.547l-.003-4.731c0-.188-.069-.342-.201-.459-.131-.116-.305-.175-.519-.175-.199 0-.361.06-.486.176-.124.117-.186.271-.186.459L22.815 18.746zM32 12v9h-1.425l-.227-1.1c-.305.358-.622.63-.953.815C29.067 20.901 28.747 21 28.437 21c-.384 0-.671-.132-.866-.394-.195-.259-.291-.65-.291-1.174L27.276 12h1.653l.004 6.825c0 .204.036.355.106.449.066.09.183.14.335.14.124 0 .278-.062.46-.186.188-.122.358-.281.512-.471L30.344 12 32 12z">
                                </path>
                            </svg></a>



                        <a href="#" class="border-r py-2 px-2"><svg fill="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                </path>
                            </svg></a>

                    </div>


                    <button id="dropdownHoverButton1" data-dropdown-toggle="dropdownHover1"
                        data-dropdown-trigger="hover"
                        class=" border text-xs md:text-base font-medium inline-flex items-center pl-2 "
                        type="button">
                        Quick Link <p class="bg-yellow-300 py-2 px-2 ml-2"><i class="fa-solid fa-caret-down"></i></p>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownHover1"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-sm shadow w-44 dark:bg-gray-700"
                        style="transform: translate3d(1252px, 42.8px, 0px);">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownHoverButton1">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Student
                                    Panel</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Blog</a>
                            </li>

                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <!--Start Banner section-->
    <section class="bg-[#294A70]">
        <div class="mx-auto max-w-7xl p-4 md:py-6">
            <div class="grid md:grid-cols-3 gap-4">
                <div class=" md:col-span-2 flex flex-col md:flex-row gap-4 items-center"><img
                        src="../../../../public/Images/logo.png" alt="Logo Anjin Metal Industries Ltd."
                        class="block h-16">
                    <div class="text-slate-200 flex flex-col text-start md:text-left"><a
                            class="text-xl md:text-3xl font-bold" href="/">E-khulna.</a>
                        <p class="text-xs md:text-sm">Established in 2021</p>
                    </div>
                </div>
                <div class="col-span-1">
                    <form>
                        <div class="flex pt-3">
                            <div class="relative w-full">
                                <input type="search" id="location-search"
                                    class="block p-2.5 w-full z-20 text-sm text-gray-900 rounded-e-full rounded-s-full border border-gray-3000"
                                    placeholder="Search..." required="">
                                <button type="submit"
                                    class="absolute top-0 end-0 h-full p-2.5 text-sm font-medium text-white bg-blue-700 rounded-e-full border border-blue-700 hover:bg-blue-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true" data-slot="icon" class="w-5 h-5">
                                        <path fill-rule="evenodd"
                                            d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Search</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner section-->

    <!--Start navbar section-->
    <nav class="bg-white dark:bg-gray-900 border-b-4 border-[#ffab1f] z-50 sticky top-0">
        <div class="max-w-7xl mx-auto px-4 py-2 md:p-0">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div
                    class="flex items-center w-full md:w-auto justify-between md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse">
                    <div class="flex items-center gap-2 ">


                        <Link :href="route('cart')"
                            class="relative mr-2 hover:text-slate-500 dark:hover:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-900 focus:outline-none focus:bg-slate-100 dark:focus:bg-slate-900 focus:text-slate-500 dark:focus:text-slate-400 transition duration-150 ease-in-out">

                        <button type="button"
                            class="relative inline-flex items-center p-1 text-sm font-medium text-center  rounded-lg    focus:ring-blue-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-700  ">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg>

                            <span class="sr-only">Notifications</span>
                            <div
                                class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -end-2 dark:border-gray-900">
                                3
                            </div>
                        </button>

                        </Link>
                        <button title="Switch Dark/Light Mode"
                            class="inline-flex items-center justify-center p-2 rounded text-slate-400 dark:text-slate-500 hover:text-slate-500 dark:hover:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-900 focus:outline-none focus:bg-slate-100 dark:focus:bg-slate-900 focus:text-slate-500 dark:focus:text-slate-400 transition duration-150 ease-in-out"><!----><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"
                                class="w-5 h-5 fill-current">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z">
                                </path>
                            </svg>
                        </button>

                        <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar"
                            class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            type="button">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="" alt="user photo">
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownAvatar"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                <div>Bonnie Green</div>
                                <div class="font-medium truncate">name@flowbite.com</div>
                            </div>
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownUserAvatarButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                            </ul>
                            <div class="py-2">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                    Sign out
                                </a>
                            </div>
                        </div>
                    </div>
                    <button data-collapse-toggle="navbar-primary" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-sm md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-primary" aria-expanded="false"><span class="sr-only">
                            Open main menu
                        </span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 1h15M1 7h15M1 13h15">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="items-center hidden w-full md:w-auto md:flex md:order-1" id="navbar-primary">
                    <ul
                        class="flex flex-col gap-2 font-medium border border-gray-100 rounded-sm rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 dark:text-gray-200 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>

                            <Link :href="route('index')" aria-current="page"
                                class="hover:bg-[#ffab1f] hover:text-white block px-2 py-3 text-base font-medium">
                            Home
                            </Link>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="Products3"
                                data-dropdown-trigger="hover"
                                class="font-medium w-full md:w-auto text-base px-2 py-3 text-center inline-flex items-center hover:bg-[#ffab1f] hover:text-white">Products
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" data-slot="icon" class="w-4 h-4 ms-1 items-center">
                                    <path fill-rule="evenodd"
                                        d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                        clip-rule="evenodd">
                                    </path>
                                </svg>
                            </button>
                            <div id="Products3"
                                class="z-20 hidden font-medium bg-white rounded-sm shadow min-w-44 dark:bg-gray-700 dark:divide-gray-600"
                                data-popper-placement="top"
                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(243.2px, -28px, 0px);">
                                <ul class="text-base text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <Link
                                            :href="route('products')"
                                            class="border-b block px-4 py-2 hover:bg-[#ffab1f] hover:text-white dark:hover:bg-gray-600 dark:hover:text-white">
                                        All Products
                                        </Link>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="Application4"
                                data-dropdown-trigger="hover"
                                class="font-medium w-full md:w-auto text-base px-2 py-3 text-center inline-flex items-center hover:bg-[#ffab1f] hover:text-white">Application
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" data-slot="icon" class="w-4 h-4 ms-1 items-center">
                                    <path fill-rule="evenodd"
                                        d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                        clip-rule="evenodd">
                                    </path>
                                </svg>
                            </button>
                            <div id="Application4"
                                class="z-20 hidden font-medium bg-white rounded-sm shadow min-w-44 dark:bg-gray-700 dark:divide-gray-600"
                                data-popper-placement="top"
                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(360.8px, -28px, 0px);">
                                <ul class="text-base text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a class="border-b block px-4 py-2 hover:bg-[#ffab1f] hover:text-white dark:hover:bg-gray-600 dark:hover:text-white"
                                            href="">
                                            Transportation
                                        </a>
                                    </li>
                                    <li>
                                        <a class="border-b block px-4 py-2 hover:bg-[#ffab1f] hover:text-white dark:hover:bg-gray-600 dark:hover:text-white"
                                            href="">
                                            Automotive
                                        </a>
                                    </li>
                                    <li>
                                        <a class="border-b block px-4 py-2 hover:bg-[#ffab1f] hover:text-white dark:hover:bg-gray-600 dark:hover:text-white"
                                            href="">
                                            Cooking Utensils
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a aria-current="page"
                                class="hover:bg-[#ffab1f] hover:text-white block px-2 py-3 text-base font-medium"
                                href="">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a aria-current="page"
                                class="hover:bg-[#ffab1f] hover:text-white block px-2 py-3 text-base font-medium"
                                href="">
                                Gallery
                            </a>
                        </li>
                        <li>
                            <a aria-current="page"
                                class="hover:bg-[#ffab1f] hover:text-white block px-2 py-3 text-base font-medium"
                                href="">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!--End navbar section-->
</template>
