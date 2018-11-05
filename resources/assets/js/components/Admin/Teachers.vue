<template>
    <div>
            <div class="row">
                <div class="col-md-3 links">
                    <linksB></linksB>
                </div>
                <div class="col-md-9 the-content">
                    <h2>Teaching Staff</h2>


					<section class="team-area section-gap">
						<div class="container">
							
						<template v-for="(teacher,index) in teachers">
						
								
								
								<div  v-bind:key="index" class="row justify-content-left d-flex align-items-left">
									<div class="col-md-3 col-sm-4 col-xs-6 single-team">
										<div class="thumb">
											<img class="img-fluid" :src="'/storage/thumbnails/'+teacher.image" alt="">
											<div class="align-items-end justify-content-center d-flex">		                        	
												<p>
													{{teacher.desc}}
												</p>
												<h4>{{teacher.name}}</h4>		                            
											</div>
										</div>
									</div>		                	                		                		                
								</div>
								
						
						</template>
					
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
        this.$store.dispatch('getTeachers');
    },
    computed:{
        ...mapGetters([
            'teachers'
        ])
    },
}
</script>

<style scoped>


</style>