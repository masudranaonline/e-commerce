<script setup>

    import Slider from './Partials/Slider.vue';
    import Offer from './Partials/Offer.vue';
    import Opportunities from './Partials/Opportunities.vue';
    import FlashSale from './Partials/FlashSale.vue';
    import Categories from './Partials/Categories.vue';
    import Products from './Partials/Products.vue';

    import Layout from '@/Layouts/Website/Layout.vue';
</script>
<template>

   <Layout>
        <Slider></Slider>

        <Offer></Offer>

        <Opportunities></Opportunities>

        <FlashSale></FlashSale>

        <Categories></Categories>

        <Products></Products>
   </Layout>



</template>
