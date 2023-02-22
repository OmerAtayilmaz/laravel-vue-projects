<template>
  <child-component/>
</template>
<script>
import ChildComponent from "./ChildComponent.vue";

export default {
  name:"ParentComponent",
  components: {ChildComponent},
  provide:()=>({
            user: {
              name: 'John Doe',
              email: 'johndoe@gmail.com'
            }
          }),
  data:function (){
    return {
      currentPage:1
    }
  },

}
</script>
