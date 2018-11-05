<template>
    <div>
            <div class="row">
                <div class="col-md-3 links">
                    <linksB></linksB>
                </div>
                <div class="col-md-9 the-content">
					<h1 class="logo"><span><b>my</b>school</span></h1>


					<section class="team-area section-gap">
						<div class="container">
								
							<div class="row justify-content-left d-flex align-items-left">
							
								<template v-for="(worker,index) in workers">

											<div  v-bind:key="index" class="col-md-3 col-sm-4 col-xs-6 single-team">
												<div class="thumb">
													<img class="img-fluid" :src="'/storage/thumbnails/'+worker.image" alt="">
													<div class="align-items-end justify-content-center d-flex">		                        	
														<p>
															{{worker.desc}}
														</p>
														<h4>{{worker.name}}</h4>		                            
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
        this.$store.dispatch('getWorkers');
    },
    computed:{
        ...mapGetters([
            'workers'
        ])
    },
}
</script>

<style scoped>


</style>