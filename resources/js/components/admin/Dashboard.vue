<template>
<div>
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Enquiry</span>
                <span class="info-box-number">
                  {{ items.enquiry }}
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-tags"></i></span>

              <div class="info-box-content">
                <router-link to="/admin/category">
                  <span class="info-box-text">Categories</span>
                </router-link>
                <span class="info-box-number">{{ items.category }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                 <router-link to="/admin/products">
                <span class="info-box-text">Products</span>
                 </router-link>
                <span class="info-box-number">{{ items.products }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
      </div>
	  </div>
    </section>
    <!-- /.content -->
</div>  
</template>
<script>
export default {
  data() {
    return {
      items: {
        products: 0,
        category: 0,
        enquiry: 0
      }
    }
  },
  methods: {
    loadStatistics(){
      axios.get('/api/dashboard').then(({ data }) => { this.items = data})
    }
  },
  created() {
    this.loadStatistics();
  },
}
</script>
  