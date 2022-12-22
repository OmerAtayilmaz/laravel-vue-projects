<template>
  Hello From App
  <AwesomeComponent :msg=msg />
</template>

<script>
import AwesomeComponent from '@/components/AwesomeComponent.vue'
export default {
  name: 'App',
  data () {
    return {
      msg: 'this data comes from parent'
    }
  },
  components: {
    AwesomeComponent
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
