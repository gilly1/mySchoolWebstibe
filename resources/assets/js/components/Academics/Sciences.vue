<template>
    <div class="bg-img"  style="background-image: url(../images/image2.jpg);">
        <div class="row">
            <div class="col-md-6 leftSide-content">
                <h1 class="logo"><span><b>my</b>school</span></h1>
            </div>
            <div class="col-md-6 rightSide-bgColor">

                <div class="links">
                    <linksA></linksA>
                </div>
                <hr>
                
                <template v-for="(academic,index) in academics">
                    
                    <template v-if="academic.link=='Sciences'">
                        
                        
                        <div v-bind:key="index"  class="rightSide-content">
                            <h1>{{academic.title}}</h1>
                            <h4>
                                {{academic.titlemesso}}
                            </h4>
                            <div class="align-items-center justify-content-center d-flex">
                                <img class="img-responsive" :src="'/storage/thumbnails/'+academic.image" alt="" height="250" width="500">
                            </div>
                            <div v-html="academic.body">
                                {{academic.body}}
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
        this.$store.dispatch('getAcademics');
    },
    computed:{
        ...mapGetters([
            'academics'
        ])
    },
}
</script>

<style scoped>

</style>
