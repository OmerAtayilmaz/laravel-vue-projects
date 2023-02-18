<template>
  <main-layout>
    <template #header>
      <Navbar/>
      <button class="btn btn-outline-primary" @click="taskList = taskList.concat(taskList);">TRY RE-RENDER</button>
      <ul>
        <li v-for="item in taskList" :key="item.id" >{{item.title}}</li>
      </ul>
    </template>
    <template #default>
      <div class="container">
      <div class="row">
        <input class="form-control" v-model="example" @input="example = $event.target.value"/>
        <h1  v-once v-html="example"></h1>
        <h1  v-text="example"></h1>
        <h1  v-show="showBtn">Display özelliğine bakar</h1>
        <h1 v-if="showBtn">HOKUS HOKUS</h1>
        <div v-cloak>HERE
          <h1 v-for="text in message">{{text}}</h1>
        </div>
        <button class="btn btn-primary m-1" v-bind:disabled="showBtn">Click Me!</button>
        <button class="btn btn-warning" v-on:click="updateName">Update Name</button>
        <div class="col-12 text-center">{{fullName}}</div>
        <div class="col-md-12">
          <h1 class="text-center">{{page_title}}</h1>
          <small class="d-block text-center"> Son Giriş Zamanı: {{now}}</small>
        </div>
        <AddTask @insertionTriggered="createNewTask($event)" />
        <div class="col-md-12">
          <table class="table table-bordered">
            <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Task</th>
              <th scope="col" style="width:200px;">Actions</th>
            </tr>
            </thead>
            <tbody v-if="!taskList.some(item => item.status === 'new')"> AKTIF TASK YOK</tbody>
            <tbody v-else>
             <TaskItem v-for="task of taskList" :item="task" :key="task.id"
                       @completeTaskProcess = "markAsCompleted($event)"
                       @deleteTaskProcess = "markAsDeleted($event)"

             />
            </tbody>
          </table>
        </div>
        <CartModal
            :completedTasks = "completedTaskCount"
            :deleted-tasks = "deletedTaskCount"

        />
      </div>
    </div>
    </template>
    <template #footer>
      HELLO FROM FOOTER
    </template>
  </main-layout>
</template>
<script>
import TaskItem from "./components/common/TaskItem.vue";
import AddTask from "./components/common/AddTask.vue";
import CartModal from "./components/common/CartModal.vue";
import MainLayout from "./components/layout/MainLayout.vue";
import Navbar from "./components/common/Navbar.vue";
export default {
  layout:MainLayout,
  data: () => (
      {
        page_title:"Protodo",
        taskList: [
          { id:1,title:"Go to code!",status:'new'},
          { id:2,title:"Go to sleep!",status:'new'},
          { id:3,title:"Go to eat!",status:'new'},
          { id:4,title:"Go to feed your cats!",status:'new'},
          { id:5,title:"Go to code!",status:'new'},
        ],
        completedTaskCount:0,
        deletedTaskCount:0,
        firstName: 'John',
        lastName: 'Doe',
        example:'<small>Once bu işe yarar</small>',
        showBtn:true,
        selected:15,
        message:"a".repeat(10).split('')
      }

  ),
  computed:{
    now:() => new Date(Date.now()),
      fullName: {
        get() {
          return `${this.firstName} - ${this.lastName}`;
        },
        set(newVal){
          [this.firstName, this.lastName] = newVal.split(' ');
        }
      }
  },
  components:{
    Navbar,
    MainLayout,
    AddTask,
    TaskItem,
    CartModal,
  },
  methods:{
    createNewTask(event){
      this.$data.taskList.push({
        id: this.$data.taskList.length + 1,
        title: event,
        status:"new"
      })
    },
    markAsCompleted(event){
      let task = this.$data.taskList.find(item=>item.id === event);
      task.status = 'completed';
      this.$data.completedTaskCount++;
    },
    markAsDeleted(event){
      let task = this.$data.taskList.find(item => item.id === event);
      task.status = 'deleted';
      this.$data.deletedTaskCount++;
    },
    updateName() {
      this.fullName = "Mahmut Tuncer";
      this.example = 'text degisti';
      this.showBtn = !this.showBtn;
    }

  }

}
</script>
