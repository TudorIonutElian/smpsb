<template>
    <div class="col-4 mt-2">
        <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ denumire }}</h5>
          <div class="card-text text-justify emitent-status">
            <div v-if="stare" class="text-success">
              Emitent Activ
            </div>
            <div v-else class="text-warning">
              Emitent Inactiv (01.01.2020)
            </div>
          </div>
          <a v-bind:href="'/emitenti/' + id" class="btn btn-primary">Vezi profil Emitent</a>
        </div>
      </div>
    </div>
</template>

<script>
  import TopNav from '../Menus/TopMenu.vue'
    export default {
        data() {
          return {
            message: 'Soe Message'
          };
        },
        props: {
          denumire: String,
          stare: String,
          id: Number
        },
        components: {
          TopNav
        }
    }
</script>
