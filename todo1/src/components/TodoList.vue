<template>
  <div class="todo">
    <div>
      <input v-model="newTodo" placeholder="Add a todo item"/>
      <button @click="addTodo">Add</button>
    </div>
    <ul>
      <li v-for="task in todos" :key="task.id">
        {{task.text}}
        <button @click="removeTodo(task.id)">Delete</button>
      </li>
    </ul>
  </div>
</template>
<script>
export default{
  data(){
    return {
      newTodo:'',
      todos:[]
    }
  },
  methods:{
    addTodo(){
      if(this.newTodo){
        this.todos.push({
          id:this.todos.length+1,
          text:this.newTodo
        });
        this.newTodo='';
      }
    },
    removeTodo(id){
      this.todos=this.todos.filter(todo=>todo.id!==id);
    }
  }
}
</script>
<style>
.todo{
  max-width: 80vw;
  width:1000px;
  background: linear-gradient(to right,tomato, #fa8d79);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding:5px;
  border-radius: 8px;
}
.todo input{
  border:none;
  background-color: #ededed;
  width:400px;
  height: 40px;
  border-radius: 8px;
  text-indent: 12px;
}
.todo input:focus{
  border:none;
  outline: none;
}
.todo button{
  border:none;
  background-color: #2c3e50;
  width:200px;
  height: 40px;
  border-radius: 8px;
  margin-left: 5px;
  color:#fff;
  font-weight: 100;
  letter-spacing: 1px;
}
.todo ul{
  background-color: #ffb8ac;
  width:600px;
  margin-top:5px;
  border-radius: 8px;
}
.todo ul li{
  margin:8px 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 8px;
}
.todo ul button{
  background-color: red;

}
</style>
