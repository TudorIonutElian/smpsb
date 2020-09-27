<template>
    <div>
        <top-nav></top-nav>
        <div class="container mt-3">
            <div class="row">
                <div v-if="afisareMesajAdaugareEmitent" class="col-12 bg-success font-weight-bold text-white py-3 my-3">
                    Emitentul a fost adaugat cu succes!
                </div>
                <div v-if="!afisareMesajAdaugareEmitent"class="col-12 bg-primary text-white py-3">
                    Adaugare Emitent nou de acte normative
                </div>
                <div class="col-12 my-2">
                    <form>
                        <div class="form-group row">
                            <label for="denumireEmitent" class="col-sm-2 col-form-label">Denumire Emitent</label>
                            <div class="col-sm-10">
                                <input v-model="denumireEmitent" type="text" class="form-control" id="denumireEmitent" placeholder="Introduceti denumirea emitentului">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dataIncepereActivitate" class="col-sm-2 col-form-label">Incepere activitate</label>
                            <div class="col-sm-10">
                            <input v-model="dataIncepereActivitate" type="date" class="form-control" id="dataIncepereActivitate" placeholder="Introuduceti data de incepere a activitatii">
                            </div>
                        </div>
                        <button @click="adaugareEmitent" class="btn btn-lg btn-outline-primary">Adaugare Emitent</button>
                    </form>
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
            denumireEmitent: null,
            dataIncepereActivitate: null,
            afisareMesajAdaugareEmitent: false
          };
        },
        methods:{
            adaugareEmitent(event){
                event.preventDefault();
                axios.post('api/emitenti-adaugare', {
                    denumire: this.denumireEmitent,
                    dataIncepereActivitate: this.dataIncepereActivitate
                    })
                    .then((response) =>{
                        if(response.data.mesaj){
                            setTimeout(()=>{
                                this.afisareMesajAdaugareEmitent = true;
                            }, 1000);
                        }
                    }).catch(function (error) {
                        console.log(error);
                    });
            }
        },
        components: {
          TopNav
        }
    }
</script>
