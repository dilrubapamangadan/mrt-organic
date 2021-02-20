<template>
<div>
    <transition
        mode="out-in"
        enter-active-class="animate__animated animate__fadeInRightBig animate__fast"
        leave-active-class="animate__animated animate__fadeOutLeftBig animate__fast"
      >
    <router-view></router-view>
    </transition>
        <!-- set progressbar -->
    <vue-progress-bar></vue-progress-bar>  
       
</div>
</template>

<script>
export default {
    name: "App"
}
</script>

<style scoped>
    :root {
    --animate-duration: 100ms;
    --animate-delay: 0s;
    }
</style>