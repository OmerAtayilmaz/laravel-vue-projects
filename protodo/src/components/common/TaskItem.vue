<template>
  <tr v-if="item.status === 'new'">
    <th scope="row">{{item.id}}</th>
    <td>{{ item.title }}</td>
    <td class="d-flex align-items-center justify-content-evenly">
      <button class="btn btn-primary" v-on:click = "completeTask(item.id)">DONE</button>
      <button class="btn btn-danger" v-on:click = "deleteTask(item.id)">DELETE</button>
    </td>
  </tr>
</template>
<script>
export default {
  props:{
    item:{
      type:Object,
      default: { id:1,title:"Go to code!",status:"new"},
      required:true
    }
  },
  methods:{
    completeTask(id){
      this.$emit("completeTaskProcess",id);
    },
    deleteTask(id){
      this.$emit("deleteTaskProcess", id);
    }
  }
}
</script>
