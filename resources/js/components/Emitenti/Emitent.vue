<template>
  <div class="col-4 mt-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center p-2 text-white bg-secondary">
          {{ denumire }}
        </h5>
        <div class="card-text text-justify emitent-status">
          <div v-if="stare" class="bg-success text-white text-center">
            Emitent Activ
          </div>
          <div v-else class="bg-danger text-white text-center">
            Emitent inactiv
          </div>
          <div>
            Numar de acte emise :
            <a v-if="acte > 0" :href="'/emitenti/' + + id + '/acte'"> {{ acte }}</a>
            <span v-else> 0 </span>
          </div>
          <div>Data inceput activitate : {{ data_incepere_activitate }}</div>
          <div>
            Data sfarsit activitate :
            {{
              data_sfarsit_activitate
                ? data_sfarsit_activitate
                : "Emitent Activ"
            }}
          </div>
        </div>
        <a
          v-bind:href="'/emitenti/' + id"
          class="btn btn-outline-primary btn-block"
          >Vezi profil Emitent</a
        >
      </div>
    </div>
  </div>
</template>

<script>
import TopNav from "../Menus/TopMenu.vue";
export default {
  data() {
    return {
      message: "Soe Message",
    };
  },
  props: {
    denumire: String,
    stare: Number,
    id: Number,
    acte: Number,
    data_incepere_activitate: String,
    data_sfarsit_activitate: String,
  },
  components: {
    TopNav,
  },
};
</script>
