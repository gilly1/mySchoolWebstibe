<template>
    <div>
        <!-- start banner Area -->
        <section>
            
            <div class="slideshow-container">

                <div class="mySlides fades">
                    <img src="images/image8.jpg" class="cover-img" style="width:100%;">
                    <div class="text">
                        <p>What do you wanna see</p>
                    </div>
                </div>

                <template v-for="(coverimage,index) in coverimage">
                        
                    <div v-bind:key="index" class="mySlides fades">
                        <img :src="'/storage/thumbnails/'+coverimage.image" class="cover-img" style="width:100%;">
                        <div class="text">
                            <p>{{coverimage.desc}}</p>
                        </div>
                    </div>
                            
                </template>
                

            </div>
            
        </section>
    <!-- End banner Area -->

    <!-- start Jumbotron Area -->
    <template v-for="(jumbotron,index) in jumbotron">
        <div v-bind:key="index" class="jumbotron jumbo">
            <div class="container text-center">
                <h3 class="">{{jumbotron.title}}</h3>
                <hr>
                <p v-html="jumbotron.body">{{jumbotron.body}}</p>
            </div>
        </div>
    </template>
    <!-- End Jumbotron Area -->

    <!-- start why us Area -->
    <div class="row-height">
        <div class="accordion-size">
            <div class="accordion" id="accordionExample" style="width:100%; margin:auto; max-height:600px;">
                
                
                <template v-for="(whyus,index) in whyus">

                    <template v-if="whyus.forunique=='value1'">
                        <div v-bind:key="index" class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        {{whyus.title}}
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body" v-html="whyus.body">
                                    {{whyus.body}}
                                </div>
                            </div>
                        </div>
                    </template>


                    <template v-if="whyus.forunique=='value2'">
                        <div v-bind:key="index" class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        {{whyus.title}}
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body" v-html="whyus.body">
                                    {{whyus.body}}
                                </div>
                            </div>
                        </div>
                    </template>

                    <template v-if="whyus.forunique=='value3'">
                        <div v-bind:key="index" class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        {{whyus.title}}
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body" v-html="whyus.body">
                                    {{whyus.body}}
                                </div>
                            </div>
                        </div>
                    </template>

                </template>
                
            </div>
        </div>
    </div>
   
     <!-- End why us Area -->

     <!--Start Photo Grid -->
     
    <div>
        <div class="rows1">
            <template v-for="(frontgallery,index) in frontgallery">
                <template v-if="frontgallery.forunique=='image1'">
                    <div v-bind:key="index" class="media">
                        <img class="images" :src="'/storage/thumbnails/'+frontgallery.image" alt="" >
                    </div>
                </template>
                <template v-if="frontgallery.forunique=='image2'">
                    <div v-bind:key="index" class="media">
                        <img class="images" :src="'/storage/thumbnails/'+frontgallery.image" alt="" >
                    </div>
                </template>
                <template v-if="frontgallery.forunique=='image3'">
                    <div v-bind:key="index" class="media">
                        <img class="images" :src="'/storage/thumbnails/'+frontgallery.image" alt="" >
                    </div>
                </template>
            </template>
        </div>
        <div class="rows2">
            <template v-for="(frontgallery,index) in frontgallery">
                <template v-if="frontgallery.forunique=='image4'">
                    <div v-bind:key="index" class="media">
                        <img class="images" :src="'/storage/thumbnails/'+frontgallery.image" alt="" >
                    </div>
                </template>
            </template>
        </div>
    </div>
      
<!-- End Photo Grid -->

            <!-- Start of events -->
                <section>
                    <div class="announcements" id="top">
                        <h2 class="Events">UPCOMMING EVENTS</h2>

                        <div class="news">
                            <transition
                                name="custom-classes-transition"
                                enter-active-class="animated slideInLeft"
                                leave-active-class="animated slideOutRight"
                            >
                            <events></events>
                            </transition>
                            
                        </div>
                    </div>
                </section>
                <!-- end of events -->

     <!-- Start of counter -->

        <div id="colorlib-counter" class="colorlib-counters" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            
                            
                            <template v-for="(counter,index) in counter">

                                <div v-bind:key="index" class="col-md-3 col-sm-6 text-center animate-box">
                                    <span class="colorlib-counter">{{counter.value}}</span>
                                    <span class="colorlib-counter-label">{{counter.name}}</span>
                                </div>
                            </template>

                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- End of counter -->

    </div>
</template>

<script>
import events from './news';
import{mapGetters} from 'vuex';
import{mapActions} from 'vuex';
export default {
    components:{
        events
    },
    mounted(){
        this.$store.dispatch('getCoverImage');
        this.$store.dispatch('getJumbotron');
        this.$store.dispatch('getWhyUs');
        this.$store.dispatch('getFrontGallery');
        this.$store.dispatch('getCounter');
    },
    computed:{
        ...mapGetters([
            'coverimage',
            'jumbotron',
            'whyus',
            'frontgallery',
            'counter',
        ])
    },
}
</script>

<style scoped>

.mySlides {display: none;}

.cover-img{
  width: 100vw;
  height: auto;
  max-height:80vh;
  position: relative;
}


/* Slideshow container */
.slideshow-container {
  position: relative;
}

/* Caption text */

.text {
    position: absolute;
    bottom: 5vh;
    left: 2vw;
    max-width: calc(100% - 2em);
    margin: 1em auto;
    width: 500px;
    height: 100px;
    text-align: center;
    border-radius: 6px;
    background-color: rgba(0,0,0,.3);
    color: white;
    font-size: 25px;
    font-weight: bolder;
    padding-left: 20px;
    padding-right: 20px;
}

.active {
  background-color: #717171;
}



/* On smaller screens, decrease text size */
@media only screen and (max-width: 600px) {
  .text {display:none;}
}
/*end of image slider*/




.jumbo{
    background-color: rgb(178, 178, 241);
    color: black;
}
.jumbo h3{
    color:blue;
    text-transform: uppercase;
}
.jumbo p{
    line-height: 35px;
    font-size: 20px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color: grey;
}
.accordion-size{
    width: 70vw;
    margin: 0 auto;
    max-width: calc(100% - 2em);
    margin: 1em auto;
    width: 1000px;
}
.btn-link{
    text-decoration: none;
    color: blue;
    text-align: center;
    font-size: 20px;
}
.card-header{
    background-color: white;
}
.row-height{}

#accordion .btn-link{
    font-size: 17px;
    color: blue;
    text-decoration: none;
    text-transform: uppercase;
}

#accordion .card-header{
    background-color: rgb(211, 227, 228);
}

.about-img {
  width:100%; 
  height:auto; 
  min-height:500px; 
  max-height:600px;
}
@media (max-width: 768px) {
  .about-img-div {
    display:none;
  }
}

/*gallery*/

    
    .rows1,
    .rows2{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    .media{
        min-width: 0;
        margin: 5px;
    }
  .images{
      max-width: 100%;
      max-height: 450px;
    }
     @media (min-width: 768px) {
        .images{
            width: 200px;
        }
    }
     @media (min-width: 930px) {
        .images{
            width: 300px;
        }
    }
     @media (min-width: 1380px) {
        .images{
            width: 450px;
        }
    }
    @media (max-width: 767px) {
        .rows1 {
            display:none;
        }
        .images{
            width: 200px;
        }
    }
     @media (max-width: 630px) {
        .images{
            width: 350px;
        }
    }
    
    /*Events*/

    .Events{
        color:blue;
        padding: 10px;
        text-align: center;
    }

/*counter*/
.colorlib-counters {
  padding: 3em 0;
  background-size: cover;
  background-attachment: fixed;
  background-position: center center;
  position: relative; }
  .colorlib-counters .overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    content: '';
    background: #00b7ea;
    /* Old browsers */
    background: -moz-linear-gradient(45deg, #43DDE6 0%, #9870FC 100%);
    /* FF3.6-15 */
    background: -webkit-linear-gradient(45deg, #43DDE6 0%, #9870FC 100%);
    /* Chrome10-25,Safari5.1-6 */
    background: -o-linear-gradient(45deg, #43DDE6 0%, #9870FC 100%);
    background: linear-gradient(45deg, #43DDE6 0%, #9870FC 100%);
    /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#43DDE6', endColorstr='#9870FC',GradientType=1 );
    /* IE6-9 fallback on horizontal gradient */
    opacity: .8; }
  .colorlib-counters .colorlib-counter {
    font-size: 30px;
    display: block;
    color: white;
    width: 100%;
    font-weight: 300;
    margin-bottom: .1em; }
  .colorlib-counters .colorlib-counter-label {
    color: rgba(255, 255, 255, 0.8);
    font-size: 14px;
    margin-bottom: 2em;
    display: block; }
  .colorlib-counters .icon i {
    font-size: 50px;
    color: #fff; }
</style>
