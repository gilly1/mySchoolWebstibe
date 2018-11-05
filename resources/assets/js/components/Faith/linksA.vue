<template>
    <div class="row rightSide-content-links">
        <div class="col-sm-6">
            <ul>
                <li><router-link to="/faith">OverView</router-link></li>
                <li><router-link to="/faith/SDA">S.D.A</router-link></li>
                <li><router-link to="/faith/CU">C.U</router-link></li>
            </ul>
        </div>
        <div class="col-sm-6">
            <ul>
                <li><router-link to="/faith/catholics">Catholics</router-link></li>
                <li><router-link to="/faith/muslims">Muslims</router-link></li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name:'linksA'

}
</script>

<style>

</style>
