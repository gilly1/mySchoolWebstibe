
require('./bootstrap');

import Vue from 'vue'
import Vuex from 'vuex'
import vueRouter from 'vue-router'
import {routes} from './routes.js'
import storeData from './store.js'
import mainapp from './components/MainApp.vue'
import mainabout from './components/About/Main.vue'
import mainadministration from './components/Admin/Main.vue'
import maincocurricular from './components/Cocurricular/Main.vue'
import mainfaith from './components/Faith/Main.vue'
import mainacademics from './components/Academics/Main.vue'

Vue.use(Vuex)
Vue.use(vueRouter)

const store=new Vuex.Store(storeData);

const router=new vueRouter({
    routes,
    mode:'history'
})


const app = new Vue({
    el: '#app',
    router,
    store,
    components:{
        mainapp,
        mainabout,
        mainadministration,
        mainacademics,
        mainfaith,
        maincocurricular
    }
});