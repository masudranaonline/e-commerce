<script setup>
    import AppLayout from '@/Layouts/Admin/AppLayout.vue';
    import Breadcrumb from '@/Components/Admin/Breadcrumb.vue';
    import InputLabel from '@/Components/Admin/InputLabel.vue';
    import ImageInput from '@/Components/ImageInput.vue';
    import {
        useForm
    } from '@inertiajs/vue3';

    const props = defineProps({
        product: Object,
        categories: Object,
        brands: Object,
        vendors: Object
    })

    const form = useForm({
        category_id: props.product.category_id,
        brand_id: props.product.brand_id,
        vendor_id: props.product.vendor_id,
        title: props.product.title,
        description: props.product.description,
        cost_price: props.product.cost_price,
        sale_price: props.product.sale_price,
        quantity: props.product.quantity,
        min_quantity: props.product.min_quantity,
        sizes: props.product.sizes,
        colors: props.product.colors,
        warranty: props.product.warranty,
        status: props.product.status,
        // product_images: '',
    });

    const SubmitProductUpdate = async () => {
        await form.put(route('products.update', {
            product: props.product.id
        }), {
            onSuccess: (Response) => {
                alert('Update Success');
            },
            onError: (Response) => {
                alert('Error');
            },
            preserveScroll: true
        })
    }
</script>
<template>
    <AppLayout>
        <Breadcrumb></Breadcrumb>

        <div class="py-4 bg-white px-4 mt-4 text-center my-4">
            <h1 class="font-bold text-xl text-blue-600">Add Product</h1>
        </div>

        <form @submit.prevent="SubmitProductUpdate" method="PUT" enctype="multipart/form-data">
            <div class="grid gap-6 mb-6 md:grid-cols-3">
                <div>
                    <InputLabel>Product Category</InputLabel>
                    <select id="category" name="category" v-model="form.category_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option v-for="category in props.categories" :key="category.id" :value="category.id">
                            {{ category.name }}
                        </option>
                    </select>
                </div>
                <div>
                    <InputLabel>Select an Brand</InputLabel>
                    <select id="brand" name="brand" v-model="form.brand_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

                        <option v-for="brand in props.brands" :key="brand.id" :value="brand.id">
                            {{ brand.name }}</option>
                    </select>
                </div>
                <div>
                    <InputLabel>Select an Vendor</InputLabel>
                    <select id="vendor" name="vendor" v-model="form.vendor_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

                        <option v-for="vendor in props.vendors" :key="vendor.id" :value="vendor.id">
                            {{ vendor.name }}</option>
                    </select>
                </div>
                <div>
                    <InputLabel>Product Title</InputLabel>
                    <input type="text" id="title" name="title" v-model="form.title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="John" required />
                </div>
                <div>
                    <InputLabel>Cost Price</InputLabel>
                    <input type="float" id="cost_price" name="cost_price" v-model="form.cost_price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="$00" required />
                </div>
                <div>
                    <InputLabel>Sale Price</InputLabel>
                    <input type="number" id="sale_price" name="sale_price" v-model="form.sale_price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="$00" required />
                </div>
                <div>
                    <InputLabel>Quantity</InputLabel>
                    <input type="number" id="quantity" name="quantity" v-model="form.quantity"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="0" required />
                </div>
                <div>
                    <InputLabel>Minimum Quantity</InputLabel>
                    <input type="number" id="min_quantity" name="min_quantity" v-model="form.min_quantity"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="0" required />
                </div>
                <div>
                    <InputLabel>Sizes</InputLabel>
                    <input type="string" id="seizes" name="seizes" v-model="form.sizes"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="sizes" required />
                </div>
                <div>
                    <InputLabel>Color</InputLabel>
                    <input type="string" id="color" name="color" v-model="form.colors"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Color" required />
                </div>
                <div>
                    <InputLabel>warranty</InputLabel>
                    <input type="string" id="warranty" name="warranty" v-model="form.warranty"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="warranty" required />
                </div>
                <div>

                    <form>
                        <InputLabel>Status</InputLabel>
                        <select id="status" name="status" v-model="form.status"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option :value="1">True</option>
                            <option :value="0">False</option>

                        </select>
                    </form>
                </div>
            </div>
            <div class="mb-6">
                <InputLabel>Upload Image</InputLabel>
                <ImageInput v-model="form.image" @fileChange="fileChange" source="image" type="file"
                    class="h-28 w-28" />
            </div>
            <div class="mb-6">
                <InputLabel>Discriptions</InputLabel>
                <textarea name="description" id="description" rows="5" v-model="form.description"
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
