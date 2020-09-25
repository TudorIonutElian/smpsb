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
                    <div class="col-12 my-2">
                        <select name="tipDeAct" id="">
                            <option v-for="tipAct in tipurActe" value="tipAct.id">{{ tipAct.titulatura}}</option>
                        </select>
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
                tipurActe: []
            };
        },
        created(){
            axios.get('/api/tipuri-acte')
            .then((response) => {
                this.tipurActe = response.data.data;
            })
        },
        components: {
            TopNav
        }
    }
</script>
