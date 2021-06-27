<template>
<div>
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><router-link to="/dashboard">Home</router-link></li>
              <li class="breadcrumb-item active">Products</li>
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
                    <h3 class="card-title">Products Table</h3>

                    <div class="card-tools">
                        <router-link :to="`/admin/product/add`" >
                            <button class="btn btn-success">Add New</button>
                        </router-link>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table projects">
                        <thead>
                            <tr>
                                <th style="width: 10%">
                                    Product Image
                                </th>
                                <th style="width: 15%">
                                    Product
                                </th>
                                <th style="width: 15%">
                                    Category
                                </th>
                                <th style="width: 15%">
                                    Store
                                </th>
                                <th>
                                    Description
                                </th>
                                <th style="width: 10%">
                                    
                                </th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr v-for="product in products" :key="product.id">
                                <td class="align-middle">
                                    <ul class="list-inline">
                                        <li class="list-inline-item" >
                                            <img v-if="product.img" alt="Avatar" style="width:80px" class="img-fluid img-thumbnail" :src="'/img/product/actual_'+product.img">
                                            <img v-else alt="Avatar" style="width:80px" class="img-fluid img-thumbnail" src="assets/img/empty.jpg">
                                        </li>
                                        
                                    </ul>
                                </td>
                                <td class="align-middle">
                                    <h6>{{ product.name | upText }}</h6>
                                </td>
                                
                                <td class="align-middle" >
                                    <p>{{ product.category }}</p>
                                </td>

                                <td class="align-middle" >
                                    <p>{{ product.store }}</p>
                                </td>

                                <td class="align-middle" v-html="product.description">
                                    <p></p>
                                </td>
                                
                                <td class="project-state align-middle">
                                    <span v-if="product.status" class="badge badge-success">Active</span>
                                    <span v-else class="badge badge-danger">Inactive</span>
                                </td>
                                <td class="project-actions text-right align-middle">
                                    <a @click="showModal(product)" class="btn border btn-default btn-sm" href="#">
                                        <i class="fas fa-eye text-success">
                                        </i>
                                    </a>
                                     <router-link :to="`/admin/product/${product.id}`" >
                                    <a class="btn border btn-default  btn-sm" href="#">
                                        <i class="fas fa-pencil-alt text-primary">
                                        </i>
                                    </a>
                                    </router-link>
                                    <a @click="deleteProduct(product.id)" class="btn border btn-default  btn-sm" href="#">
                                        <i class="fas fa-trash text-danger">
                                        </i>
                                    </a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

     <!-- Modal -->
    <div class="modal" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
            
                    <center>
                        <h1>{{modalData.name}}</h1>
                        <img :src="'/img/product/'+modalData.img" />

                        <p v-html="modalData.description" ></p>
                    </center>

            </div>
            <div class="modal-footer">
            </div>
                
            </div>

        </div>
    </div>
</div>  
</template>
<script>
export default {
    data() {
        return {
            Status: '',
            products: {},
            modalData: new Form({
                name: '',
                description: '',
                img:'',
            })
        }
    },
    methods: {
        loadProduct(){
             this.$Progress.start()
            axios.get('/api/product').then(({ data }) => { this.products = data; this.$Progress.finish(); })
        },
        deleteProduct(id){
            swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if(result.value){
                    axios.delete('/api/product/'+id)
                        .then(() => {
                             toast.fire({
                                icon: 'success',
                                title: 'Deleted!,Record has been deleted.'
                            })
                            Fire.$emit('updateList');
                        })
                        .catch(() => {
                            swal.fire(
                                'Failed!',
                                'There was something wrong.',
                                'warning'
                                )
                        }) 
                }
            });
        },
        showModal(product){
            $('#viewModal').modal('show');
            this.modalData.fill(product);
        }
    },
    created() {
        this.loadProduct();
        Fire.$on('updateList',() => {
            this.loadProduct();
        });
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