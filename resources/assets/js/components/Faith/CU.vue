<template>
    <div class="bg-img"  style="background-image: url(../images/image11.jpg);">
        <div class="row">
            <div class="col-md-6 leftSide-content">
                <h1 class="logo"><span><b>my</b>school</span></h1>
            </div>
            <div class="col-md-6 rightSide-bgColor">

                <div class="links">
                    <linksA></linksA>
                </div>
                <hr>
                
                <template v-for="(faith,index) in faith">
                    
                    <template v-if="faith.link=='Christian Union'">
                        
                        
                        <div v-bind:key="index"  class="rightSide-content">
                            <h1>{{faith.title}}</h1>
                            <h4>
                                {{faith.titlemesso}}
                            </h4>
                            <div class="align-items-center justify-content-center d-flex">
                                <img class="img-responsive" :src="'/storage/thumbnails/'+faith.image" alt="" height="250" width="500">
                            </div>
                            <div v-html="faith.body">
                                {{faith.body}}
                            </div>
                        </div>
                    </template>
                
                </template>

            </div>
        </div>
    </div>
</template>

<script>
import linksA from './LinksA';
import{mapGetters} from 'vuex';
import{mapActions} from 'vuex';
export default {
    components:{
        linksA
    },
    mounted(){
        this.$store.dispatch('getFaith');
    },
    computed:{
        ...mapGetters([
            'faith'
        ])
    },
}
</script>

<style scoped>

</style>

