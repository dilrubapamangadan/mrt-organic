<template>
    <section>
        <header1></header1>
        <div>
            Product Details
        </div>
        <Certification></Certification>
        <footer1></footer1>
    </section>
</template>

<script>
import header1 from './header.vue'
import footer1 from './footer.vue'
import Certification from './index/Certification.vue'
export default {
        components: { 
            header1,
            footer1,
            Certification,
        }
}
</script>

