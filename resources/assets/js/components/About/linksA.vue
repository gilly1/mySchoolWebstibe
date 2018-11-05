<template>
    <div>
        <div class="row rightSide-content-links">
            <div class="col-sm-6">
                <ul>
                    <li><router-link to="/about">Overview</router-link></li>
                    <li><router-link to="/about/boarding">Boarding</router-link></li>
                    <li><router-link to="/about/news">News and Events</router-link></li>
                </ul>
            </div>
            <div class="col-sm-6">
                <ul>
                    <li><router-link to="/about/parents">Parents</router-link></li>
                    <li><router-link to="/about/alumni">Alumni</router-link></li>
                    <li><router-link to="/about/tender">Tender</router-link></li>
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
