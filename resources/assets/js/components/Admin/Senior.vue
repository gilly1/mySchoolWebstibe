<template>
    <div class="bg-img"  style="background-image: url(../images/sd.jpg);">
        <div class="row">
            <div class="col-md-6 leftSide-content">
                <h1 class="logo"><span><b>my</b>school</span></h1>
            </div>
            <div class="col-md-6 rightSide-bgColor">

                <div class="links">
                    <linksA></linksA>
                </div>
                <hr>
            
            <div class="rightSide-content">
                <template v-for="(schbosspage,index) in schbosspage">
                    
                    <template v-if="schbosspage.position=='Senior Teacher'">
                        
                        
                        <div v-bind:key="index"  class="rightSide-content">
                            <h1>{{schbosspage.title}}</h1>
                            <h4><i>
                                {{schbosspage.titlemesso}}
                            </i></h4>
                            <div>
                                
                                <template class="align-items-center justify-content-center d-flex">
                                    <img id="image" :src="'/storage/thumbnails/'+schbosspage.image" alt="" width="200" height="150">
                                </template>
                                <p v-html="schbosspage.body">
                                    {{schbosspage.body}}
                                </p>
                            </div>
                        </div>
                    </template>
                
                </template>
               </div>
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
        this.$store.dispatch('getsShbosspage');
    },
    computed:{
        ...mapGetters([
            'schbosspage'
        ])
    },
}
</script>

<style scoped>
#image{
    border: 4px solid #0c658f;
    float: right;
    margin-right: 20px;
    margin-top: 70px;
}
</style>
