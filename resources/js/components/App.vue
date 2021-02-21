<template>
<div>
    <transition
        mode="out-in"
        enter-active-class="animate__animated animate__fadeInLeft animate__fast"
        leave-active-class="animate__animated animate__fadeOut animate__fast"
      >
      <header1></header1>
    </transition>

    <router-view></router-view>

        <!-- set progressbar -->
    <vue-progress-bar></vue-progress-bar>  
    <footer1></footer1>
       
</div>
</template>

<script>
import header1 from '../components/header'
import footer1 from '../components/footer'
export default {
    components: {
        header1,
        footer1
    },
    name: "App"
}
</script>

<style scoped>
    /* :root {
    --animate-duration: 100ms;
    --animate-delay: 0s;
    } */
</style>