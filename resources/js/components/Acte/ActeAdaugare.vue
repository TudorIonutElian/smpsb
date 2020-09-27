<template>
  <div>
    <div class="container-fluid mb-3">
      <top-nav></top-nav>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <form>
            <div class="form-row">
              <div class="form-group col-12">
                <label for="titulatura">Titulatura</label>
                <input type="email" class="form-control" id="titulatura" />
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="tipAct">Tipul actului</label>
                <select id="tipAct" class="form-control">
                  <option selected>Alegeti tipul actului...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="emitent">Emitentul actului</label>
                <select id="emitent" class="form-control">
                  <option selected>Alegeti emitentul actului...</option>
                  <option>...</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="numar">Numarul actului</label>
                <input type="number" class="form-control">
              </div>
              <div class="form-group col-md-6">
                <label for="data_legiferare">Data legiferarii</label>
                <input type="date" class="form-control">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Adauga act legislativ</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import TopNav from "../Menus/TopMenu.vue";
export default {
  data() {
    return {};
  },
  components: {
    TopNav,
  },
};
</script>