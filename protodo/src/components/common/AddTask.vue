<template>
  <div class="col-md-12 d-flex justify-content-evenly">
    <input class="form-control m-2" :value="text" @input="text = $event.target.value"  placeholder="Task girin"/>
    <button class="btn btn-warning m-2" v-on:click="insertTask(text)">CREATE</button>
  </div>
</template>
<script>
export default {
  name: "AddTask",
  data: () => ({
    text:'hello world'
  }),
  methods:{
    insertTask(text){
      this.$emit("insertionTriggered",text);
    }
  }
}
</script>
