<template>
  <section>
    <div
      class="modal fade"
      id="enquiryModal"
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
            <v-form @submit.prevent="submitEnquiry()">
              <input
                 v-model="form.id"
                  type="text" 
                  hidden
                />
              <div class="form-group">
                <input
                 v-model="form.email"
                  type="text" name="email"
                  placeholder="Enter email"
                  class="form-control"
                />
              </div>
              <div class="form-group">
                <input
                 v-model="form.phone"
                  type="text" name="phone"
                  placeholder="Phone Number"
                  class="form-control"
                />
              </div>

              <div class="d-flex">
                <button
                  type="button"
                  class="btn btn-default border text-dark px-4 rounded-0"
                  data-dismiss="modal" ref="Close"
                >
                  Cancel
                </button>
                <button type="submit" id="submit" class="btn btn-green btn-green-sm ml-auto">
                  Submit
                </button>
              </div>
            </v-form>
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
                <div v-html="products.short_description"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="cms">
      <div class="container-lg">
        <div v-html="products.description"></div>

<div class="row align-items-center border-bottom">
   <div class="col-md-6">Available bulk packing 5Kg, 10Kg, 50Kg</div>
    <div class="col-md-6 text-right"> 
     <a v-if="products.url" target="_blank" :href="products.url"  class="btn btn-default border font-bold">Shop online </a></div>
</div>
<div class="row align-items-center border-bottom">
   <div class="col-md-6">Available retail packing 15ml, 50ml, 100ml</div>
    <div class="col-md-6 text-right"> <a
              href="#"
              class="btn btn-default border font-bold"
              data-toggle="modal"
              data-target="#enquiryModal"
              >Bulk Order</a
            ></div>
</div>

    >
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
      form: new Form({
                id: '',
                email: '',
                phone: ''
            }),
    };
  },
  methods: {
    loadProduct(slug) {
      axios.get("/api/product/bySlug/" + slug).then(({ data }) => {
        this.products = data[0];
        this.form.id = this.products.id;
      });
    },
    submitEnquiry(){
          $('#submit').text('Please Wait...').attr('disabled','true');
          this.form.post('/api/enquire')
          .then(() => {
              this.form.reset();
              this.$refs.Close.click();
              swal.fire({
                  icon: 'success',
                  title: 'Thank You,Our executives will contact you shortly!'
              })
          })
          .catch(() => {
              this.form.reset();
              this.$refs.Close.click();
              swal.fire({
                  icon: 'error',
                  title: 'Something went wrong,Please try after sometime!'
              })
          })
    },
  },
  created() {
    this.slug = this.$route.params.slug;
    this.loadProduct(this.slug);
  },
};
</script>

