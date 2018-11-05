<template>
    <div>
        <div class="row">
            <div class="col-md-2 links">
                <linksB></linksB>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="fb-post" 
                    data-href="https://web.facebook.com/photo.php?fbid=992199010936386&set=pb.100004388886156.-2207520000.1536215681.&type=3&size=1511%2C2015">
                    </div>
                </div>
                <div>
                    <div class="fb-post" 
                    data-href="https://web.facebook.com/photo.php?fbid=849730745183214&set=pb.100004388886156.-2207520000.1536215681.&type=3&size=756%2C1344">
                    </div>
                </div>
            </div>

            <template v-for="(parents,index) in parent">
                    
                <template v-if="parent.platform=='facebook'">
                    
                    <div v-bind:key="index">
                        <div class="fb-post" :data-href="parent.link"></div>
                    </div>
                </template>

                <template v-if="parent.platform=='twitter'">
                    
                    <div v-bind:key="index">
                        <div class="fb-post" :data-href="parent.link"></div>
                    </div>
                </template>

                <template v-if="parent.platform=='instagram'">
                    
                    <div v-bind:key="index">
                        <div class="fb-post" :data-href="parent.link"></div>
                    </div>
                </template>
            
            </template>


            <div class="col-md-4">
                
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
        this.$store.dispatch('getParents');
    },
    computed:{
        ...mapGetters([
            'parents'
        ])
    },

}
</script>

<style>

</style>
