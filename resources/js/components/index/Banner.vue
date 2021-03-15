<template>
    <section class="home-banner"> <img src="assets/custom/img/banner-vector.png" data-src="assets/custom/img/banner-vector.png" width="978" height="576" alt="banner-vector" class="flower"> <img src="assets/custom/img/leaf.png" data-src="assets/custom/img/leaf.png" width="370" height="306" alt="leaf" class="leaf">
        <div class="wall"></div>

<carousel  class="carousel site-banner" :autoplay="true" data-ride="carousel" data-interval="5000"  :dots="false" :responsive="{0: {items: 1,nav: false},600: {items: 2, },900: {items: 3,},1000: {items: 3,loop: false}}"  data-aos="fade-up" data-aos-once="true" data-aos-duration="2500">
        <!-- <carousel id="carouselExampleIndicators" class="carousel site-banner carousel-fade " data-ride="carousel" data-interval="8000">  -->
            <a href="#HM-3-colum" class="skip"><i class="las la-angle-down"></i></a>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container h-100">
                        <div class="d-flex justify-content-left align-items-center h-100">
                            <div class="col-6 text">
                                <h4 class="font-normal">Reach for a healthier you</h4>
                                <h2 class="font-bold">A Sustainable
                                Development
                                Venture</h2> </div>
                        </div>
                    </div> <img src="assets/custom/img/banner-image-1.jpg" width="1044" height="519" class=""> </div>
                <div class="carousel-item">
                    <div class="container h-100">
                        <div class="d-flex justify-content-left align-items-center h-100">
                            <div class="col-6 text">
                                <h4 class="font-normal">Reach for a healthier you</h4>
                                <h2 class="font-bold">A Sustainable
                                Development
                                Venture</h2> </div>
                        </div>
                    </div> <img src="assets/custom/img/banner-image-2.jpg" width="956" height="647" class=""> </div>
            </div>
        </carousel>

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