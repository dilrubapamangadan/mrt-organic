<template>
      <header>
            <div class="first-row">
                <div class="container-fluid text-center align-items-center">
                    <ul>
                        <li><i><img src="/assets/custom/img/icon-pure.png" width="19" height="28" alt="pure" data-src="/assets/custom/img/icon-pure.png"> </i> <span>100% Pure</span></li>
                        <li><i><img src="/assets/custom/img/icon-chemical.png" width="23" height="31" alt="pure" data-src="/assets/custom/img/icon-chemical.png"> </i> <span>Chemical Free</span> </li>
                        <li><i><img src="/assets/custom/img/icon-rabit.png" width="34" height="34" alt="pure" data-src="/assets/custom/img/icon-rabit.png"> </i> <span>Cruelty Free</span> </li>
                        <li><i><img src="/assets/custom/img/icon-echo-friendly.png" width="35" height="31" alt="pure" data-src="/assets/custom/img/icon-echo-friendly.png"> </i> <span>Eco Friendly</span></li>
                    </ul>
                </div>
            </div>
            <div class="second-row text-white d-none d-lg-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <ul class="left list-inline">
                                <li class="list-inline-item"><i class="las la-phone"></i> +91-484-2632991,+91-484-2124310</li>
                                <li class="list-inline-item"><i class="las la-envelope"></i> organic@mrtorganic.com</li>
                            </ul>
                        </div>
                        <div class="col text-right">
                            <ul class="right list-inline ml-auto">
                                <li class="list-inline-item online-store"><a href="#"><i><img src="/assets/custom/img/icon-web.png" data-src="/assets/custom/img/icon-web.png" width="24" height="24" alt="online store"> </i> Online Store</a> </li>
                                <li class="list-inline-item social"><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                <li class="list-inline-item social"><a href="#"><i class="lab la-twitter"></i></a></li>
                                <li class="list-inline-item social"><a href="#"><i class="lab la-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <nav class="navbar navbar-expand-lg   row p-0 no-gutters">
                    <div class="collapse col-4 navbar-collapse d-none d-lg-block" id="main_nav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"> 
                                <router-link class="nav-link" to="/"><i class="las la-home"></i></router-link>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#story" v-smooth-scroll>Our Story</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle" data-toggle="dropdown" href="#"> Organic Products</a>
                                <ul class="dropdown-menu fade-up">
                                    <li v-for="category in categoryOrganic" :key="category.slug">
                                         <router-link  class="dropdown-item" :to="`/products/${category.slug}`">
                                            {{ category.name | upText }}
                                        </router-link>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- navbar-collapse.// -->
                    <div class="col-4 text-center ">
                        <a class="brand text-white" href="#"><img src="/assets/custom/img/brand-logo.png" data-src="/assets/custom/img/brand-logo.png" width="266" height="104" alt="MRT"> </a>
                    </div>
                    <div class="col-4  d-none d-lg-block">
                        <ul class="navbar-nav ">
                            <li class="nav-item dropdown"> <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Conventional Products </a>
                                <ul class="dropdown-menu fade-up">
                                     <li v-for="category in categoryConventional" :key="category.slug">
                                         <router-link  class="dropdown-item" :to="`/products/${category.slug}`">
                                            {{ category.name | upText }}
                                        </router-link>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><router-link class="nav-link" to="/contact"> Contact Us</router-link></li>
                        </ul>
                    </div>
                    <div class="col-5 d-block d-md-none  relative">
                        <div id="dl-menu" class="dl-menuwrapper">
                            <button class="dl-trigger">Open Menu</button>
                            <ul class="dl-menu">
                                <li><a href="#">Home</a></li>
                                <li> 
                                    <router-link class="has-sub" to="/products"> Organic Products<i class="las la-angle-right ml-auto float-right"></i></router-link>
                                    <ul class="dl-submenu">
                                        <li><a href="#">ORGANIC ESSENTIAL OILS</a></li>
                                        <li><a href="#">ORGANIC CARRIER OILS</a></li>
                                        <li><a href="#">ORGANIC HERBS</a></li>
                                        <li><a href="#">ORGANIC HERBAL EXTRACTS</a></li>
                                        <li><a href="#">ORGANIC SPICES</a></li>
                                        <li><a href="#">ORGANIC ISOLATES</a></li>
                                        <li><a href="#">ORGANIC FOOD PRODUCTS</a></li>
                                        <li><a href="#">ORGANIC CO2 EXTRACTS</a></li>
                                        <li><a href="#">ORGANIC NUTRACEUTICALS</a></li>
                                        <li><a href="#">ORGANIC BUTTER &amp; WAXES</a></li>
                                        <li><a href="#">ORAGINIC TEXTILES &amp; GARMENTS</a></li>
                                    </ul>
                                </li>
                                <li> <a href="#">Convetional Products <i class="las la-angle-right ml-auto float-right"></i></a>
                                    <ul class="dl-submenu">
                                        <li><a href="#">ESSENTIAL OILS</a></li>
                                        <li><a href="#">CO2 EXTRACTS</a></li>
                                        <li><a href="#">OLEORESIN</a></li>
                                        <li><a href="#">FLORAL EXTRACTS</a></li>
                                        <li><a href="#">HERBAL EXTRACTS</a></li>
                                        <li><a href="#">MINTS</a></li>
                                        <li><a href="#">NUTRACEUTICALS</a></li>
                                        <li><a href="#">ISOLATES</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
</template>
<script>
export default {
    data() {
        return {
            categoryOrganic: {},
            categoryConventional: {}
        }
    },
    created() {
        axios.get('/api/category/store/organic-products').then(({ data }) => { this.categoryOrganic = data; });
        axios.get('/api/category/store/conventional-products').then(({ data }) => { this.categoryConventional = data; });
    }
}
</script>