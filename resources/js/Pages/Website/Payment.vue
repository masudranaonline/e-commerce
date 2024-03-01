<script setup>
    import Layout from '@/Layouts/Website/Layout.vue';
</script>

<template>

   <Layout>
    <div class="mx-auto max-w-7xl py-4 ">
        <div class="grid md:grid-cols-4 gap-4">
            <div class="md:col-span-3">
                <h1 class="text-xl font-semibold text-gray-700 py-4">Select Payment Method</h1>

                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-2 px-2">
                    <div class="border px-4 pt-4 pb-6 flex flex-col text-center bg-white">
                        <img src="/Images/card.png" class="w-12 h-12 mx-auto pb-1" alt="">
                        <p class="text-xs font-semibold text-slate-700">Credit/Debit Card</p>
                        <span class="text-xs text-gray-400 pt-1 font-medium">Credit/Debit Card</span>
                    </div>
                    <div class="border px-4 pt-4 pb-6 flex flex-col text-center bg-white">
                        <img src="/Images/nagod2.png" class="w-12 h-12 mx-auto pb-1" alt="">
                        <p class="text-xs font-semibold text-slate-700">Nagad</p>
                        <span class="text-xs text-gray-400 pt-1 font-medium"></span>
                    </div>
                    <div class="border px-4 pt-4 pb-6 flex flex-col text-center bg-white">
                        <img src="/Images/installment.png" class="w-12 h-12 mx-auto" alt="">
                        <p class="text-xs font-semibold text-slate-700">Installment</p>
                        <span class="text-xs text-gray-400 pt-1 font-medium"></span>
                    </div>
                    <div class="border px-4 pt-4 pb-6 flex flex-col text-center bg-white">
                        <img src="/Images/dbbl.png" class="w-12 h-12 mx-auto" alt="">
                        <p class="text-xs font-semibold text-slate-700">DBBL Nexus Card</p>
                        <span class="text-xs text-gray-400 pt-1 font-medium"></span>
                    </div>
                    <div class="border px-4 pt-4 pb-6 flex flex-col text-center bg-white">
                        <img src="/Images/roket2.png" class="w-12 h-12 mx-auto" alt="">
                        <p class="text-xs font-semibold text-slate-700">Rocket</p>
                        <span class="text-xs text-gray-400 pt-1 font-medium"></span>
                    </div>
                    <div class="border px-4 pt-4 pb-6 flex flex-col text-center bg-white">
                        <img src="/Images/bkash2.png" class="w-12 h-12 mx-auto" alt="">
                        <p class="text-xs font-semibold text-slate-700">Save bKash Account</p>
                        <span class="text-xs text-gray-400 pt-1 font-medium"></span>
                    </div>
                    <div class="border px-4 pt-4 pb-6 flex flex-col text-center bg-white">
                        <img src="/Images/bkash2.png" class="w-12 h-12 mx-auto" alt="">
                        <p class="text-xs font-semibold text-slate-700">Cash On Delivery</p>
                        <span class="text-xs text-gray-400 pt-1 font-medium">Cash On Delivery</span>
                    </div>

                </div>
            </div>
            <div class="col-span-1 px-4 ">
                <div class="bg-white px-4 py-6">
                    <h1 class="text-xl font-medium text-gray-700">Order Summary</h1>
                    <div class="flex justify-between py-2">
                        <p class="text-2xs text-gray-400">Subtotal (1 Items and shipping fee included)</p>
                        <span class="text-sm text-gray-700">৳ 199</span>
                    </div>
                    <div class="flex justify-between py-2">
                        <p class="text-base font-semibold">Total Amount</p>
                        <span class="font-semibold">৳ 199</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </Layout>
</template>
