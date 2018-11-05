//index page
import Home from './components/Home.vue';

//about
import MainAbout from './components/About/Main.vue'
import About from './components/About/About.vue'
import Parents from './components/About/Parents.vue'
import News from './components/About/News.vue'
import Boarding from './components/About/Boarding.vue'
import Tender from './components/About/Tender.vue'
import Alumni from './components/About/Alumni.vue'

//admin
import MainAdmin from './components/Admin/Main.vue'
import Overview1 from './components/Admin/Overview.vue'
import Principal from './components/Admin/Principal.vue'
import Deputy from './components/Admin/Deputy.vue'
import Senior from './components/Admin/Senior.vue'
import PTA from './components/Admin/PTA.vue'
import Board from './components/Admin/Board.vue'
import Teachers from './components/Admin/Teachers.vue'
import NonTeaching from './components/Admin/NonTeaching.vue'

//academics
import MainAcademics from './components/Academics/Main.vue'
import Overview2 from './components/Academics/Overview.vue'
import Library from './components/Academics/Library.vue'
import Guidance from './components/Academics/Guidance.vue'
import Sciences from './components/Academics/Sciences.vue'
import Humanities from './components/Academics/Humanities.vue'
import Languages from './components/Academics/Languages.vue'
import Mathematics from './components/Academics/Mathematics.vue'
import Technical from './components/Academics/Technical.vue'

//Cocurricular
import MainCocurricular from './components/Cocurricular/Main.vue'
import Overview3 from './components/Cocurricular/Overview.vue'
import Rugby from './components/Cocurricular/Rugby.vue'
import Hockey from './components/Cocurricular/Hockey.vue'
import Football from './components/Cocurricular/Football.vue'
import Volleyball from './components/Cocurricular/Volleyball.vue'
import Basketball from './components/Cocurricular/Basketball.vue'
import Handball from './components/Cocurricular/Handball.vue'
import Indoorgames from './components/Cocurricular/Indoorgames.vue'

//faith and services
import MainFaith from './components/Faith/Main.vue'
import Overview4 from './components/Faith/Overview.vue'
import SDA from './components/Faith/SDA.vue'
import CU from './components/Faith/CU.vue'
import Catholics from './components/Faith/Catholics.vue'
import Muslims from './components/Faith/Muslims.vue'



export const routes=[
    {
        path: '/',
        component:Home
    },
    {
        path: '/about',
        component:MainAbout,
        children:[
            {
                path: '/',
                component:About
            },
            {
                path: 'parents',
                component:Parents
            },
            {
                path: 'news',
                component:News
            },
            {
                path: 'boarding',
                component:Boarding
            },
            {
                path: 'tender',
                component:Tender
            },
            {
                path: 'alumni',
                component:Alumni
            },
        ]
    },
    {
        path: '/administration',
        component:MainAdmin,
        children:[
            {
                path: '/',
                component:Overview1
            },
            {
                path: 'principal',
                component:Principal
            },
            {
                path: 'deputy',
                component:Deputy
            },
            {
                path: 'senior',
                component:Senior
            },
            {
                path: 'pta',
                component:PTA
            },
            {
                path: 'baord',
                component:Board
            },
            {
                path: 'teaching',
                component:Teachers
            },
            {
                path: 'nonteaching',
                component:NonTeaching
            },
        ]
    },
    {
        path: '/academics',
        component:MainAcademics,
        children:[
            {
                path: '/',
                component:Overview2,
            },
            {
                path: 'library',
                component:Library,
            },
            {
                path: 'guidance',
                component:Guidance,
            },
            {
                path: 'sciences',
                component:Sciences,
            },
            {
                path: 'humanities',
                component:Humanities,
            },
            {
                path: 'languages',
                component:Languages,
            },
            {
                path: 'mathematics',
                component:Mathematics,
            },
            {
                path: 'technical',
                component:Technical,
            }
        ]
    },
    {
        path: '/cocurriculars',
        component:MainCocurricular,
        children:[
            {
                path: '/',
                component:Overview3,
            },
            {
                path: 'rugby',
                component:Rugby,
            },
            {
                path: 'hockey',
                component:Hockey,
            },
            {
                path: 'football',
                component:Football,
            },
            {
                path: 'volleyball',
                component:Volleyball,
            },
            {
                path: 'basketball',
                component:Basketball,
            },
            {
                path: 'handball',
                component:Handball,
            },
            {
                path: 'indoorgames',
                component:Indoorgames,
            }
        ]
    },
    {
        path: '/faith',
        component:MainFaith,
        children:[
            {
                path: '/',
                component:Overview4,
            },
            {
                path: 'SDA',
                component:SDA,
            },
            {
                path: 'CU',
                component:CU,
            },
            {
                path: 'catholics',
                component:Catholics,
            },
            {
                path: 'muslims',
                component:Muslims,
            }
        ]
    }
    
]


