<script setup>
    // import CartProduct from '@/components/website/CartProduct.vue';
    // import OrderSummary from '@/components/website/OrderSummary.vue';

    import CartProduct from '@/Components/website/CartProduct.vue';
    import OrderSummary from '@/Components/website/OrderSummary.vue';

    import Layout from '@/Layouts/Website/Layout.vue';
</script>

<template>


    <Layout>
        <section
            class=" relative z-10 after:contents-[''] after:absolute after:z-0 after:h-full xl:after:w-1/3 after:top-0 after:right-0  my-6 ">
            <div class="w-full max-w-7xl px-4 md:px-0 lg-6 mx-auto relative z-10 bg-white shadow-md border">
                <div class="grid grid-cols-12">
                    <div
                        class="col-span-12 xl:col-span-8 lg:pr-8 pt-14 pb-4 pr-4 pl-4  w-full max-xl:max-w-3xl max-xl:mx-auto">
                        <div class="flex items-center justify-between pb-8 border-b border-gray-300">
                            <h2 class="font-manrope font-bold text-2xl leading-10 text-black">Shopping Cart</h2>
                            <h2 class="font-manrope font-semibold text-xl leading-10 text-black">3 Items</h2>
                        </div>
                        <div class="grid grid-cols-12 mt-4 max-md:hidden pb-4 border-b border-gray-200">
                            <div class="col-span-12 md:col-span-7">
                                <p class="font-normal text-lg leading-8 text-gray-400">Product Details</p>
                            </div>
                            <div class="col-span-12 md:col-span-5">
                                <div class="grid grid-cols-5">
                                    <div class="col-span-3">
                                        <p class="font-normal text-lg leading-8 text-gray-400 text-center">Quantity</p>
                                    </div>
                                    <div class="col-span-2">
                                        <p class="font-normal text-lg leading-8 text-gray-400 text-center">Total</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <CartProduct></CartProduct>
                        <CartProduct></CartProduct>



                        <div class="flex items-center justify-end mt-8">
                            <button
                                class="flex items-center px-5 py-3 rounded-full gap-2 border-none outline-0 font-semibold text-lg leading-8 text-indigo-600 shadow-sm shadow-transparent transition-all duration-500 hover:shadow-indigo-300 hover:bg-indigo-50">
                                Add Coupon Code
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 22 22" fill="none">
                                    <path
                                        d="M12.7757 5.5L18.3319 11.0562M18.3319 11.0562L12.7757 16.6125M18.3319 11.0562L1.83203 11.0562"
                                        stroke="#4F46E5" stroke-width="1.6" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div
                        class=" col-span-12 xl:col-span-4 bg-slate-50 w-full max-xl:px-6 max-w-3xl xl:max-w-lg mx-auto lg:pl-8 py-24 px-2">
                        <h2 class="font-manrope font-bold text-3xl leading-10 text-black pb-8 border-b border-gray-300">
                            Order Summary</h2>
                        <OrderSummary></OrderSummary>
                    </div>
                </div>
            </div>
        </section>
    </Layout>




</template>
