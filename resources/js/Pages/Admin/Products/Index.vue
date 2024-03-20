<script setup>
    import AppLayout from '@/Layouts/Admin/AppLayout.vue';
    import Breadcrumb from '@/Components/Admin/Breadcrumb.vue';
    import {
        Link
    } from '@inertiajs/vue3'

    const props = defineProps({
        products: Object
    })
</script>

<template>
    <AppLayout>
        <Breadcrumb></Breadcrumb>
        <div class="py-4 bg-white px-4 mt-4 text-center my-4">
            <Link :href="route('products.create')"
                class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5"
                type="button">
            Add Products
            </Link>
        </div>

        <div class="bg-white py-4 mb-4 rounded-xl">
            <form action="" method="GET" class="flex md:flex-row flex-col gap-8 justify-center">
                <div class="bg-white border border-gray-200 rounded-3xl">
                    <select name="status"
                        class="w-full bg-transparent text-md text-gray-900 placeholder-gray-200 font-bold outline-none border-none focus:outline-none">
                        <option value="" selected>Select status...</option>
                        <option>Hello</option>
                        <option>Hello</option>
                        <option>Hello</option>

                    </select>
                </div>
                <div class="bg-white border border-gray-200 rounded-3xl">
                    <select
                        class="w-full bg-transparent text-md text-gray-900 placeholder-gray-200 font-bold outline-none"
                        name="location">
                        <option disabled selected>Select location...</option>

                        <option></option>

                    </select>
                </div>
                <div class="bg-white border border-gray-200 rounded-3xl">
                    <select
                        class="w-full bg-transparent text-md text-gray-900 placeholder-gray-200 font-bold outline-none"
                        name="category">
                        <option disabled selected>Select category...</option>

                        <option></option>

                    </select>
                </div>
                <div class="bg-white">
                    <input
                        class="appearance-none px-6 py-2 w-full text-sm text-gray-600 font-bold bg-white placeholder-gray-300 outline-none border border-gray-200 focus:ring-1 focus:ring-green-200 rounded-full"
                        type="text" name="title" placeholder="Search by title..." value="">
                </div>
                <div>
                    <button type="submit"
                        class="inline-block place-items-center md:max-w-max max-w-full w-full px-8 py-2 text-lg text-center text-white font-bold bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z"
                                fill="rgba(255,255,255,1)" />
                        </svg>
                    </button>
                </div>
                <a href=""
                    class="inline-block place-items-center md:max-w-max max-w-full w-full px-8 py-2 text-md text-center text-black font-normal bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:ring-gray-200 rounded-full">
                    Clear filter
                </a>
            </form>
        </div>



        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4 border">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Product name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="product in props.products.data" :key="product.id"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-2">
                            {{ product . id }}
                        </td>
                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 dark:text-white">
                            {{ product . title }}
                        </th>
                        <td class="px-6 py-2">
                            <img src="https://placehold.co/50" alt="">
                        </td>
                        <td class="px-6 py-2">
                            {{ product . colors }}
                        </td>
                        <td class="px-6 py-2">
                            {{ product . category . name }}
                        </td>
                        <td class="px-6 py-2">
                            ${{ product . sale_price }}
                        </td>
                        <td class="px-6 py-2">
                            {{ product . status }}
                        </td>

                        <td class="px-6 py-2">
                            <div class="flex gap-3">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>

                                </a>
                                <Link :href="route('products.edit', { product: product.id })"
                                    class="font-medium text-blue-600  hover:underline">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                                </Link>
                                <a href="#" class="font-medium text-blue-600  hover:underline">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>

                                </a>
                            </div>
                        </td>

                    </tr>
                </tbody>

            </table>

        </div>



    </AppLayout>

</template>
