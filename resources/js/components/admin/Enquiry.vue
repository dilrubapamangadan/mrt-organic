<template>
<div>
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Enquiry</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><router-link to="/admin/dashboard">Home</router-link></li>
              <li class="breadcrumb-item active">Enquiry</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Enquiry List</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table projects">
                        <thead>
                            <tr>
                                <th style="width: 10%">
                                    Product 
                                </th>
                                <th style="width: 15%">
                                    Email
                                </th>
                                <th style="width: 15%">
                                    Phone
                                </th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr v-for="enquiry in enquires" :key="enquiry.id">
                               
                                <td class="align-middle">
                                    <h6>{{ enquiry.product }}</h6>
                                </td>
                                
                                <td class="align-middle" >
                                    <p>{{ enquiry.email }}</p>
                                </td>

                                <td class="align-middle" >
                                    <p>{{ enquiry.phone }}</p>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
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
            enquires: {},
        }
    },
    methods: {
        loadProduct(){
             this.$Progress.start()
            axios.get('/api/enquire').then(({ data }) => { this.enquires = data; this.$Progress.finish(); })
        },
    
    },
    created() {
        this.loadProduct();
    }
}
</script>
<style scoped>
img {
  width: 80%;
  margin: auto;
  display: block;
  margin-bottom: 10px;
}
</style>