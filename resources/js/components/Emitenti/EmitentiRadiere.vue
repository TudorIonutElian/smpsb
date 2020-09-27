<template>
  <div>
    <top-nav></top-nav>
    <div class="container mt-3">
      <div class="row">
        <div class="col-12 my-2">
          <div class="form-group">
            <label for="emitent">Selectati Emitentul</label>
            <select
              id="tipAct"
              class="form-control"
              v-model="emitentSelectat"
            >
              <option selected>Alegeti tipul actului...</option>
              <option
                v-for="emitent in emitenti"
                :key="emitent.id"
                :value="emitent.id"
              >
                {{ emitent.denumire }}
              </option>
            </select>
          </div>
          <div class="form-group">
            <label for="data_radiere">Selectati data pentru radiere</label>
            <input type="date" name="data_raduere" id="data_radiere" v-model="data_radiere">
          </div>
        </div>
        <button @click="radiereEmitent($event)" class="btn btn-danger btn-md">Radiere Emitent</button>
      </div>
    </div>
  </div>
</template>

<script>
import TopNav from "../Menus/TopMenu.vue";
export default {
  data() {
    return {
      emitenti: [],
      emitentSelectat: null,
      data_radiere: null
    };
  },
  created() {
    axios.get("/api/emitenti").then((data) => {
      this.emitenti = data.data.data;
    });
  },
  methods: {
      radiereEmitent(event){
          event.preventDefault();
          axios.post('api/emitenti-radiere', {
                    emitentSelectat: this.emitentSelectat,
                    data_radiere: this.data_radiere
                    })
                    .then((response) =>{
                        console.log(response)
                    }).catch(function (error) {
                        console.log(error);
                    });
      }
  },
  components: {
    TopNav,
  },
};
</script>