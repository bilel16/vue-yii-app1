<template>
  <div class='container'>
    <a-typography-title>Product Management Application</a-typography-title>
    <router-view></router-view>
  </div>
</template>

<script>
import ProductsList from './components/ProductsList.vue';
import ProductItem from './components/ProductItem';

export default {
  components: {
    ProductsList,
    ProductItem
  }
}
</script>

<style scoped>
.container {
  padding: 2%;
}
</style>
