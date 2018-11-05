<template>
    <div>
            <div class="row">
                <div class="col-md-3 links">
                    <linksB></linksB>
                </div>
                <div class="col-md-9 the-content">
                    <h2>Parents Teachers Association</h2>


					<section class="team-area section-gap">
						<div class="container">
							
							<div class="row justify-content-left d-flex align-items-left">
								
								<template v-for="(pta,index) in pta">
									<div v-bind:key="index"  class="col-md-3 col-sm-4 col-xs-6 single-team">
										<div class="thumb">
											<img class="img-fluid" :src="'/storage/thumbnails/'+pta.image" alt="">
											<div class="align-items-end justify-content-center d-flex">		                        	
												<p>
													{{pta.desc}}
												</p>
												<h4>{{pta.name}}</h4>		                            
											</div>
										</div>
									</div>	
										
								
								</template>
							</div>
					
						</div>
					</section>

            </div>
        </div>
    </div>
</template>

<script>
import linksB from './LinksB';
import{mapGetters} from 'vuex';
import{mapActions} from 'vuex';
export default {
    components:{
        linksB
	},
	mounted(){
        this.$store.dispatch('getPta');
    },
    computed:{
        ...mapGetters([
            'pta'
        ])
    },
}
</script>

<style scoped>


</style>


