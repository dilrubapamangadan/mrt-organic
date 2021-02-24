<template>
    <section class="products">
        <div class="container-fluid">
            <div class="title"><img src="assets/custom/img/icon-leaf.png" data-src="assets/custom/img/icon-leaf.png" alt="leaf" width="48" height="54" class="" data-aos-duration="1000">
                <h2 class="font-bold sub-title" data-aos="fade-up" data-aos-duration="1500">Organic Products</h2> 
               <span class="d-block" data-aos="fade-up" data-aos-duration="2000"> Experience all Organic Products </span>
            </div>
            <carousel :autoplay="true" :center="true" :dots="false" :responsive="{0: {items: 1,nav: true},600: {items: 2, },900: {items: 3,},1000: {items: 3,loop: true,margin: 20}}" data-aos="fade-up" data-aos-duration="2500">
            <!-- <div class="owl-carousel wow" data-aos-duration="2500"> -->
                <div class="item">
                    <div class="border"></div>
                    <div class="textHV text-white"> <img src="assets/custom/img/icon-leaf.png" data-src="assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30">
                        <h3 class="font-bold">Organic Essential Oils</h3>
                        <div class="description"> In general use, herbs are any plants used for food, flavoring, medicine, or fragrances for their savory or aromatic properties. In botanical English, the word “herb” is also used as a synonym of “herbaceous plant”. Herbs have a variety of uses including culinary, medicinal, and in some cases, </div>
                    </div>
                    <div class="text text-white"> <img src="assets/custom/img/icon-leaf.png" data-src="assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30" >
                        <h3 class="font-bold">Organic Essential Oils</h3> </div> 
                    <img src="assets/custom/img/organic-essential.jpg" data-src="assets/custom/img/organic-essential.jpg" alt="organic essential" width="617" height="521"> 
                </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="textHV text-white"> <img src="assets/custom/img/icon-leaf.png" data-src="assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30" >
                        <h3 class="font-bold">Organic Herbs & Extracts</h3>
                        <div class="description"> In general use, herbs are any plants used for food, flavoring, medicine, or fragrances for their savory or aromatic properties. In botanical English, the word “herb” is also used as a synonym of “herbaceous plant”. Herbs have a variety of uses including culinary, medicinal, and in some cases, </div>
                    </div>
                    <div class="text text-white"> <img src="assets/custom/img/icon-leaf.png" data-src="assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30" >
                        <h3 class="font-bold">Organic Herbs & Extracts</h3> </div> <img src="assets/custom/img/organic-herbs.jpg" data-src="assets/custom/img/organic-essential.jpg" alt="organic essential" width="617" height="521"> </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="textHV text-white"> <img src="assets/custom/img/icon-leaf.png" data-src="assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30" >
                        <h3 class="font-bold">Organic Spices & Extracts</h3>
                        <div class="description"> In general use, herbs are any plants used for food, flavoring, medicine, or fragrances for their savory or aromatic properties. In botanical English, the word “herb” is also used as a synonym of “herbaceous plant”. Herbs have a variety of uses including culinary, medicinal, and in some cases, </div>
                    </div>
                    <div class="text text-white"> <img src="assets/custom/img/icon-leaf.png" data-src="assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30" >
                        <h3 class="font-bold">Organic Spices & Extracts</h3> </div> <img src="assets/custom/img/organic-essential.jpg" data-src="assets/custom/img/organic-spices.jpg" alt="organic essential" width="617" height="521"> </div>
            <!-- </div> -->
            </carousel>
            <carousel :autoplay="true" :center="true" :dots="false" :responsive="{0: {items: 1,nav: true},600: {items: 2, },900: {items: 3,},1000: {items: 3,loop: true,margin: 20}}" data-aos="fade-up" data-aos-duration="1200">
            <!-- <div class="owl-carousel wow" data-aos-duration="1200"> -->
                <div class="item">
                    <div class="border"></div>
                    <div class="textHV text-white"> <img src="assets/custom/img/icon-leaf.png" data-src="assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30" >
                        <h3 class="font-bold">Career Oil</h3>
                        <div class="description"> In general use, herbs are any plants used for food, flavoring, medicine, or fragrances for their savory or aromatic properties. In botanical English, the word “herb” is also used as a synonym of “herbaceous plant”. Herbs have a variety of uses including culinary, medicinal, and in some cases, </div>
                    </div>
                    <div class="text text-white"> <img src="assets/custom/img/icon-leaf.png" data-src="assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30">
                        <h3 class="font-bold">Career Oil</h3> </div> <img src="assets/custom/img/career-oil.jpg" data-src="assets/custom/img/career-oil.jpg" alt="organic essential" width="617" height="521"> </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="textHV text-white"> <img src="assets/custom/img/icon-leaf.png" data-src="assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30" >
                        <h3 class="font-bold">Organic Cosmetic Ingredients</h3>
                        <div class="description"> In general use, herbs are any plants used for food, flavoring, medicine, or fragrances for their savory or aromatic properties. In botanical English, the word “herb” is also used as a synonym of “herbaceous plant”. Herbs have a variety of uses including culinary, medicinal, and in some cases, </div>
                    </div>
                    <div class="text text-white"> <img src="assets/custom/img/icon-leaf.png" data-src="assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30">
                        <h3 class="font-bold">Organic Cosmetic Ingredients</h3> </div> <img src="assets/custom/img/cosmatic.jpg" data-src="assets/custom/img/cosmatic.jpg" alt="organic essential" width="617" height="521"> </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="textHV text-white"> <img src="assets/custom/img/icon-leaf.png" data-src="assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30" >
                        <h3 class="font-bold">Organic Food Products</h3>
                        <div class="description"> In general use, herbs are any plants used for food, flavoring, medicine, or fragrances for their savory or aromatic properties. In botanical English, the word “herb” is also used as a synonym of “herbaceous plant”. Herbs have a variety of uses including culinary, medicinal, and in some cases, </div>
                    </div>
                    <div class="text text-white"> <img src="assets/custom/img/icon-leaf.png" data-src="assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30" >
                        <h3 class="font-bold">Organic Food Products</h3> </div> <img src="assets/custom/img/food-products.jpg" data-src="assets/custom/img/food-products.jpg" alt="organic essential" width="617" height="521"> </div>
            <!-- </div> -->
            </carousel>
            <div class="load text-center" data-aos="fade-up" data-aos-duration="1500"> <a href="#" class="load-all-btn"><span>Load all Categories</span> <i class="las la-angle-right"></i></a> </div>
            <div class="title"><img src="assets/custom/img/icon-leaf.png" data-src="assets/custom/img/icon-leaf.png" alt="leaf" width="48" height="54" data-aos-duration="1000">
                <h2 class="font-bold sub-title" data-aos="fade-up" data-aos-duration="1500">Conventional Products</h2> 
                <span class="d-block" data-aos="fade-up" data-aos-duration="2000">Experience all Conventional Products</span> </div>
            <!-- <div class="owl-carousel wow" data-aos-duration="2000"> -->
            <carousel :autoplay="true" :center="true" :dots="false" :responsive="{0: {items: 1,nav: true},600: {items: 2, },900: {items: 3,},1000: {items: 3,loop: true,margin: 20}}" data-aos="fade-up" data-aos-duration="2000">
                <div class="item">
                    <div class="border"></div>
                    <div class="textHV text-white"> <img src="assets/custom/img/icon-leaf.png" data-src="assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30">
                        <h3 class="font-bold">Organic Essential Oils</h3>
                        <div class="description"> In general use, herbs are any plants used for food, flavoring, medicine, or fragrances for their savory or aromatic properties. In botanical English, the word “herb” is also used as a synonym of “herbaceous plant”. Herbs have a variety of uses including culinary, medicinal, and in some cases, </div>
                    </div>
                    <div class="text text-white"> <img src="assets/custom/img/icon-leaf.png" data-src="assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30">
                        <h3 class="font-bold">Organic Essential Oils</h3> </div> <img src="assets/custom/img/Nutraceuticals.jpg" data-src="assets/custom/img/Nutraceuticals.jpg" alt="organic essential" width="617" height="521"> </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="textHV text-white"> <img src="assets/custom/img/icon-leaf.png" data-src="assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30">
                        <h3 class="font-bold">Herbal Extracts</h3>
                        <div class="description"> In general use, herbs are any plants used for food, flavoring, medicine, or fragrances for their savory or aromatic properties. In botanical English, the word “herb” is also used as a synonym of “herbaceous plant”. Herbs have a variety of uses including culinary, medicinal, and in some cases, </div>
                    </div>
                    <div class="text text-white"> <img src="assets/custom/img/icon-leaf.png" data-src="assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30">
                        <h3 class="font-bold">Herbal Extracts</h3> </div> <img src="assets/custom/img/herbal-extracts.jpg" data-src="assets/custom/img/herbal-extracts.jpg" alt="organic essential" width="617" height="521"> </div>
                <div class="item">
                    <div class="border"></div>
                    <div class="textHV text-white"> <img src="assets/custom/img/icon-leaf.png" data-src="assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30">
                        <h3 class="font-bold">Oleoresins</h3>
                        <div class="description"> In general use, herbs are any plants used for food, flavoring, medicine, or fragrances for their savory or aromatic properties. In botanical English, the word “herb” is also used as a synonym of “herbaceous plant”. Herbs have a variety of uses including culinary, medicinal, and in some cases, </div>
                    </div>
                    <div class="text text-white"> <img src="assets/custom/img/icon-leaf.png" data-src="assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30">
                        <h3 class="font-bold">Oleoresins</h3> </div> <img src="assets/custom/img/Oleoresins.jpg" data-src="assets/custom/img/Oleoresins.jpg" alt="organic essential" width="617" height="521"> </div>
            <!-- </div> -->
            </carousel>
            <div class="load text-center" data-aos="fade-up" data-aos-duration="1000"> <a href="#" class="load-all-btn"><span>Load all Categories</span> <i class="las la-angle-right"></i></a> </div>
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