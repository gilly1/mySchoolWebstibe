<template>
    <div>
        <div>

            <div class="row">
                <div class="col-md-3 links">
                    <linksB></linksB>
                </div>
                <div class="col-md-7 the-content">
                    
                    <template v-for="(tender,index) in tender">

                        <div :key="index">
                            <h2>{{tender.title}}</h2>
                            <p v-html="tender.body">{{tender.body}}</p>
                        </div>
                    </template>
                    
                    
                </div>
                <div class="col-md-2"></div>

                
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
        this.$store.dispatch('getTender');
    },
    computed:{
        ...mapGetters([
            'tender',
        ])
    },

}
</script>

<style scoped>


</style>