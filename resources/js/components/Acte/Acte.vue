<template>
    <div id="navbar-top" class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <top-nav></top-nav>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div v-for="act in acte" :key="act.id" class="col-12 my-3">
                       <div>ID Act normativ:  {{ act.id }}</div>
                       <div>Data legiferare:  {{ act.data_legiferare }}</div>
                       <div>Emitent: {{ act.emitent}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import TopNav from '../Menus/TopMenu.vue'
    export default {
        data() {
            return {
                acte: []
            };
        },
        created(){
            axios.get('/api/acte').then((response)=> this.acte = response.data.data);
        },
        components: {
            TopNav
        }
    }
</script>
