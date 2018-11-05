<template>
    <div>
        <div>
            <template v-for="(game,index) in games">
                <template v-if="game.link=='Basketball'">
                    <div v-bind:key="index" class="rows">
                        <div class="cols">
                            <img class="img-responsive" style="padding-right: 2px;" :src="'/storage/thumbnails/'+game.imageleft" alt="" height="250" width="500">
                        </div>
                        <div class="cols">
                            <img class="img-responsive" :src="'/storage/thumbnails/'+game.imageright" alt="" height="250" width="500">
                        </div>
                    </div>
                </template>
            </template>

            <div style="clear:both"></div>

            <div class="row">
                <div class="col-md-2 links">
                    <linksB></linksB>
                </div>
                <div class="col-md-7 the-content">
                    
                    <template v-for="(game,index) in games">
                    
                    <template v-if="game.link=='Basketball'">
                        
                        
                        <div v-bind:key="index"  class="rightSide-content">
                            <h1>{{game.title}}</h1>
                            <h4>
                                {{game.titlemesso}}
                            </h4>
                            <div v-html="game.body">
                                {{game.body}}
                            </div>
                        </div>
                    </template>
                
                </template>
                </div>

                <div class="col-md-3">
                    
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
        this.$store.dispatch('getGames');
    },
    computed:{
        ...mapGetters([
            'games'
        ])
    },
}
</script>

<style scoped>
.cols {
    float: left;
    width: 50%;
    padding: 0;
}
.img-responsive{
    width: 100%;
    height: auto;
}

</style>