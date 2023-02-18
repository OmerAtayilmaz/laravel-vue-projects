<template>
  <button v-on:click="toggleModal" class="w-100  btn btn-info">History</button>
  <div v-if="isActive" class="col-12 d-flex justify-content-between">
    <h6 class="text-success">Completed Tasks: {{completedTasks}}</h6>
    <h6 class="text-danger">Removed Tasks: {{deletedTasks}}</h6>
  </div>
</template>
<script>
export default{
  props: {
    completedTasks: { type: Number , default: 0},
    deletedTasks: { type: Number , default: 0}
  },
  data:function (){
    return {
      isActive: false,
    }
  },
  methods:{
    toggleModal(){
        return this.$data.isActive = !this.$data.isActive;
    }
  }

}
</script>
