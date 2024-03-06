<script setup>
    import Product from '@/Components/Website/Product.vue'
</script>
<template>
    <div class="mx-auto max-w-7xl my-6  ">
        <!-- <h1 class="text-2xl font-medium text-gray-500">FlashSale</h1> -->
        <div class="bg-white rounded-sm shadow-md px-2 py-8">

            <div class=" border-b-2 border-[#ffab1f] pb-4">
                <h1 class="text-2xl font-medium text-gray-500">Just For You</h1>

            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-2 md:gap-4 py-4">
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
               <Product></Product>
               <Product></Product>
               <Product></Product>
               <Product></Product>
               <Product></Product>
            </div>

            <div class="text-center">
                <button
                    class="text-sm border border-gray-400 text-red-600 font-medium hover:bg-blue-400 hover:text-white px-4 py-1.5 rounded-sm">Load
                    More</button>
            </div>
        </div>
    </div>
</template>
