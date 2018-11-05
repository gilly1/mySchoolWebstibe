<template>
    <div>
        <div>

            <div class="row">
                <div class="col-md-3 links">
                    <linksB></linksB>
                </div>
                <div class="col-md-7 the-content">
                    
                    <template v-for="(news,index) in news">

                        <div :key="index">
                            <h2>{{news.title}}</h2>
                            <h4><i><b>{{news.date}}</b></i></h4>
                            <p v-html="news.body">{{news.body}}</p>
                        </div>
                    </template>
                    
                    
                </div>
                <div class="col-md-2">
                </div>

                
            </div>
        </div>
    </div>
</template>

<script>
import{mapGetters} from 'vuex';
import{mapActions} from 'vuex';
import linksB from './LinksB';
export default {
    components:{
        linksB
    },
    mounted(){
        this.$store.dispatch('getNews');
    },
    computed:{
        ...mapGetters([
            'news',
        ])
    },

}
</script>

<style scoped>


</style>