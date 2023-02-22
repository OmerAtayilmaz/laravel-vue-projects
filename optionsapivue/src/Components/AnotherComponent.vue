<template>
</template>
<script>

export default {
  name:"AnotherComponent",
  data:function (){
    return {
      currentPage:1
    }
  },
  methods:{
    nextPage(){
      this.currentPage++;
    },
    prevPage() {
      this.currentPage--;
    }
  }
}
</script>
