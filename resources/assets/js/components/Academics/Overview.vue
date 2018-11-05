<template>
    <div class="bg-img"  style="background-image: url(../images/image.jpg);">
        <div class="row">
            <div class="col-md-6 leftSide-content">
                <h1 class="logo"><span><b>my</b>school</span></h1>
            </div>
            <div class="col-md-6 rightSide-bgColor">

                <div class="links">
                    <linksA></linksA>
                </div>
                
                <hr>

                <template v-for="(overview,index) in overview">
                    
                    <template v-if="overview.page=='Academics'">
                        
                        
                        <div v-bind:key="index"  class="rightSide-content">
                            <h1>{{overview.title}}</h1>
                            <h4>
                                {{overview.titlemesso}}
                            </h4>
                            <div class="align-items-center justify-content-center d-flex">
                                <img class="img-responsive" :src="'/storage/thumbnails/'+overview.image" alt="" height="250" width="500">
                            </div>
                            <div v-html="overview.body">
                                {{overview.body}}
                            </div>
                        </div>
                    </template>
                
                </template>
            </div>
        </div>
    </div>
</template>

<script>
import{mapGetters} from 'vuex';
import{mapActions} from 'vuex';
import linksA from './linksA';
export default {
    components:{
        linksA
    },
    mounted(){
        this.$store.dispatch('getOverview');
    },
    computed:{
        ...mapGetters([
            'overview'
        ])
    },
}
</script>

<style scoped>

</style>
