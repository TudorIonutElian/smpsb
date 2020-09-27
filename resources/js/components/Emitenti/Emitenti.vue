<template>
      <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="container-fluid" id="navbar-top">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <top-nav></top-nav>
                    </div>
                </div>
              </div>
            </div>
          </div>
        <div class="row">
          <div class="col-12">
            <div class="container">
              <div v-if="emitenti.length === 0" class="row">
                  <div class="col-12 mt-2 p-3 bg-warning rounded">
                      In prezent nu exista niciun Emitent in baza de date! Va rugam sa <a href="/emitenti-adaugare">adaugati</a> Emitenti pentru a putea inrola institutii!
                  </div>
              </div>
                <div v-else class="row">
                    <div class="col-12 mt-2 py-2 bg-secondary text-white rounded">
                        Pagina Emitentilor de acte normative
                    </div>
                    <div class="row my-2">
                        <emitent
                            :denumire="emitent.denumire"
                            :id="emitent.id"
                            :key="emitent.id"
                            :stare="emitent.stare"
                            :acte="emitent.numar_acte"
                            :data_incepere_activitate="emitent.data_incepere_activitate"
                            :data_sfarsit_activitate="emitent.data_sfarsit_activitate"
                            v-for="emitent in emitenti">
                        </emitent>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
</template>

<script>
  import TopNav from '../Menus/TopMenu.vue'
  import Emitent from './Emitent.vue'

  import axios from 'axios';

    export default {
        data() {
          return {
            emitenti: []
          };
        },
        created(){
          axios.get('/api/emitenti').then(data =>{
            this.emitenti = data.data.data
          })
        },
        components: {
          TopNav,
          Emitent
        }
    }
</script>
