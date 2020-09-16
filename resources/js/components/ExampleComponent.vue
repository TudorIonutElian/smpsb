<template>
      <div id="navbar-top" class="container-fluid">
          <div class="row justify-content-center">
              <div class="col-12">
                  <top-nav></top-nav>
              </div>
          </div>
      </div>
</template>

<script>
  import TopNav from './Menus/TopMenu.vue'
    export default {
        data() {
          return {
            message: 'Some Message'
          };
        },
        components: {
          TopNav
        }
    }
</script>
