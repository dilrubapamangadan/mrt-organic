<template>
    <section class="home-banner"> <img src="assets/custom/img/banner-vector.png" data-src="assets/custom/img/banner-vector.png" width="978" height="576" alt="banner-vector" class="flower"> <img src="assets/custom/img/leaf.png" data-src="assets/custom/img/leaf.png" width="370" height="306" alt="leaf" class="leaf">
        <div class="wall"></div>

     <carousel  class="carousel site-banner" >
        <!-- <carousel id="carouselExampleIndicators" class="carousel site-banner carousel-fade " data-ride="carousel" data-interval="8000">  -->
           
            <div class="carousel-inner">
                <div class="carousel-item w-100 active">
                    <div class="container h-100">
                        <div class="d-flex justify-content-left align-items-center h-100">
                            <div class="col-6 text">
                                <h4 class="font-normal">Reach for a healthier you</h4>
                                <h2 class="font-bold">A Sustainable
                                Development
                                Venture</h2> 
                                </div>
                                <div class ="col-6">
                                 <img src="assets/custom/img/banner-image-1.jpg" width="1044" height="519" class="">
                                </div>
                        </div>
                    </div> </div>
                <div class="carousel-item w-100">
                    <div class="container h-100">
                        <div class="d-flex justify-content-left align-items-center h-100">
                            <div class="col-6 text">
                                <h4 class="font-normal">Reach for a healthier you</h4>
                                <h2 class="font-bold">A Sustainable  Development Venture</h2>
                              </div>
                              <div class ="col-6">
                                   <img src="assets/custom/img/banner-image-2.jpg" width="956" height="647" class="">
                               </div>
                        </div>
                    </div>  </div>
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