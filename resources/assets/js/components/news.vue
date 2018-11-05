<template>


    
<div class="news">
    <carousel :perPageCustom="[[50, 1],[580, 2], [768, 3],[1024, 4]]">
        <template v-for="(news,index) in news">
            <slide v-bind:key="index" class="news-padding">
                <h3>{{news.title}}</h3>
                <h5>{{news.date}}</h5>
                <p v-html="news.body">{{news.body}}</p>
            </slide>
        </template>
    </carousel>
</div>



</template>

<script>
import{mapGetters} from 'vuex';
import{mapActions} from 'vuex';
import { Carousel, Slide } from 'vue-carousel';
export default {
    name:'events',
    components: {
        Carousel,
        Slide
    },
    mounted(){
        this.$store.dispatch('getNews');
    },
    computed:{
        ...mapGetters([
            'news'
        ])
    }
}
</script>

<style scoped>
.news{
    width: 95vw;
    margin: 4px auto;
}
.news-padding{
    padding: 4px;
}
@media screen  and (max-width: 580) {
    .news{
        font-size: 12px;
    }
}
@media screen  and (max-width: 768) {
    .news{
        font-size: 14px;
    }
}
</style>
