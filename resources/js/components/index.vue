<template>
    <section>
        <header1></header1>
        <Banner></Banner>
        <Growth></Growth>
        <Story></Story>
        <Products></Products>
        <Organic></Organic>
        <OrganicExplenation></OrganicExplenation>
        <Certification></Certification>
        <footer1></footer1>
    </section>
</template>

<script>
import header1 from './header.vue'
import footer1 from './footer.vue'
import Banner from './index/Banner.vue'
import Growth from './index/Growths.vue'
import Story from './index/Story.vue'
import Products from './index/Products.vue'
import Organic from './index/Organic.vue'
import OrganicExplenation from './index/OrganicExplenation.vue'
import Certification from './index/Certification.vue'
import vWow from 'v-wow'

export default {
        components: { 
            header1,
            footer1,
            Banner,
            Growth,
            Story,
            Products,
            Organic,
            OrganicExplenation,
            Certification,
            vWow,
        }
}
</script>

