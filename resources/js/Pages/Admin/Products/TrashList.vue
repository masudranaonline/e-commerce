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
        <Breadcrumb />

        <div class="py-4 bg-white px-4 mt-4 text-center my-4 shadow-md">
            <h1 class="font-bold text-xl text-blue-600">Deleted Product</h1>
        </div>

        <section class="bg-gray-50 py-3 sm:py-5">
            <div class="px-4 mx-auto max-w-screen-2xl lg:px-12">
                <div class="relative overflow-hidden bg-white shadow-md ">
                    <div
                        class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
                        <div class="flex items-center flex-1 space-x-4">

                            <div class=" border px-2 py-2 rounded-md bg-gray-200 border-gray-200">
                                <div class="flex items-center ps-3">
                                    <input id="vue-checkbox-list" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="vue-checkbox-list"
                                        class="w-full  ms-2 text-sm font-medium text-gray-900">Select
                                        all</label>
                                </div>
                            </div>
                            <h5>
                                <span class="text-gray-500">Total Selected:</span>
                            </h5>
                        </div>
                        <div
                            class="flex flex-col flex-shrink-0 space-y-3 md:flex-row md:items-center lg:justify-end md:space-y-0 md:space-x-3">
                            <button type="button"
                                class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 hover:bg-gray-200 rounded-lg">
                                Restore all
                            </button>
                            <button type="button"
                                class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-200">
                                Delete All
                            </button>
                            <!-- <DengerButton>Deleted All</DengerButton> -->
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-all" type="checkbox"
                                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500">
                                            <label for="checkbox-all" class="sr-only">checkbox</label>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-4 py-3">Title</th>
                                    <th scope="col" class="px-4 py-3">Image</th>
                                    <th scope="col" class="px-4 py-3">Color</th>
                                    <th scope="col" class="px-4 py-3">Category</th>
                                    <th scope="col" class="px-4 py-3">Price</th>
                                    <th scope="col" class="px-4 py-3">Status</th>
                                    <th scope="col" class="px-4 py-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="product in props.products.data" :key="product.id"
                                    class="border-b hover:bg-gray-100 ">
                                    <td class="w-4 px-4 py-3">
                                        <div class="flex items-center">
                                            <input id="checkbox-table-search-1" type="checkbox"
                                                onclick="event.stopPropagation()"
                                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <th scope="row" class="flex items-center px-4 py-2 font-medium text-gray-900">
                                        {{ product . title }}
                                    </th>
                                    <td class="px-4 py-2">
                                        <img :src="product.media.length > 0 ? product.media[0].original_url :
                                            'http://[::1]:5173/public/Images/placeholder.jpeg'"
                                            class="w-12 h-12" alt="">
                                    </td>
                                    <td class="px-4 py-2 font-medium text-gray-900">
                                        {{ product.colors }}
                                    </td>
                                    <td class="px-4 py-2 font-medium text-gray-900">
                                        {{ product . category . name }}
                                    </td>
                                    <td class="px-4 py-2 font-medium text-gray-900">
                                        {{ product.sale_price }}
                                    </td>
                                    <td class="px-4 py-2 font-medium text-gray-900">
                                        {{ product.status }}
                                    </td>
                                    <td class="px-4 py-2">
                                        <div class="flex gap-3">
                                            <a href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                                </svg>
                                            </a>
                                            <Link :href="route('product.forceDelete')">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>
                                            </Link>

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>


    </AppLayout>

</template>
