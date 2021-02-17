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
                    <button class="btn btn-success" @click="newModal()">Add New</button>
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
                                            <img v-if="category.img" alt="Avatar" style="width:50px" class="img-fluid img-thumbnail" :src="'img/category/'+category.img">
                                            <img v-else alt="Avatar" style="width:50px" class="img-fluid img-thumbnail" src="assets/img/empty.jpg">
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
                                    <p>{{ category.description }}</p>
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
                                    <a @click="editModal(category)" class="btn border btn-default  btn-sm" href="#">
                                        <i class="fas fa-pencil-alt text-primary">
                                        </i>
                                    </a>
                                    <a @click="deleteCategory(category.id)" class="btn border btn-default  btn-sm" href="#">
                                        <i class="fas fa-trash text-danger">
                                        </i>
                                    </a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <!-- Modal -->
                <div class="modal" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" v-show="!editMode" id="exampleModalLabel">Add New</h5>
                            <h5 class="modal-title" v-show="editMode" id="exampleModalLabel">Edit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <v-form @submit.prevent="editMode ? updateCategory() : createCategory()">

                        <div class="modal-body">
                        
                                <div class="form-group">
                                    <label for="name">Email</label>
                                    <input v-model="form.name" type="text" class="form-control" id="name" placeholder="Name" :class="{ 'is-invalid': form.errors.has('name') }">
                                </div>
                                <has-error :form="form" field="name"></has-error>

                                <div class="form-group">
                                    <label for="inputState">Store</label>
                                    <select name="store" v-model="form.store_id" class="form-control" >
                                        <option v-for="item in items" v-bind:key="item.id" v-bind:value="item.id" :selected="item.id == form.store_id"> {{ item.name }} </option>
                                    </select>
                                <!-- <has-error :form="form" field="store"></has-error> -->

                                </div>
                                
                                <div v-if="!form.img">
                                    <h6>Select an image</h6>
                                    <input type="file" @change="onFileChange">
                                </div>
                            
                                <div v-else>
                                    <img v-show="!imagePreview" :src="form.img" />
                                    <img v-show="imagePreview" :src="'img/category/'+form.img" />
                                    <button @click.prevent="removeImage"><i class="fas fa-trash text-danger"></i>
                                    Remove image</button>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea v-model="form.description" class="form-control" id="description" rows="3" :class="{ 'is-invalid': form.errors.has('description') }"></textarea>
                                </div>
                                <has-error :form="form" field="description"></has-error>
                        
                            
                                <div class="custom-control custom-switch">
                                    <input type="checkbox"  v-model="form.status" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" v-show="form.status" for="customSwitch1">Active</label>
                                    <label class="custom-control-label" v-show="!form.status" for="customSwitch1">Inactive</label>
                                </div>

                            

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" v-show="!editMode" class="btn btn-primary">Create</button>
                            <button type="submit" v-show="editMode" class="btn btn-primary">Update</button>
                        </div>
                        </v-form>
                            
                        </div>

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
            Status: '',
            editMode: false,
            imagePreview: false,
            categories: {},
            items: [],
            form: new Form({
                id: '',
                name: '',
                description: '',
                status: true,
                img:'',
                store_id:''
            })
        }
    },
    methods: {
        loadShop(){
            axios.get('/api/store').then(({ data }) => { this.items = data})
        },
        loadCategory(){
            axios.get('/api/category').then(({ data }) => { this.categories = data})
        },
        onFileChange(e) {
            var files = e.target.files || e.dataTransfer.files;
            if (!files.length)
                return;
            this.createImage(files[0]);
        },
        createImage(file) {
            var image = new Image();
            var reader = new FileReader();
            var vm = this;

            reader.onload = (e) => {
                vm.form.img = e.target.result;
            };
            reader.readAsDataURL(file);
        },
        removeImage: function (e) {
            if(this.editMode)
                this.imagePreview = false;
            this.form.img = '';
        },
        editModal(category){
            this.editMode = true;
            this.imagePreview = true;
            this.form.clear();
            this.form.reset();
            $('#addModal').modal('show');
            this.form.fill(category);
        },
        newModal(){
            this.editMode = false;
            this.form.clear();
            this.form.reset();
            $('#addModal').modal('show');
        },
        createCategory(){
            this.$Progress.start()
            this.form.post('/api/category/store')
                .then(() => {
                    Fire.$emit('updateList');
                    $('#addModal').modal('hide');
                    toast.fire({
                        icon: 'success',
                        title: 'Successfully created'
                    })
                    this.$Progress.finish()
                })
                .catch(() => {
                    this.$Progress.fail()
                    this.$Progress.finish()
                })
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
                    this.form.delete('/api/category/'+id)
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
        updateCategory(id){
            this.$Progress.start()
            this.form.put('/api/category/edit/'+this.form.id)
                .then(() => {
                    Fire.$emit('updateList');
                    $('#addModal').modal('hide');
                    toast.fire({
                        icon: 'success',
                        title: 'Successfully Updated'
                    })
                    this.$Progress.finish()
                    this.imagePreview = false;
                })
                .catch(() => {
                    this.$Progress.fail()
                    this.$Progress.finish()
                })
        }
    },
    created() {
        this.loadShop();
        this.loadCategory();
        Fire.$on('updateList',() => {
            this.loadCategory();
        });
    }
}
</script>
<style scoped>
img {
  width: 30%;
  margin: auto;
  display: block;
  margin-bottom: 10px;
}
</style>