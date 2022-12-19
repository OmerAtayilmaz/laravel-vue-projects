<template>
    <div class="todo">
        <div class="header">
            <h2 id="title">Todolistan</h2>
            <add-item-form v-on:itemchanged="getList()"/>
        </div>
        <list-view :items="items"
        v-on:reloadlist="getList()"
        />
    </div>
</template>

<script>
import AddItemForm from "@/AddItemForm.vue";
import ListView from "@/ListView.vue"

export default {
    data:function (){
        return {
            items:[]
        }
    },
    components:{
        AddItemForm,
        ListView
    },
    methods:{
        getList(){
            axios.get("api/items").then(response=>this.items=response.data)
                .catch(err=>console.log(err));
        }
    },
    //then this component created
    created(){
        this.getList()
    }
}
</script>
<style scoped>
    .todo{
      height: 100%;
      min-height: 100vh;
      background:#F5F5DC;
    }
    .header{
        padding:12px;
        color:#666AF6;
        font-size: 2rem;

    }
    #title{
        text-align: center;
        font-weight: 400;
        letter-spacing: 3px;

    }
</style>
