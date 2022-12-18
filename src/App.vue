<template>
  <img alt="Vue logo" src="./assets/logo.png" />
  <HelloWorld :msg="msg" />
  <input v-model="msg" />
  <button @click="getData()">Get Data</button>
  <ul>
    <li v-for="item in listItems" :key="item.index">
      {{ item.title }}
    </li>
  </ul>
</template>

<script>
import HelloWorld from "./components/HelloWorld.vue";

export default {
  name: "App",
  components: {
    HelloWorld,
  },
  methods: {
    getMessage() {
      return this.msg;
    },
    async getData() {
      const res = await fetch("https://jsonplaceholder.typicode.com/posts");
      const finalRes = await res.json();
      this.listItems = finalRes;
      console.log(this.getData());
    },
  },
  props: ["value", "disabled", "user"],
  data() {
    return {
      msg: "Hello From Parent Componentasdsad",
      items: [
        {
          message: "First Message",
          index: 1,
        },
        {
          message: "Second Message",
          index: 2,
        },
      ],
      listItems: [],
    };
  },
  created() {
    console.log("runnig");
    console.log(this.user);
  },
  mounted() {
    console.log("mounted running");
  },
};
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
