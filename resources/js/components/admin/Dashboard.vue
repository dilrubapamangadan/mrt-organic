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
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ items.enquiry }}<sup style="font-size: 20px"></sup></h3>

                <p>Enquiries</p>
              </div>
              <div class="icon">
                <i class="fas fa-envelope-open"></i>
              </div>
              <router-link to="/admin/enquiry" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></router-link>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ items.category }}<sup style="font-size: 20px"></sup></h3>

                <p>Categories</p>
              </div>
              <div class="icon">
                <i class="fas fa-tags"></i>
              </div>
              <router-link to="/admin/category" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></router-link>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ items.products }}<sup style="font-size: 20px"></sup></h3>

                <p>Products</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <router-link to="/admin/products" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></router-link>
            </div>
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
  