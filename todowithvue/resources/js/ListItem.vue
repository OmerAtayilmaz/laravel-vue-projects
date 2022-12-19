<template>
    <div>

        <span :class="[item.status=='completed'?'completed':'','itemText']"> {{item.name}}</span>
        <button  @click="updateCheck()" class="edit">
            <i class="fas fa-check-square"></i>
        </button> <button @click="removeItem()" class="trashcan">
            <i class="fas fa-trash"></i>
        </button>
    </div>
</template>
<script>
export default {
    props:["item"],
    methods:{
        updateCheck(){
            let item=this.item;
            item.status=item.status==='completed'?'task':'completed';

            axios.put('api/item/'+this.item.id,{
                item:item
            }).then(res=> {
                if(res.status == 200){
                    this.$emit('itemchanged');
                }
                console.log(res);
            })
                .catch(err=>console.log(err));
        }
        ,
        removeItem(){
            axios.delete("api/item/"+this.item.id)
                .then(res=>res.status==200&&this.$emit("itemchanged"))
                .catch(err=>console.log(err));
        }
    }
}
</script>
<style scoped>
.trashcan, .edit{
    background: #e6e6e6;
    border:none;
    outline:none;
    color: #FFF;
    background: none;
    font-size:1.2rem;
    cursor: pointer;
}
.edit{
    font-size:1.5rem;
    color: #31e131;
}
.item{
    display: flex;
    justify-content: center;
    align-items: center;
}
.completed{
    text-decoration: line-through;
    color:#999;
}
.itemText{
    width:100%;
    margin-left: 20px;
    font-size: 18px;
    font-weight: 200;
}
</style>
