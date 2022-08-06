<template>
    <div class="container">
        <h3 class="p-3 text-center text-white">Albums</h3>
        <table class="table table-striped table-bordered bg-secondary ">
            <thead>
                <tr>
                    <th>Albums</th>
                    <th>Age</th>
                    <th>Publish</th>
                    <th>Followers</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="mus in musics" :key="mus.id">
                    <td>{{mus.singer_name}}</td>
                    <td> {{mus.age}}</td>
                    <td>{{mus.yr_release}}</td>
                    <td>{{mus.followers}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script setup>
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout,
    props: {
        musics: Array
    }
}
</script>

<style scoped>
.card {
    width: 375%;
}
</style>
