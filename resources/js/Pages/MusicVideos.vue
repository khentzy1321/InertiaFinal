<template>
    <h1 class="text-center text-white">Music Videos</h1>
<div class="img1">
  <figure class="figure">
  <img src="img/img1.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption text-end text-light">Show more...</figcaption>
</figure>
</div>
<div class="img2">
  <figure class="figure">
  <img src="img/img2.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption text-end text-light">Show more...</figcaption>
</figure>
</div>
<div class="img3">
  <figure class="figure">
  <img src="img/img3.jpg" class="figure-img img-fluid rounded float-end" alt="...">
  <figcaption class="figure-caption text-end text-light">Show more...</figcaption>
</figure>
</div>
</template>

<script setup>
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout,
}
</script>
<style scoped>
.img1{
    width:30%;
    height: 100%;
    margin-left: 36%;
    margin-right: 10%;
}
.img2{
    width:25.6%;
    height: 20%;
    margin-left: 36%;
    margin-right: auto;
}
.img3 {
    width:25.6%;
    height: 20%;
    margin-left: 36%;
    margin-right: auto;
}
</style>
