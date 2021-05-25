<template>
<div>
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><router-link to="/dashboard">Home</router-link></li>
              <li class="breadcrumb-item active">Category</li>
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
                    <h3 class="card-title">Category Table</h3>

                    <div class="card-tools">
                        <router-link :to="`/admin/category/add`" >
                                   <button class="btn btn-success">Add New</button>
                        </router-link>
                    
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table projects">
                        <thead>
                            <tr>
                                <th style="width: 10%">
                                    Category Image
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
                                <th style="width: 8%" class="text-center">
                                    Status
                                </th>
                                <th style="width: 10%">
                                    
                                </th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr v-for="category in categories" :key="category.id">
                                <td class="align-middle">
                                    <ul class="list-inline">
                                        <li class="list-inline-item" >
                                            <img v-if="category.img" alt="Avatar" style="width:80px" class="img-fluid img-thumbnail" :src="'/img/category/'+category.img">
                                            <img v-else alt="Avatar" style="width:80px" class="img-fluid img-thumbnail" src="assets/img/empty.jpg">
                                        </li>
                                        
                                    </ul>
                                </td>
                                <td class="align-middle">
                                    <h6>{{ category.name | upText }}</h6>
                                </td>
                                
                                <td class="align-middle">
                                    <h6>{{ category.store }}</h6>
                                </td>

                                <td class="align-middle" >
                                    <p v-html="category.description"></p>
                                </td>
                                
                                <td class="project-state align-middle">
                                    <span v-if="category.status" class="badge badge-success">Active</span>
                                    <span v-else class="badge badge-danger">Inactive</span>
                                </td>
                                <td class="project-actions text-right align-middle">
                                    <a class="btn border btn-default btn-sm" href="#">
                                        <i class="fas fa-eye text-success">
                                        </i>
                                    </a>
                                    <router-link :to="`/admin/category/${category.id}`" >
                                    <a class="btn border btn-default  btn-sm" href="#">
                                        <i class="fas fa-pencil-alt text-primary">
                                        </i>
                                    </a>
                                    </router-link>
                                    <a @click="deleteCategory(category.id)" class="btn border btn-default  btn-sm" href="#">
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
</div>  
</template>
<script>
export default {
    data() {
        return {
            Status: '',
            categories: {},
        }
    },
    methods: {
        loadCategory(){
            this.$Progress.start()
            axios.get('/api/category').then(({ data }) => { this.categories = data; this.$Progress.finish();})
        },
        deleteCategory(id){
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
                    axios.delete('/api/category/'+id)
                        .then(({data}) => {
                            Fire.$emit('updateList');
                            if(data.status){
                                toast.fire({
                                    icon: 'success',
                                    title: data.message
                                })
                            }else{
                                swal.fire(
                                    'Failed!',
                                    data.message,
                                    'warning'
                                )
                            }
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
        }
    },
    created() {
        this.loadCategory();
        Fire.$on('updateList',() => {
            this.loadCategory();
        });
    }
}
</script>
<style scoped>

</style>