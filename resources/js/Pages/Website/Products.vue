<script setup>
    // import Product from '../components/Product.vue'
    import Product from '@/Components/website/Product.vue';
    import Layout from '@/Layouts/Website/Layout.vue';

</script>

<template>

    <Layout>
        <div class="mx-auto max-w-7xl py-5">
            <div class="md:grid grid-cols-4 gap-1 ">
                <div class="">
                    <div class="bg-white p-4 ">
                        <h1 class="border-b border-[#ffab1f] py-2 text-xl font-medium text-gray-500">Category</h1>
                        <ul class="leading-7">
                            <li class=" text-gray-400 hover:text-red-600 hover:bg-gray-200">
                                <a href="">
                                    <span class="text-sm font-medium ">Facial Cleansers</span>
                                </a>
                            </li>
                            <li class=" text-gray-400 hover:text-red-600 hover:bg-gray-200">
                                <a href="">
                                    <span class="text-sm font-medium ">Facial Cleansers</span>
                                </a>
                            </li>
                            <li class=" text-gray-400 hover:text-red-600 hover:bg-gray-200">
                                <a href="">
                                    <span class="text-sm font-medium ">Facial Cleansers</span>
                                </a>
                            </li>
                            <li class=" text-gray-400 hover:text-red-600 hover:bg-gray-200">
                                <a href="">
                                    <span class="text-sm font-medium ">Facial Cleansers</span>
                                </a>
                            </li>
                            <li class=" text-gray-400 hover:text-red-600 hover:bg-gray-200">
                                <a href="">
                                    <span class="text-sm font-medium ">Facial Cleansers</span>
                                </a>
                            </li>
                            <li class=" text-gray-400 hover:text-red-600 hover:bg-gray-200">
                                <a href="">
                                    <span class="text-sm font-medium ">Facial Cleansers</span>
                                </a>
                            </li>
                            <li class=" text-gray-400 hover:text-red-600 hover:bg-gray-200">
                                <a href="">
                                    <span class="text-sm font-medium ">Facial Cleansers</span>
                                </a>
                            </li>
                            <li class=" text-gray-400 hover:text-red-600 hover:bg-gray-200">
                                <a href="">
                                    <span class="text-sm font-medium ">Facial Cleansers</span>
                                </a>
                            </li>
                            <li class=" text-gray-400 hover:text-red-600 hover:bg-gray-200">
                                <a href="">
                                    <span class="text-sm font-medium ">Facial Cleansers</span>
                                </a>
                            </li>
    
    
                        </ul>
                        <button class="text-sm font-medium text-red-600 py-2">+ View More</button>
    
                        <div class="">
                            <h1 class="border-b border-[#ffab1f] py-2 text-xl font-medium text-gray-500">Brand</h1>
                            <ul class="w-48 text-sm font-medium text-gray-900 bg-white  ">
                                <li class="w-full ">
                                    <div class="flex items-center ">
                                        <input id="list-radio-license" type="checkbox" value="" name="list-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="list-radio-license"
                                            class="w-full py-1 ms-2 text-sm font-medium text-gray-500 dark:text-gray-300">Driver
                                            License </label>
                                    </div>
                                </li>
                                <li class="w-full ">
                                    <div class="flex items-center ">
                                        <input id="list-checkbox-id" type="checkbox" value="" name="list-checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="list-checkbox-id"
                                            class="w-full py-1 ms-2 text-sm font-medium text-gray-500 dark:text-gray-300">State
                                            ID</label>
                                    </div>
                                </li>
                                <li class="w-full ">
                                    <div class="flex items-center ">
                                        <input id="list-checkbox-military" type="checkbox" value=""
                                            name="list-checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="list-checkbox-military"
                                            class="w-full py-1 ms-2 text-sm font-medium text-gray-500 dark:text-gray-300">US
                                            Military</label>
                                    </div>
                                </li>
                                <li class="w-full ">
                                    <div class="flex items-center ">
                                        <input id="list-checkbox-passport" type="checkbox" value=""
                                            name="list-checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="list-checkbox-passport"
                                            class="w-full py-1 ms-2 text-sm font-medium text-gray-500 dark:text-gray-300">US
                                            Passport</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="">
                            <h1 class="border-b border-[#ffab1f] py-2 text-xl font-medium text-gray-500">price</h1>
                            <div class="flex space-x-3 items-center py-3">
                                <input type="number" class="w-1/4 h-8 border-gray-400 " placeholder="Min">
                                <span>-</span>
                                <input type="number" class="w-1/4 h-8 border-gray-400" placeholder="Max">
                                <button
                                    class="border px-4 py-1 text-base bg-orange-500 rounded-sm hover:bg-orange-600 text-white">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-span-3 ">
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2">
                        <Product></Product>
                        <Product></Product>
                        <Product></Product>
                        <Product></Product>
                        <Product></Product>
                        <Product></Product>
                        <Product></Product>
                        <Product></Product>
                        <Product></Product>
                        <Product></Product>
                        <Product></Product>
                    </div>
    
                    
                    <div class="py-4 flex flex-row justify-center">
                        <nav aria-label="Page navigation example">
                            <ul class="flex items-center -space-x-px h-10 text-base">
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        <span class="sr-only">Previous</span>
                                        <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M5 1 1 5l4 4" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                </li>
                                <li>
                                    <a href="#" aria-current="page"
                                        class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        <span class="sr-only">Next</span>
                                        <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
    
    
    
    
    
    
    
            </div>
        </div>
    </Layout>


</template>
