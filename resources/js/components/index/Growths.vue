<template>
         <!--counter section -->
    <section class="Company-Groth" >
        <div class="container-lg">
            <h2 class="font-normal text-center m-0">Let the numbers speak for us:</h2>
            <div class="row justify-content-between">
                
                <div class="colum font-bold border-right" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"><i><img src="/assets/custom/img/icon-hand.png" data-src="/assets/custom/img/icon-hand.png" width="68" height="68" alt="hand"> </i> <span class="d-block counter"><VueJsCounter start="0" end="35000" duration="2000" thousand=","></VueJsCounter></span>progressive&nbsp;farmers </div>
                
                <div class="colum font-bold border-right" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"><i><img src="/assets/custom/img/farm.png" data-src="/assets/custom/img/farm.png" width="76" height="76" alt="hand"> </i> <span class="d-block counter"><VueJsCounter start="0" end="280000" duration="2000" thousand=","></VueJsCounter></span>hectares&nbsp;of&nbsp;fertile&nbsp;land</div>
                <div class="colum font-bold border-right"  data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"><i><img src="/assets/custom/img/india.png" data-src="/assets/custom/img/india.png" width="67" height="70" alt="hand"> </i> <span class="d-block counter"><VueJsCounter  end="29" duration="2000" thousand=","></VueJsCounter></span>states&nbsp;of&nbsp;India</div>
                <div class="colum font-bold"  data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"><i><img src="/assets/custom/img/location.png" data-src="/assets/custom/img/location.png" width="62" height="62" alt="hand"> </i> <span class="d-block counter"><VueJsCounter  end="13" duration="2000" thousand=","></VueJsCounter></span>countries</div>
            </div>
        </div>
    </section>
    <!--counter section end-->
</template>
<script>
import VueJsCounter from 'vue-js-counter'

export default {
    data() {
    return {
      show: false
    }
  },
      components: { 
            VueJsCounter,
        },
mounted() {
    this.show = true; // might need this.$nextTick
  }
}
</script>