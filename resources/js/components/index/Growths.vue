<template>
         <!--counter section -->
    <section class="Company-Groth" >
        <div class="container-lg">
            <h2 class="font-normal text-center m-0">Let the numbers speak for us:</h2>
            <div class="row justify-content-between">
                
                <div class="colum font-bold border-right" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"><i><img src="/assets/custom/img/icon-hand.png" data-src="/assets/custom/img/icon-hand.png" width="68" height="68" alt="hand"> </i> <span class="d-block counter"><countTo :startVal="0" :endVal="35000" :duration="6000" ></countTo></span>progressive&nbsp;farmers </div>
                
                <div class="colum font-bold border-right" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"><i><img src="/assets/custom/img/farm.png" data-src="/assets/custom/img/farm.png" width="76" height="76" alt="hand"> </i> <span class="d-block counter"><countTo :startVal="0"  :endVal="280000" :duration="6000" ></countTo></span>hectares&nbsp;of&nbsp;fertile&nbsp;land</div>

                <div class="colum font-bold border-right"  data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"><i><img src="/assets/custom/img/india.png" data-src="/assets/custom/img/india.png" width="67" height="70" alt="hand"> </i> <span class="d-block counter"><countTo :startVal="0"  :endVal="29"  :duration="9000" ></countTo></span>states&nbsp;of&nbsp;India</div>

                <div class="colum font-bold"  data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"><i><img src="/assets/custom/img/location.png" data-src="/assets/custom/img/location.png" width="62" height="62" alt="hand"> </i> <span class="d-block counter"><countTo :startVal="0"  :endVal="13" :duration="9000" ></countTo></span>countries</div>
            </div>
        </div>
    </section>
    <!--counter section end-->
</template>
<script>
import countTo from 'vue-count-to';
export default {
    data() {
    return {
      show: false
    }
  },
      components: { 
            countTo,
        },
mounted() {
    this.show = true; // might need this.$nextTick
  }
}
</script>