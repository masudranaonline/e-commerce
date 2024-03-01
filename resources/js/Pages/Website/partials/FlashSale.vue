<script setup>
    import Product from '@/components/website/Product.vue'
</script>

<template>
    <div class="mx-auto max-w-7xl my-6  ">
        <!-- <h1 class="text-2xl font-medium text-gray-500">FlashSale</h1> -->
        <div class="bg-white rounded-sm shadow-md px-2 py-6">
            <div class="flex justify-between border-b-2 border-[#ffab1f] pb-4">
                <div class="">
                    <h1 class="text-2xl font-medium text-gray-500">FlashSale</h1>
                </div>
                <div class="">
                    <button
                        class="text-sm border border-gray-400 text-red-600 font-medium hover:bg-blue-400 hover:text-white px-2 py-1 rounded-sm">Shop
                        More</button>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-2 md:gap-4 py-4">
                <Product></Product>
                <Product></Product>
                <Product></Product>
                <Product></Product>
                <Product></Product>
                <Product></Product>
                
               

            </div>
        </div>
    </div>
</template>