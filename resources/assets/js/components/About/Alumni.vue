<template>
    <div>
        <div class="row">
            <div class="col-md-2 links">
                <linksB></linksB>
            </div>
            <div class="col-md-6">

                
                <div class="row">
                    <template v-for="(alumni,index) in alumni">
                        
                        <div v-bind:key="index" class="">
                            <div class="fb-post col-md-3"
                                :data-href="alumni.link">
                            </div>
                        </div>
                        
                    </template>
                </div>
            </div>


            <div class="col-md-4"></div>
        </div>
    </div>
</template>

<script>
import{mapGetters} from 'vuex';
import{mapActions} from 'vuex';
import linksB from './LinksB';
import { Carousel, Slide } from 'vue-carousel';
export default {
    components:{
        linksB,
        Carousel,
        Slide
    },
    mounted(){
        this.$store.dispatch('getAlumni');
    },
    computed:{
        ...mapGetters([
            'alumni'
        ])
    },

}
</script>

<style>

</style>
