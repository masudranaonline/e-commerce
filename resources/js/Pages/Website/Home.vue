<script setup>
    
    // import Slider from './partials/Slider.vue';
    import Slider from './partials/Slider.vue';
    import Offer from './partials/Offer.vue';
    import Opportunities from './partials/Opportunities.vue';
    import FlashSale from './partials/FlashSale.vue';
    import Categories from './partials/Categories.vue';
    import Products from './partials/Products.vue';

    import Layout from '@/Layouts/Website/Layout.vue';
</script>
<template>
    
   <Layout>
        <Slider></Slider>

        <Offer></Offer>

        <Opportunities></Opportunities>

        <FlashSale></FlashSale>

        <!--start categories section-->
        <Categories></Categories>

        <!--start product section-->
        <Products></Products>
   </Layout>
    
 

</template>