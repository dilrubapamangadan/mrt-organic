<template>
  <section>
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body p-4 p-md-5">
            <h3 class="font-bold text-green pb-3 mb-0">
              Enter your contact details
            </h3>

            <div class="alert alert-info mb-4 small">
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy
            </div>

            <div class="form-group">
              <input
                type="text"
                placeholder="Enter email"
                class="form-control"
              />
            </div>
            <div class="form-group">
              <input
                type="text"
                placeholder="Phone Number"
                class="form-control"
              />
            </div>

            <div class="d-flex">
              <button
                type="button"
                class="btn btn-default border text-dark px-4 rounded-0"
                data-dismiss="modal"
              >
                Cancel
              </button>
              <button type="button" class="btn btn-green btn-green-sm ml-auto">
                Submit
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <header1></header1>
    <section class="home-banner inner-banner">
      <div class="container-lg position-relative">
        <h2 class="font-bold page-title text-center">{{ products.store }}</h2>

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
        <div class="box p-0 shadow">
          <div class="row no-gutters">
            <div class="col-lg-5">
              <img
                :src="`/img/product/${products.banner}`"
                width="520"
                height="272"
                class="bnr-organic-right w-100 h-auto"
              />
            </div>
            <div class="col-lg-7">
              <div class="h-100 p-4 bg-white">
                <div class="h2 font-bold text-green">{{ products.name }}</div>
                <div class="h5 text-dark font-medium pb-4">
                  {{ products.sub_header }}
                </div>
                {{ products.short_description }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="cms">
      <div class="container-lg">
        <div v-html="products.description"></div>

        <div class="pt-4 mt-3 row">
          <div class="col-md-6" >
            <a v-if="products.url" target="_blank" :href="products.url"  class="btn-green">Shop online</a>
          </div>
          <div class="col-md-6 text-right">
            <a
              href="#"
              class="btn-green"
              data-toggle="modal"
              data-target="#exampleModal"
              >Bulk Order</a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- organic -->
    <section v-if="products.store_id" class="org-product-info position-relative">
      <div class="wall"></div>
      <div class="container-lg">
        <div class="box text-center text-light">
          <img
            src="/assets/custom/img/pathri.png"
            data-src="/assets/custom/img/pathri.png"
            alt="leaf"
            class="vector-top2"
          />
          <img
            src="/assets/custom/img/leaf-2.png"
            data-src="/assets/custom/img/leaf-2.png"
            alt="leaf"
            class="vector-top"
          />
          <h3 class="font-bold">
            With a rising demand in the world for pesticide-free and GMO-free
            pure natural food products, MRT was among the first to take up the
            initiative of organic methods of cultivation through its group of
            farmers.
          </h3>
          <div class="icon mx-auto my-3">
            <img
              src="/assets/custom/img/icon-leaf.png"
              data-src="/assets/custom/img/icon-leaf.png"
              alt="leaf"
              width="48"
              height="54"
            />
          </div>
          <p>
            We have farmers growing, rarest and finest spices, herbs and various
            other crops in the majestic valleys of Kashmir that are located at
            an altitude of about 10,000 ft to the foothills of the mystic
            mountains of western ghats, which is well known for its biological
            diversity and endemism. Our organic range of product includes
            Spices, Herbs, Essential oils, Ayurvedic Oils, Herbs &amp; Herbal
            Powders, Glycerin, Vegetable Oils, Ghee&amp; Honey, Organic Foods,
            Herbal Extracts, C02 Extracts, Floral Waters, Butters &amp; Waxes
            etc.
          </p>
          <img
            src="/assets/custom/img/vector2.png"
            data-src="/assets/custom/img/vector2.png"
            alt="leaf"
            class="vector1"
          />
          <img
            src="/assets/custom/img/vector3.png"
            data-src="/assets/custom/img/vector3.png"
            alt="leaf"
            class="vector2"
          />
        </div>
      </div>
    </section>
    <!-- conventional -->
    <section v-else class="org-product-info position-relative">
      <div class="wall"></div>
      <div class="container-lg">
        <div class="box text-center text-light">
          <img
            src="/assets/custom/img/pathri.png"
            data-src="/assets/custom/img/pathri.png"
            alt="leaf"
            class="vector-top2"
          />
          <img
            src="/assets/custom/img/leaf-2.png"
            data-src="/assets/custom/img/leaf-2.png"
            alt="leaf"
            class="vector-top"
          />
          <h3 class="font-bold">
            With a rising demand in the world for pesticide-free and GMO-free
            pure natural food products, MRT was among the first to take up the
            initiative of organic methods of cultivation through its group of
            farmers.
          </h3>
          <div class="icon mx-auto my-3">
            <img
              src="/assets/custom/img/icon-leaf.png"
              data-src="/assets/custom/img/icon-leaf.png"
              alt="leaf"
              width="48"
              height="54"
            />
          </div>
          <p>
            We have farmers growing, rarest and finest spices, herbs and various
            other crops in the majestic valleys of Kashmir that are located at
            an altitude of about 10,000 ft to the foothills of the mystic
            mountains of western ghats, which is well known for its biological
            diversity and endemism. Our organic range of product includes
            Spices, Herbs, Essential oils, Ayurvedic Oils, Herbs &amp; Herbal
            Powders, Glycerin, Vegetable Oils, Ghee&amp; Honey, Organic Foods,
            Herbal Extracts, C02 Extracts, Floral Waters, Butters &amp; Waxes
            etc.
          </p>
          <img
            src="/assets/custom/img/vector2.png"
            data-src="/assets/custom/img/vector2.png"
            alt="leaf"
            class="vector1"
          />
          <img
            src="/assets/custom/img/vector3.png"
            data-src="/assets/custom/img/vector3.png"
            alt="leaf"
            class="vector2"
          />
        </div>
      </div>
    </section>
    <Certification></Certification>
    <footer1></footer1>
  </section>
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
      products: {},
    };
  },
  methods: {
    loadProduct(slug) {
      axios.get("/api/product/bySlug/" + slug).then(({ data }) => {
        this.products = data[0];
      });
    },
  },
  created() {
    this.slug = this.$route.params.slug;
    this.loadProduct(this.slug);
  },
};
</script>

