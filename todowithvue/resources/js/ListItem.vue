<template>
    <div class="container">
        <div class="text">
            <div v-if="item.status==='edit'">
                <span :class="[item.status=='completed'?'completed':'','itemText']"><input v-model="item.name"/> </span>
            </div>
            <div v-else>
                <span :class="[item.status=='completed'?'completed':'','itemText']">{{item.name}}</span>
            </div>
        </div>
        <div>
            <button  @click="updateCheck()" class="edit">
                <i class="fas fa-check-square"></i>
            </button>
            <button @click="removeItem()" class="trashcan">
                <i class="fas fa-trash"></i>
            </button>
            <button v-if="item.status!=='edit'" @click="editItem()" class="trashcan">
                <i class="fas fa-edit"></i>
            </button>
            <button v-else @click="saveItem()" class="trashcan">
                <i class="fas fa-save"></i>
            </button>
        </div>
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
        ,
        editItem(){
            if(this.item.status!=='edit')
                this.item.status='edit';
            else
                this.item.status=''
        },saveItem(){
            console.log(this.item.id);
            console.log(this.item);
            console.log(`api/item/edit/${this.item.id}`)
            axios.put("api/item/edit/"+this.item.id,{name:this.item.name})
                .then(res=>{
                    console.log(res);
                })
                .catch(err=>{
                    console.log(err);
                })
            this.item.status='task';
        }
    }
}
</script>
<style scoped>
.container{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: row;
}
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
.container input{
    width: 600px;
    height: 30px;
    border-radius: 12px;
    text-indent: 12px;
    font-size: 18px;
    outline: none;
    border:none;
}
</style>
