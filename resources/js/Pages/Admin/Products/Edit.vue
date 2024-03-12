<script setup>
    import AppLayout from '@/Layouts/Admin/AppLayout.vue';
    import Breadcrumb from '@/Components/Admin/Breadcrumb.vue';
    import InputLabel from '@/Components/Admin/InputLabel.vue';
</script>
<template>
    <AppLayout>
        <Breadcrumb></Breadcrumb>

        <div class="py-4 bg-white px-4 mt-4 text-center my-4">
            <h1 class="font-bold text-xl text-blue-600">Add Product</h1>
        </div>

        <form>
            <div class="grid gap-6 mb-6 md:grid-cols-3">
                <div>
                    <form>
                        <InputLabel>Product Category</InputLabel>
                        <select id="category" name="category"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>Choose a category</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </form>
                </div>
                <div>
                    <form>
                        <InputLabel>Select an Brand</InputLabel>
                        <select id="brand" name="brand"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>Choose a brand</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </form>
                </div>
                <div>
                    <form>
                        <InputLabel>Select an Vendor</InputLabel>
                        <select id="vendor" name="vendor"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>Choose a Vendor</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </form>
                </div>
                <div>
                    <InputLabel>Product Title</InputLabel>
                    <input type="text" id="title" name="title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="John" required />
                </div>
                <div>
                    <InputLabel>Cost Price</InputLabel>
                    <input type="float" id="cost_price" name="cost_price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="$00" required />
                </div>
                <div>
                    <InputLabel>Sale Price</InputLabel>
                    <input type="number" id="sale_price" name="sale_price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="$00" required />
                </div>
                <div>
                    <InputLabel>Quantity</InputLabel>
                    <input type="number" id="quantity" name="quantity"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="0" required />
                </div>
                <div>
                    <InputLabel>Minimum Quantity</InputLabel>
                    <input type="number" id="min_quantity" name="min_quantity"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="0" required />
                </div>
                <div>
                    <InputLabel>Sizes</InputLabel>
                    <input type="string" id="seizes" name="seizes"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="sizes" required />
                </div>
                <div>
                    <InputLabel>Color</InputLabel>
                    <input type="string" id="color" name="color"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Color" required />
                </div>
                <div>
                    <InputLabel>warranty</InputLabel>
                    <input type="string" id="warranty" name="warranty"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="warranty" required />
                </div>
                <div>

                    <form>
                        <InputLabel>Status</InputLabel>
                        <select id="status" name="status"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>Choose a Vendor</option>
                            <option value="US">True</option>
                            <option value="CA">False</option>

                        </select>
                    </form>
                </div>
            </div>
            <div class="mb-6">
                <InputLabel>Discriptions</InputLabel>
                <textarea name="description" id="description" rows="5"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "></textarea>
            </div>
            <div class="text-center">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">
                    Submit
                </button>
            </div>
        </form>


    </AppLayout>

</template>
