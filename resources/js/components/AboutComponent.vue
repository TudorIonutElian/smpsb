<template>
      <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div id="navbar-top" class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <top-nav></top-nav>
                    </div>
                </div>
              </div>
            </div>
          </div>
        <div class="row">
          <div class="col-12 py-4 bg-warning">About Page</div>
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
