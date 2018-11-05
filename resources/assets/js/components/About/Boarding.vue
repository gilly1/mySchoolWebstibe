<template>
    <div class="bg-img"  style="background-image: url(../images/image3.jpg);">
        <div class="row">
            <div class="col-md-6 leftSide-content">
                <h1 class="logo"><span><b>my</b>school</span></h1>
            </div>
            <div class="col-md-6 rightSide-bgColor">

                <div class="links">
                    <linksA></linksA>
                </div>
                <hr>
                
                <template v-for="(about,index) in about">
                    
                    <template v-if="about.link=='Boarding'">
                        
                        
                        <div v-bind:key="index"  class="rightSide-content">
                            <h1>{{about.title}}</h1>
                            <h4>
                                {{about.titlemesso}}
                            </h4>
                            <div class="align-items-center justify-content-center d-flex">
                                <img class="img-responsive" :src="'/storage/thumbnails/'+about.image" alt="" height="250" width="500">
                            </div>
                            <div v-html="about.body">
                                {{about.body}}
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
        this.$store.dispatch('getAbout');
    },
    computed:{
        ...mapGetters([
            'about'
        ])
    },
}
</script>

<style scoped>

</style>
