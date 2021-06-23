<template>
    <section class="home-banner"> <img src="assets/custom/img/banner-vector.png" data-src="assets/custom/img/banner-vector.png" width="978" height="576" 
    alt="banner-vector" class="flower"> <img src="assets/custom/img/leaf.png" data-src="assets/custom/img/leaf.png" width="370" height="306" alt="leaf" class="leaf">
        <div class="wall"></div>

<carousel  class="carousel site-banner carousel-fade" :autoplay="true" data-ride="carousel" data-interval="5000"  :dots="false" :responsive="{0: {items: 1,nav: false},600: {items: 2, },900: {items: 3,},1000: {items: 3,loop: false}}"  data-aos="fade-up" data-aos-duration="2500">
       
           
           
        </carousel>
 <a href="#HM-3-colum" class="skip"><i class="las la-angle-down"></i></a>
    </section>
</template>
<script>
import carousel from 'vue-owl-carousel'
export default {
    components: { 
            carousel,
        },
}
</script>
<style scoped>

</style>