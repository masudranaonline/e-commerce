<script setup>
    import AppLayout from '@/Layouts/Admin/AppLayout.vue';
    import Breadcrumb from '@/Components/Admin/Breadcrumb.vue';
    import InputLabel from '@/Components/Admin/InputLabel.vue';
    import TextInput from '@/Components/Admin/TextInput.vue';
    import PrimaryButton from '@/Components/Admin/PrimaryButton.vue';
    import SecondaryButton from '@/Components/Admin/SecondaryButton.vue';
    import {
        useForm
    } from '@inertiajs/vue3';

    const props = defineProps({
        'categories': Object,
        'brands': Object,
        'vendors': Object
    })

    const form = useForm({
        category_id: '',
        brand_id: '',
        vendor_id: '',
        title: '',
        description: '',
        cost_price: '',
        sale_price: '',
        quantity: '',
        min_quantity: '',
        sizes: '',
        colors: '',
        warranty: '',
        status: '',
        product_images: '',
    });
    // console.log(form);

    const productSubmit = async () => {
        form.post(route('products.store'), {
            onSuccess: (response) => {
                alert('Vendor added successfully');
            },
            onError: (response) => {
                alert('Something went wrong');
            },
            preserveScroll: true
        })
    };
</script>
<template>
    <AppLayout>
        <Breadcrumb></Breadcrumb>

        <div class="py-4 bg-white px-4 mt-4 text-center my-4 shadow-md">
            <h1 class="font-bold text-xl text-blue-600">Add Product</h1>
        </div>
       
        <div class="border p-4 bg-white rounded-sm shadow-md mb-4">
            <form @submit.prevent="productSubmit" method="POST" enctype="multipart/form-data">
                <div class="grid gap-6 mb-6 md:grid-cols-3">
                    <div>


                        <InputLabel>Product Category</InputLabel>
                        <select v-model="form.category_id" id="category" name="category"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>Choose a category</option>
                            <option v-for="category in props.categories" :key="category.id" :value="category.id">
                                {{ category . name }}
                            </option>
                        </select>


                    </div>
                    <div>

                        <InputLabel>Select an Brand</InputLabel>
                        <select v-model="form.brand_id" id="brand" name="brand"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>Choose a brand</option>
                            <option v-for="brand in props.brands" :key="brand.id" :value="brand.id">
                                {{ brand . name }}</option>
                        </select>

                    </div>
                    <div>

                        <InputLabel>Select an Vendor</InputLabel>
                        <select v-model="form.vendor_id" id="vendor" name="vendor"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>Choose a Vendor</option>
                            <option value="US">United States</option>
                            <option v-for="vendor in props.vendors" :key="vendor.id" :value="vendor.id">
                                {{ vendor . name }}</option>
                        </select>

                    </div>
                    <div>
                        <InputLabel>Product Title</InputLabel>
                        <TextInput v-model="form.title" type="text" id="title" name="title" placeholder="John"
                            required />
                    </div>
                    <div>
                        <InputLabel>Cost Price</InputLabel>
                        <TextInput v-model="form.cost_price" type="number" id="cost_price" name="cost_price"
                            placeholder="$00" required />
                    </div>
                    <div>
                        <InputLabel>Sale Price</InputLabel>
                        <TextInput v-model="form.sale_price" type="number" id="sale_price" name="sale_price"
                            placeholder="$00" required />
                    </div>
                    <div>
                        <InputLabel>Quantity</InputLabel>
                        <TextInput v-model="form.quantity" type="number" id="quantity" name="quantity" placeholder="0"
                            required />
                    </div>
                    <div>
                        <InputLabel>Minimum Quantity</InputLabel>
                        <TextInput v-model="form.min_quantity" type="number" id="min_quantity" name="min_quantity"
                            placeholder="0" required />
                    </div>
                    <div>
                        <InputLabel>Sizes</InputLabel>
                        <TextInput v-model="form.sizes" type="text" id="seizes" name="seizes" placeholder="sizes"
                            required />
                    </div>
                    <div>
                        <InputLabel>Color</InputLabel>
                        <TextInput v-model="form.colors" type="text" id="color" name="color" placeholder="color"
                            required />
                    </div>
                    <div>
                        <InputLabel>warranty</InputLabel>
                        <TextInput v-model="form.warranty" type="text" id="warranty" name="warranty"
                            placeholder="warranty" required />
                    </div>
                    <div>

                        <form>
                            <InputLabel>Status</InputLabel>
                            <select v-model="form.status" id="status" name="status"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option selected>Choose a Status</option>
                                <option :value="1">True</option>
                                <option :value="0">False</option>

                            </select>
                        </form>
                    </div>
                </div>
                <div class="mb-6">
                    <InputLabel>Upload Image</InputLabel>
                    <TextInput id="multiple_files" v-model="form.product_images"  type="file" multiple class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"></TextInput>
                </div>
                <div class="mb-6">
                    <InputLabel>Discriptions</InputLabel>
                    <textarea v-model="form.description" name="description" id="description" rows="5"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "></textarea>
                </div>
                <div class="text-center">
                    <PrimaryButton type="submit">Submit</PrimaryButton>
                </div>
            </form>
        </div>





    </AppLayout>

</template>
