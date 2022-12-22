import { createRouter, createWebHistory } from 'vue-router'

import App from "@/App.vue";
import CompletedTodo from "@/components/CompletedTodo.vue";
import TodoList from "@/components/TodoList.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: TodoList
    },
    {
      path:"/history",
      name:"completed",
      component:CompletedTodo
    }
      /*
    {
      path:"/new",
      name:"new",
      component:CustomMessage
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/AboutView.vue')
    }

       */
  ]
})

export default router
