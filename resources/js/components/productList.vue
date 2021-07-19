<template>
  <div>
    <header1></header1>
    <section class="home-banner inner-banner">
      <div class="container-lg position-relative">
        <h2 class="font-bold page-title text-center">{{ category.store }}</h2>

        <img
          src="/assets/custom/img/bottle-n-leaf.png"
          width="440"
          height="339"
          class="bnr-organic-left"
        />
        <img
          src="/assets/custom/img/sunflower-organic.png"
          width="440"
          height="339"
          class="bnr-organic-right"
        />
      </div>

      <div class="wall"></div>
      <img
        src="/assets/custom/img/assets.png"
        width="440"
        height="339"
        class="assets"
      />
    </section>

    <section class="category-description">
      <div class="container-lg">
        <div class="box">
          <img
            src="/assets/custom/img/product-img.png"
            width="633"
            height="646"
            class="product-img"
          />
          <div class="display-3 font-bold text-green">{{ category.name }}</div>
          <div class="h3 text-green pb-4">{{ category.sub_header }}</div>
		  <div v-html="category.short_description"></div>
         	
          <div class="load py-0">
            <a href="#" class="load-all-btn"
              ><span>Read Morea</span> <i class="las la-angle-right"></i
            ></a>
          </div>
        </div>
      </div>
    </section>
    <section class="product-liting py-4 py-md-5">
      <div class="container">
        <ul class="d-flex product-listing row">

          <li v-for="product in products" :key="product.id">
            <div class="item">
              <div class="border"></div>

              <div class="textHV text-white">
                <img
                  src="/assets/custom/img/icon-leaf.png"
                  data-src="/assets/custom/img/icon-leaf.png"
                  alt="leaf"
                  class="pb-4 w-100"
                  width="30"
                />
                <h3 class="font-bold">{{ product.name }}</h3>
                <div class="description" v-html="product.short_description">
                 
                </div>
              </div>

              <div class="text text-white">
                <img
                  src="/assets/custom/img/icon-leaf.png"
                  data-src="/assets/custom/img/icon-leaf.png"
                  alt="leaf"
                  class="pb-4 w-100"
                  width="30"
                />
                <h3 class="font-bold">{{ product.name }}</h3>
              </div>
              <img
                :src="`/img/product/${product.img}`"
                alt="organic essential"
                width="617"
                height="521"
              />
            </div>
            <img
              src="/assets/custom/img/vector-attachment-1.png"
              data-src="/assets/custom/img/vector-attachment-1.png"
              alt="leaf"
              class="tail"
            />
          </li>

        </ul>
      </div>
    </section>
    <section class="org-product-info position-relative">
      <div class="wall"></div>
      <div class="container-lg">
        <div class="box text-center text-light">
          <p>
            <img
              src="/assets/custom/img/mrt-logo-yellow.png"
              width="300"
              height="58"
              class="logo"
            />
          </p>
          <h2 class="font-bold">A shop for good people by good people</h2>
          <div class="icon mx-auto my-3">
            <img
              src="/assets/custom/img/icon-leaf.png"
              data-src="/assets/custom/img/icon-leaf.png"
              alt="leaf"
              width="48"
              height="54"
            />
          </div>
          <h3 class="font-bold mb-3">
            Why are organic oils superior to non-organic Oils?
          </h3>
          <p>
            Essential oils are highly concentrated plant medicines. As such,
            they are subject to retaining high concentrations of contaminants if
            the plants they are derived from are grown with chemical
            agricultural methods. When you think about residues in this way, the
            benefits for those using organic oils vs. non organic oils is fairly
            obvious.
          </p>
          <p>
            Many aroma therapists prefer to use organic essential oils in their
            clinical treatments because they believe organic agriculture yields
            oils that are more therapeutically active than their non-organic
            counterparts. The lack of pesticide residues is also a major benefit
            when using organic essential oils since these unwanted toxic
            chemicals have far-reaching effects on our bodies, wildlife, and the
            environment.
          </p>

          <img
            src="/assets/custom/img/vector2.png"
            data-src="/assets/custom/img/vector2.png"
            alt="leaf"
            class="vector1"
          />
          <img
            src="/assets/custom/img/vector3.png"
            data-src="/assets/custom/img/vector2.png"
            alt="leaf"
            class="vector2"
          />
        </div>
      </div>
    </section>
    <Certification></Certification>
    <footer1></footer1>
  </div>
</template>
<script>
import header1 from "./header.vue";
import footer1 from "./footer.vue";
import Certification from "./index/Certification.vue";
export default {
  components: {
    header1,
    footer1,
    Certification,
  },
  data() {
    return {
      category: {},
      products: [],
      slug: "",
    };
  },
  methods: {
    loadProduct(slug) {
		axios.get('/api/category/details/'+ slug).then(({ data }) => { this.category = data[0]; });
		axios.get("/api/product/category/" + slug).then(({ data }) => {
			this.products = data;
		});
	  
    },
  },
  created() {
    this.slug = this.$route.params.slug;
    this.loadProduct(this.slug);
  },
};
</script>




