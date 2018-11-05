<template>
    <div class="row rightSide-content-links">
        <div class="col-sm-6">
            <ul>
                <li><router-link to="/cocurriculars">OverView</router-link></li>
            <li><router-link to="/cocurriculars/rugby">Rugby</router-link></li>
            <li><router-link to="/cocurriculars/hockey">Hockey</router-link></li>
            <li><router-link to="/cocurriculars/football">FootBall</router-link></li>
            </ul>
        </div>
        <div class="col-sm-6">
            <ul>
            <li><router-link to="/cocurriculars/volleyball">VolleyBall</router-link></li>
            <li><router-link to="/cocurriculars/basketball">BasketBall</router-link></li>
            <li><router-link to="/cocurriculars/handball">Handball</router-link></li>
            <li><router-link to="/cocurriculars/indoorgames">Indoor Games</router-link></li>
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
