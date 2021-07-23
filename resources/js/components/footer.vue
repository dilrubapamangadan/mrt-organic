<template>
    <footer>
            <div id="contact" class="container-lg relative">
                <div class="pb-4 pb-md-5 logo"><img src="/assets/custom/img/brand-logo.png" data-src="/assets/custom/img/brand-logo.png" alt="MRT" width="266" height="104"></div>
                <div class="row">
                    <div class="col-lg-4 d-none d-md-block border-right mb-4 mb-md-5">
                        <h2 class="pb-3 font-bold">Get in touch</h2>
                        <h5 class="text-uppercase pb-2">HEAD OFFICE</h5>
                        <address><i class="las la-map-marker"></i>
                            MRT Organic Green Products<br/>
                            3 – Palatty Buildings, Pipeline Road <br/>
                            Nr to Telephone Exchange<br/>
                            Aluva – 683101, Cochin, Kerala, India.
                        </address>
                        <h2 class="pb-3 font-bold">Contact</h2>
                        <ul class="contact-info pb-4">
                            <li><i class="las la-phone"></i>Phone: +91-484-2632991,+91-484-2124310</li>
                            <li><i class="las la-mobile-alt"></i>Mobile:+91-9746039299</li>
                            <li><i class="las la-fax"></i> Fax : +91-484-2624133</li>
                            <li><i class="las la-envelope"></i>Email: organic@mrtorganic.com</li>
                        </ul>
                        <ul class="list-inline social">
                            <li class="list-inline-item"><a class="ease social-icon text-xs-center" target="_blank" href="#"><i class="lab la-linkedin"></i></a></li>
                            <li class="list-inline-item"><a class="ease social-icon text-xs-center" target="_blank" href="#"><i class="lab la-instagram"></i></a></li>
                            <li class="list-inline-item"><a class="ease social-icon text-xs-center" target="_blank" href="#"><i class="lab la-facebook-f"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 mb-4 mb-md-5">
                        <div class="row pl-0 pl-lg-4">
                            <div class="col-md-4  d-none d-md-block">
                                <h2  class="pb-3 font-bold">Organic<br/> Products</h2>
                                <ul class="links">
                                   <li v-for="category in categoryOrganic" :key="category.slug">
                                         <!-- <router-link  class="dropdown-item" :to="`/products/${category.slug}`"> -->
                                         <router-link  :to="{ name:`Products`,params:{slug:category.slug,id:category.id}}">
                                            {{ category.name | upText }}
                                        </router-link>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4  d-none d-md-block">
                                <h2  class="pb-3 font-bold">Conventional <br/>Products</h2>
                                <ul class="links">
                                   <li v-for="category in categoryConventional" :key="category.slug">
                                         <router-link  :to="`/products/${category.slug}`">
                                            {{ category.name | upText }}
                                        </router-link>
                                    </li>
                                </ul>
                                <div class="spacer-1"></div>
                            </div>
                            <div class="col-md-4">
                                <h2  class="pb-3 font-bold">Quick<br/>Links</h2>
                                <ul class="links">
                                    <li><router-link to="/">Home  </router-link> </li>
                                    <li><router-link to="/about">Our Story </router-link> </li>
                                    <li><router-link :to="{ name:`Categories`,params:{slug:`organic-products`}}">Organic Products  </router-link> </li>
                                    <li><router-link :to="{ name:`Categories`,params:{slug:`conventional-products`}}">Conventional Products </router-link> </li>
                                    <li><router-link to="/contact">Contact Us</router-link> </li>
                                    <li><a href="#">Online Store</a> </li>
                                </ul>
                                <div class="spacer-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="/assets/custom/img/leaf-3.png" data-src="/assets/custom/img/leaf-3.png" width="364" height="301" alt="leaf" class="leaf">
            </div>
            <div class="last">
                <div class="container-lg">
                    <div class="row justify-content-end">
                        <div class="col-md-6 text-center text-md-left">© 2020-21 MRT Green Products. </div>
                        <div class="col-md-6 text-center text-md-right "><a href="#" class=" mr-5">Legal</a>     <a href="#" class=""> Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
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