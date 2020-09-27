<template>
    <div>
       <div class="container-fluid">
           <div class="row">
               <div class="col-12">
                   <top-nav></top-nav>
               </div>
           </div>
       </div>
       <div class="container my-2">
           <div v-if="acte !== null" class="row">
               <div v-for="act in acte" :key="act.id" class="col-12 my-2">
                   <div>ID: {{ act.id }}</div>
                   <div>Denumire: {{ act.titulatura }}</div>
                   <div>Data legiferare: {{ act.data_legiferare }}</div>
               </div>
           </div>
       </div>
    </div>
</template>


<script>
import TopNav from '../Menus/TopMenu.vue';
export default {
    data(){
        return{
            acte: []
        }
    },
    created(){
        let id = this.$route.params.id;
        axios.get(`/api/emitenti/${id}/acte`).then((response)=>{
            this.acte = response.data.data;
        });
    },
    components:{
        TopNav
    }
}
</script>