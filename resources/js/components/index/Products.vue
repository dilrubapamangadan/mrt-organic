<template>
    <section class="products">
        <div class="container-fluid">
            <div class="title"><img src="/assets/custom/img/icon-leaf.png" data-src="/assets/custom/img/icon-leaf.png" alt="leaf" width="48" height="54" class="" >
                <h2 class="font-bold sub-title" >Organic Products</h2> 
               <span class="d-block" > Experience all Organic Products </span>
            </div>
            <carousel :autoplay="true" :center="true" :dots="false" :responsive="{0: {items: 1,nav: true},600: {items: 2, },900: {items: 3,},1000: {items: 3,loop: true,margin: 20}}" v-for="category in categoryOrganic" :key="category.slug">
            <!-- <div class="owl-carousel wow" data-aos-duration="2500"> -->
               <router-link :to="{ name:`Products`,params:{slug:category.slug,id:category.id}}">
                <div class="item" >
                    <div class="border"></div>
                    <div class="textHV text-white"> <img src="/assets/custom/img/icon-leaf.png" data-src="/assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30">
                        <h3 class="font-bold">{{ category.name }}</h3>
                        <div class="description" v-html="category.short_description"> </div>
                    </div>
                    <div class="text text-white"> <img src="/assets/custom/img/icon-leaf.png" data-src="/assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30" >
                        <h3 class="font-bold">{{ category.name }}</h3> </div> 
                    <img :src="'/img/category/'+category.img" alt="organic essential" width="617" height="521"> 
                </div>
               </router-link>
            <!-- </div> -->
            </carousel>
             <router-link :to="{ name:`Categories`,params:{slug:`organic-products`}}">
            <div class="load text-center" > <a href="#" class="load-all-btn"><span>Load all Categories</span> <i class="las la-angle-right"></i></a> </div>
             </router-link>
            <div class="title"><img src="/assets/custom/img/icon-leaf.png" data-src="/assets/custom/img/icon-leaf.png" alt="leaf" width="48" height="54" >
                <h2 class="font-bold sub-title" >Conventional Products</h2> 
                <span class="d-block">Experience all Conventional Products</span> </div>
            <!-- <div class="owl-carousel wow" data-aos-duration="2000"> -->
            <carousel :autoplay="true" :center="true" :dots="false" :responsive="{0: {items: 1,nav: true},600: {items: 2, },900: {items: 3,},1000: {items: 3,loop: true,margin: 20}}" v-for="category in categoryConventional" :key="category.slug">
                <router-link :to="{ name:`Products`,params:{slug:category.slug,id:category.id}}">
                <div class="item" >
                    <div class="border"></div>
                    <div class="textHV text-white"> <img src="/assets/custom/img/icon-leaf.png" data-src="/assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30">
                        <h3 class="font-bold">Organic Essential Oils</h3>
                        <div class="description"> In general use, herbs are any plants used for food, flavoring, medicine, or fragrances for their savory or aromatic properties. In botanical English, the word “herb” is also used as a synonym of “herbaceous plant”. Herbs have a variety of uses including culinary, medicinal, and in some cases, </div>
                    </div>
                    <div class="text text-white"> <img src="/assets/custom/img/icon-leaf.png" data-src="/assets/custom/img/icon-leaf.png" alt="leaf" class="pb-4 w-100" width="30">
                        <h3 class="font-bold">Organic Essential Oils</h3> </div> <img :src="'/img/category/'+category.img" alt="organic essential" width="617" height="521"> </div>
          
                </router-link>
            <!-- </div> -->
            </carousel>
            <router-link :to="{ name:`Categories`,params:{slug:`conventional-products`}}">
            <div class="load text-center" > <a href="#" class="load-all-btn"><span>Load all Categories</span> <i class="las la-angle-right"></i></a> </div>
            </router-link>
        </div>
    </section>
</template>
<script>
import carousel from 'vue-owl-carousel'

export default {
     components: { 
           carousel
        },
    data() {
        return {
            categoryOrganic: [{slug:1},{slug:2}],
            categoryConventional: {}
        }
    },
    created() {
        axios.get('/api/category/store/organic-products').then(({ data }) => { this.categoryOrganic = data; });
        axios.get('/api/category/store/conventional-products').then(({ data }) => { this.categoryConventional = data; });
    }
}
</script>