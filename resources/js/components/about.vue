<template>
  <section>
    <header1></header1>
    <section class="home-banner inner-banner">
      <div class="container-lg position-relative">
        <h2 class="font-bold page-title text-center">About Us</h2>

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
    <!-- begin: about -->
    <section class="section-about">
      <div class="container-lg">
        <div class="box text-center">
          <div class="display-4 font-bold text-green">Welcome</div>
          <div class="h4 text-green font-bold pb-4">
            MRT Organic Green Products is one of the most reliable and
            resourceful cultivators, distillers and extractors of Conventional
            and Organic Plant-derived ingredients and products based in Cochin,
            India.
          </div>
          <p>
            With more than 45000 progressive farmers working in 2,80,000
            hectares of fertile land, spread over 29 states of India, and 13
            countries make MRT a sustainable development mission of producing
            high-quality plant materials for making Essential oils, Cold Pressed
            Oils, Ayurvedic Oils, Co2 Extracts and many other food products.
          </p>
        </div>
      </div>
    </section>
    <!-- end: about -->
    <!-- begin: history -->
    <section class="history">
      <div class="top">
        <img
          src="/assets/custom/img/farming.png"
          width="1920"
          height="314"
          class="d-block w-100"
        />
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4">
            <img src="/assets/custom/img/muni.png" width="516" height="455" />
          </div>
          <div class="col-lg-8 text-white">
            <div class="h4 text-yellow font-bold pb-4">Krishnan Vaidyan</div>
            <div class="font-bold">
              Krishnan Vaidyan was a well known ayurvedic physician and was
              among the best in the doctor's panel of Sree Padmanabhadasa Sree
              Chithira Thirunal Balarama Varma (the last ruling Maharaja of the
              Princely State of Travancore).
            </div>
            What started as an ayurvedic treatment centre specialising in
            snakebite treatment, skincare therapies, herbal beauty treatments,
            wellness and rejuvenation therapies in the early 19th century by our
            highly respected visionary, late Krishnan Vaidyan is now a
            sustainable development mission helping millions adopt a healthy
            lifestyle free of harmful pesticides.
          </div>
        </div>
      </div>
      <div>
        <div class="container p-0 relative">
          <img
            src="/assets/custom/img/vector4.png"
            width="298"
            height="237"
            class="d-block vector-about"
          />
        </div>
        <img
          src="/assets/custom/img/shade-btm.png"
          width="1920"
          height="314"
          class="w-100"
        />
      </div>
    </section>
    <!-- end: history -->
    <!-- begin: ceo -->
    <section class="ceo">
      <div class="container relative">
        <div class="row">
          <div class="col-lg-4 left">
            <div class="border-inner h-100">
              <img
                src="/assets/custom/img/balan.jpg"
                width="444"
                height="390"
                class="w-100 d-block"
              />
            </div>
          </div>
          <div class="col-lg-8 right text-white">
            <div class="border-inner h-100 text-center">
              <div class="h4 text-yellow font-bold">Mr MahiBalan</div>
              <h6 class="font-bold pb-4">Founder and CEO</h6>
              Born in a traditional family of ayurvedic physicians of 5
              generations, Mr MahiBalan, the founder and CEO of MRT Organics
              learned the basics of plant science from his great grandfather.
            </div>
          </div>
        </div>
        <img
          src="/assets/custom/img/vector5.png"
          width="237"
          height="188"
          class="vector"
        />
      </div>
    </section>
    <!-- end: Ceo -->
   <section class="org-product-info position-relative">
    <div class="wall"></div>
      <div class="container-lg">
          <div class="box text-center text-light">
        
     <h3 class="font-bold">With a rising demand in the world for pesticide-free and GMO-free pure natural 
     food products, MRT was among the first to take up the initiative of organic methods of cultivation 
     through its  group of farmers.</h3>
     <div class="icon mx-auto my-3"><img src="/assets/custom/img/icon-leaf.png" data-src="/assets/custom/img/icon-leaf.png" alt="leaf" width="48" height="54"></div>
<h3 class="font-bold mb-3">We have farmers growing, rarest and finest spices, herbs and various other crops in the majestic valleys of Kashmir that are located at an altitude of about 10,000 ft to the foothills of the mystic mountains of western ghats, which is well known for its biological diversity and endemism.  Our organic range of product includes Spices, Herbs, Essential oils,  Ayurvedic Oils, Herbs & Herbal Powders, Glycerin, Vegetable Oils, Ghee& Honey, Organic Foods,  Herbal Extracts, C02 Extracts, Floral Waters, Butters & Waxes etc.</h3>


<img src="/assets/custom/img/vector2.png" data-src="/assets/custom/img/vector2.png" alt="leaf" class="vector1" >
<img src="/assets/custom/img/vector3.png" data-src="/assets/custom/img/vector2.png" alt="leaf" class="vector2" >

          </div>
      </div>
    </section>
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
};
</script>

