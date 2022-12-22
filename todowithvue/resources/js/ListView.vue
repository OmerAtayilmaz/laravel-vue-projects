<template>
    <div >
       <div  v-for="(item,index)  in items"  :key="index" >
           <span  class="items"  v-if="item.status!='deleted'">
                <list-item :item="item" class="item" v-on:itemchanged="$emit('reloadlist')"/>
           </span>
       </div>
    </div>
</template>
<script>
import ListItem from "@/ListItem.vue";
export default {
    props:['items'],
    components:{
        ListItem,
    }
}
</script>
<style>
    .items{
        display: flex;
        align-items: center;
        justify-content: center;
        margin:5px;
    }
    .item {
        background: #666AF6;
        color:white;
        padding:12px;
        margin:5px 0;
        border-radius: 12px;
        width:800px;
        text-indent: 5px;

    }
</style>
