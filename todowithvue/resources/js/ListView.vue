<template>
    <div>
       <div class="items" v-for="(item,index)  in items"  :key="index">
           <list-item :item="item" v-if="item.status!='deleted'" class="item" v-on:itemchanged="$emit('reloadlist')"/>
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
