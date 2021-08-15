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
      <div class="pl-5 position-relative">
      <i class="las la-map-marker-alt position-absolute left-0 h2 text-green"></i>
 <h4 class="font-bold">REACH US</h4>
  MRT ORGANIC GREEN PRODUCTS<br/>
3 – Palatty Buildings, Pipeline Road<br/>
Nr to Telephone Exchange<br/>
Aluva – 683101, Cochin, Kerala, India.
      </div>
   </div>
    <div class="col-md-4">
      <div class="pl-5 pb-4 position-relative">
      <i class="las la-tty position-absolute left-0 h2 text-green"></i>

 +91-484-2632991,<br/>
+91-484-2124310
 
      </div>
        <div class="pl-5 pb-4 position-relative">
      <i class="las la-mobile-alt position-absolute left-0 h2 text-green"></i>

 +91-9746039299
 
      </div>
   </div>
    <div class="col-md-4">
      <div class="pl-5 pb-4 position-relative">
      <i class="las la-fax position-absolute left-0 h2 text-green"></i>
 +91-484-2624133
      </div>
       <div class="pl-5 position-relative">
      <i class="las la-envelope position-absolute left-0 h2 text-green"></i>
     
organic@mrtorganic.com
      </div>
   </div>
</div>
   <form @submit.prevent="submitEnquiry()">
<div class="bg-white p-md-5 p-4 shadow rounded mt-5 contact-form">


            <div class="row">
         
              <div class="col-lg-6">
 <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input v-model="form.name" name="name" type="text" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Enter Name">
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input v-model="form.email" name="email" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Mobile</label>
    <input v-model="form.phone" name="phone" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter mobile ">
  </div>
              </div>
               <div class="col-lg-6">
 <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea v-model="form.message" name="message" class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
  </div>
  <div class="text-right">
           <input type="submit" id="submit" class="btn btn-dark text-white font-bold px-5" value="Submit">
  </div>
              </div>
         
  

               </div>
            </div>
               </form>
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
        },
        data() {
          return {
            products: {},
            form: new Form({
              name: "",
              email: "",
              phone: "",
              message: ""
            }),
          };
        },
        methods: {
          submitEnquiry() {
              $("#submit").text("Please Wait...").attr("disabled", "true");
              this.form
                .post("/api/contact")
                .then(() => {
                  this.form.reset();
           
                  swal.fire({
                    icon: "success",
                    title: "Thank You,Our executives will contact you shortly!",
                  });
                })
                .catch(() => {
                  this.form.reset();

                  swal.fire({
                    icon: "error",
                    title: "Something went wrong,Please try after sometime!",
                  });
                });
          },
        }
}
</script>
