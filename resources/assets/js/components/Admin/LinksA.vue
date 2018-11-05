<template>
    <div>
        <div class="row rightSide-content-links">
            <div class="col-sm-6">
                <ul>
                    <li><router-link to="/administration">OverView</router-link></li>
                    <li><router-link to="/administration/principal">principal</router-link></li>
                    <li><router-link to="/administration/deputy">Deputy Principal</router-link></li>
                    <li><router-link to="/administration/senior">Senior Teacher</router-link></li>
                </ul>
            </div>
            <div class="col-sm-6">
                <ul>
                    <li><router-link to="/administration/pta">P.T.A</router-link></li>
                    <li><router-link to="/administration/baord">Board of Governors</router-link></li>
                    <li><router-link to="/administration/teaching">Teachering Staff</router-link></li>
                    <li><router-link to="/administration/nonteaching">Non-Teaching Staff</router-link></li>
                </ul>
            </div>
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
