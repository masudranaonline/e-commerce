<script setup>
    import AppLayout from '@/Layouts/Admin/AppLayout.vue';
    import Breadcrumb from '@/Components/Admin/Breadcrumb.vue';
    import InputLabel from '@/Components/Admin/InputLabel.vue';
    import TextInput from '@/Components/Admin/TextInput.vue';
    import { useForm } from '@inertiajs/vue3';

    const props = defineProps ({
        settings:Object
    });


    const form = useForm({
        site_name: props.settings.site_name,
        site_description: props.settings.site_description,
        site_logo: props.settings.site_logo,
        email: props.settings.email,
        phone: props.settings.phone,
        whatsup: props.settings.whatsup,
        address: props.settings.address,
        facebook: props.settings.facebook,
        twitter: props.settings.twitter,
        instagram: props.settings.instagram,
        youtube: props.settings.youtube,
        linkedin: props.settings.linkedin,
        map: props.settings.map,
        copyright: props.settings.copyright,
        language: props.settings.language,

    })

    const SettingSubmit = async () => {
        await form.put(route('settings.update', { setting: props.settings.id }), {
            onSuccess: (Response) => {
                alert('Update Success');
            },
            onError: (Response) => {
                alert('Error')
            },
            preserveScroll: true
        })
    }
//     const SettingSubmit = async () => {
//     try {
//         await form.put(route('settings.update', { setting: props.settings.id }), {
//             onSuccess: (response) => {
//                 alert('Update Success');
//             },
//             onError: (error) => {
//                 alert('Error');
//             },
//             preserveScroll: true
//         });
//     } catch (error) {
//         console.error('Error updating settings:', error);
//     }
// };


</script>
<template>

    <AppLayout>
        <Breadcrumb />
        <div class="py-4 bg-white px-4 mt-4 text-center my-4 shadow-md">
            <h1 class="font-bold text-xl text-blue-600">Settings</h1>
        </div>
        {{  form }}

        <div class="border p-4 bg-white rounded-md shadow-md">

            <form @submit.prevent="SettingSubmit" method="PUT" enctype="multipart/form-data">
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Settings</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be
                            careful what you share.</p>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <InputLabel>Site Name</InputLabel>
                                <TextInput id="site_name" type="text" v-model="form.site_name"  />

                            </div>

                            <div class="col-span-full">
                                <InputLabel>Description</InputLabel>
                                <div class="mt-2">
                                    <textarea id="about" name="about" rows="3" v-model="form.site_description"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </textarea>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about your
                                    company.
                                </p>
                            </div>

                            <div class="col-span-full">
                                <InputLabel>Photo</InputLabel>
                                <div class="mt-2 flex items-center gap-x-3">
                                    <svg class="h-16 w-16 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <button type="button"
                                        class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Change</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Company Information</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive
                            mail.</p>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <InputLabel>Email</InputLabel>
                                <div class="mt-2">
                                    <TextInput id="email" type="text" v-model="form.email" />
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <InputLabel>Phone No</InputLabel>
                                <div class="mt-2">
                                    <TextInput id="email" type="text" v-model="form.phone" />
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <InputLabel>What's up</InputLabel>
                                <div class="mt-2">
                                    <TextInput id="email" type="text" v-model="form.whatsup" />
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <InputLabel>Address</InputLabel>
                                <div class="mt-2">
                                    <TextInput id="email" type="text" v-model="form.address" />
                                </div>
                            </div>

                            <div class="sm:col-span-2 sm:col-start-1 col-span-4 flex items-center gap-4 ">
                                <InputLabel class="w-32">Facebook</InputLabel>
                                <div class=" w-full">
                                    <TextInput id="email" type="text" v-model="form.facebook"
                                        aria-placeholder="https://facebook.com" />
                                </div>
                            </div>

                            <div class="sm:col-span-2 sm:col-start-1 col-span-4 flex items-center gap-4 ">
                                <InputLabel class="w-32">Twitter</InputLabel>
                                <div class=" w-full">
                                    <TextInput id="email" type="text" v-model="form.twitter" :value="props.settings.twitter"
                                        aria-placeholder="https://twitter.com" />
                                </div>
                            </div>

                            <div class="sm:col-span-2 sm:col-start-1 col-span-4 flex items-center gap-4 ">
                                <InputLabel class="w-32">Instagram</InputLabel>
                                <div class=" w-full">
                                    <TextInput id="email" type="text" v-model="form.instagram"
                                        aria-placeholder="https://instagram.com" />
                                </div>
                            </div>

                            <div class="sm:col-span-2 sm:col-start-1 col-span-4 flex items-center gap-4 ">
                                <InputLabel class="w-32">Youtube</InputLabel>
                                <div class=" w-full">
                                    <TextInput id="email" type="text" v-model="form.youtube" 
                                        aria-placeholder="https://youtube.com" />
                                </div>
                            </div>

                            <div class="sm:col-span-2 sm:col-start-1 col-span-4 flex items-center gap-4 ">
                                <InputLabel class="w-32">Linkedin</InputLabel>
                                <div class=" w-full">
                                    <TextInput id="email" v-model="form.linkedin" type="text"
                                        aria-placeholder="https://linkedin.com" />
                                </div>
                            </div>

                            <div class="col-span-full">
                                <InputLabel class="w-32">Coppyright</InputLabel>
                                <div class=" w-full">
                                    <TextInput id="coppyright" type="text" v-model="form.copyright" 
                                        aria-placeholder="https://coppyright.com" />
                                </div>
                            </div>

                            <div class="sm:col-span-3 sm:col-start-1">
                                <InputLabel class="w-32">Language</InputLabel>
                                <div class=" w-full">
                                    <TextInput id="language" type="text" v-model="form.language" 
                                        aria-placeholder="language" />
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <InputLabel class="w-32">Map Address</InputLabel>
                                <div class=" w-full">
                                    <TextInput id="map" type="text" v-model="form.map"
                                        aria-placeholder="map" />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="mt-6 flex items-center justify-center gap-x-6">
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </form>


        </div>
    </AppLayout>

</template>
