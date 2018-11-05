<template>
    <div>
        <div class="content">
             <transition
                name="custom-classes-transition"
                enter-active-class="animated slideInLeft"
            >
                <router-view></router-view>
             </transition>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'main-cocurricular',
    }
</script>
