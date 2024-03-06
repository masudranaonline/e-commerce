<script setup>
    import Categories from '@/Components/Website/Categories.vue'
</script>

<template>
    <div class="mx-auto max-w-7xl">
        <!-- <h1 class="text-2xl font-medium text-gray-500 pb-2">Categories</h1> -->
        <div class=" bg-white py-6 px-4">
            <div class="flex justify-between border-b-2 border-[#ffab1f] pb-4">
                <div class="">
                    <h1 class="text-2xl font-medium text-gray-500">Categories</h1>
                </div>
                <div class="">
                    <button
                        class="text-sm border border-gray-400 text-red-600 font-medium hover:bg-blue-400 hover:text-white px-2 py-1 rounded-sm">Show
                        More</button>
                </div>
            </div>
            <div class="grid grid-cols-3 md:grid-cols-6 lg:grid-cols-8 gap-2 pt-4">
                <Categories></Categories>
                <Categories></Categories>
                <Categories></Categories>
                <Categories></Categories>
                <Categories></Categories>
                <Categories></Categories>
                <Categories></Categories>
                <Categories></Categories>
                <Categories></Categories>
                <Categories></Categories>
                <Categories></Categories>
                <Categories></Categories>
                <Categories></Categories>
                <Categories></Categories>
                <Categories></Categories>
                <Categories></Categories>
            </div>
        </div>
    </div>
</template>
