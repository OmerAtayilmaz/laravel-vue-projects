<template>
  HELLO FROM PARENT
  {{user.email}}
  <div>
    <button @click="prevPage">Önceki Sayfa</button>
    <span>Sayfa {{ currentPage }}</span>
    <button @click="nextPage">Sonraki Sayfa</button>
  </div>
</template>
<script scope>
import AnotherComponent from "./AnotherComponent.vue";

export default {
  name:"ChildComponent",
  inject:['user'],
  extends:AnotherComponent
}
</script>
