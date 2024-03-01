<script setup>
    import Rating from './Rating.vue'
</script>

<template>
    <div class="border rounded-sm shadow-sm hover:shadow-md">
        <img src="../../../../public/Images/product1.jpg" alt="">
        <div class="px-2 py-4">
            <h4 class="text-base font-semibold">Magic Moshari to Mosquito</h4>

            <Rating></Rating>

            <div class="flex justify-between items-center py-3">
                <div class="">
                    <span class="text-red-600 text-base font-semibold">৳203</span>
                    <p class="flex justify-start items-center space-x-2"><del
                            class="text-gray-400">৳300</del><span class="text-gray-700">-20%</span>
                    </p>

                </div>
                <div class="pt-4 md:pt-0">


                    <button
                        class="text-sm font-medium space-x-2 border px-2 py-1 bg-gray-400  hover:bg-yellow-400 text-white rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                    </button>
                </div>

            </div>
            <div class="flex justify-between">
                <button
                    class="text-2xs md:text-xs lg:text-sm font-medium space-x-2 border px-2 py-1 bg-blue-600  hover:bg-blue-800 text-white rounded-sm">
                    Add to cart
                </button>
                <button
                    class="text-2xs md:text-xs lg:text-sm font-medium space-x-2 border px-2 py-1 bg-yellow-400  hover:bg-yellow-500 text-white rounded-sm">
                    Order Now
                </button>
            </div>
        </div>
    </div>
</template>
