<template>
    <div>
        <div class="row rightSide-content-links">
            <div class="col-sm-6">
                <ul>
                    <li><router-link to="/academics">OverView</router-link></li>
                    <li><router-link to="/academics/library">Library</router-link></li>
                    <li><router-link to="/academics/guidance">Guidance &amp; Counselling</router-link></li>
                    <li><router-link to="/academics/sciences">Sciences</router-link></li>
                </ul>
            </div>
            <div class="col-sm-6">
                <ul>
                    <li><router-link to="/academics/humanities">Humanities</router-link></li>
                    <li><router-link to="/academics/languages">Languages</router-link></li>
                    <li><router-link to="/academics/mathematics">Mathematics</router-link></li>
                    <li><router-link to="/academics/technical">Teachnical &amp; Creative</router-link></li>
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
