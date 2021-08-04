<template>
    <section>
        <header1></header1>
        <section class="home-banner inner-banner">
      <div class="container-lg position-relative">
        <h2 class="font-bold page-title text-center">Contact</h2>

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
        <div class="py-5">
            <div class="row">
               <div class="col-md-4">
                    <h4 class="font-bold">REACH US</h4>
                    <address class="pb-4">
                         MRT ORGANIC GREEN PRODUCTS<br/>
3 – Palatty Buildings, Pipeline Road<br/>
Nr to Telephone Exchange<br/>
Aluva – 683101, Cochin, Kerala, India.
                    </address>
                     <h4 class="font-bold">REACH US</h4>
                     <small class="text-muted d-block">Phone:</small>
                     <div class="pb-1 font-bold">+91-484-2632991,+91-484-2124310</div>

                      <small class="text-muted d-block">Mobile:</small>
                      <div class="pb-1 font-bold">+91-9746039299</div>

                      <small class="text-muted d-block">Fax:</small>
                      <div class="pb-1 font-bold">+91-484-2624133</div>

                     <small class="text-muted d-block">Emailx:</small>
                      <div class="pb-1 font-bold">organic@mrtorganic.com</div>
                     
               </div>
               <div class="col-md-8">
                  <form>
  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter email">
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Mobile</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter mobile ">
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="text-right">
           <input type="submit" class="btn btn-dark text-white font-bold px-5" value="Submit">
  </div>
</form>
               </div>
            </div>
        </div>
          </div>
    </section>
          <Certification></Certification>
        <footer1></footer1>
    </section>
</template>

<script>
import header1 from './header.vue'
import footer1 from './footer.vue'
import Certification from "./index/Certification.vue";
import Index from './index.vue';
export default {
        components: { 
            header1,
            footer1,
            Certification,
                Index 
        }
}
</script>
