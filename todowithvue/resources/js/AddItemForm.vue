<template>
    <div class="form">
        <input type="text" v-model="item.name" />
        <button type="button" @click="addItem()" ><i class="fas fa-plus fa-2x"></i></button>
    </div>
</template>
<script>
export default {
    data:function (){
        return {
            item:{
                name:""
            }
        }
    },
    methods:{
        addItem(){
            if(this.item.name==''){
                return;
            }
            axios.post('api/item/store',{
                item:this.item
            })
            .then(res=>{
                if(res.status==201){
                    this.item.name=""
                    this.$emit('itemchanged');
                }
            }).catch(err=>console.log(err));
        }
    }

}
</script>
<style scoped>
.form{
    background: #878AF5;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 5px;
    border-radius: 8px;
}
input{
    border: none;
    width:700px;
    height: 40px;
    border-radius: 20px;
    text-indent: 12px;
    font-weight: 700;
    font-size: 18px;
}
input:focus{
    outline: none;
    border: none;
}
button{
    border:none;
    height: 40px;
    width:200px;
    border-radius: 20px;
    margin-left: 5px;
    background: #F5A921;
    color:#fff;
    cursor: pointer;
}
 .fa-plus{
    font-size:24px;

}

 .active{
     color:#00CE25;
 }
 .inactive{
     color:gray;
 }
</style>
