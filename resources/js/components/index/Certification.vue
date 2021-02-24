<template>
    <section class="certification">
   <div class="container text-center">
   <h2 class="font-bold text-green" data-aos="fade-in" data-aos-duration="1000">Certification</h2>
        <carousel :autoplay="true" :nav="false" :loop="true" :center="true" :dots="false" :margin="20" :responsiveClass="true" :autoplayTimeout="3000" :responsive="{0: {items: 1,},600: {items: 3,},1200: {items: 6,}}" class=" align-items-center" data-aos="fade-in">
        <div class="item"><img src="assets/custom/img/lacon.jpg"  alt="certification">  </div>
        <div class="item"><img src="assets/custom/img/certificate-2.jpg"  alt="certification"></div>
        <div class="item"><img src="assets/custom/img/USDA.jpg"  alt="certification"></div>
        <div class="item"><img src="assets/custom/img/SpiceHouse.jpg"  alt="certification"></div>
        <div class="item"><img src="assets/custom/img/IndiaOrganic.jpg"  alt="certification"></div>
        <div class="item"><img src="assets/custom/img/haccp.jpg"  alt="certification"></div>
        <div class="item"><img src="assets/custom/img/halal.jpg"  alt="certification"></div>
        </carousel>
    </div>
  
</section>
</template>
<script>
import carousel from 'vue-owl-carousel'

export default {
     components: { 
           carousel
        }
}
</script>