<template>
    <div class="card">
        <div class="card-header">
                <h3 class="card-title">Category Table</h3>

                <div class="card-tools">
                  <button class="btn btn-success" @click="newModal()">Add New</button>
                </div>
        </div>
        <div class="card-body">
        <table class="table projects">
              <thead>
                  <tr>
                      <th style="width: 10%">
                          Category Image
                      </th>
                      <th style="width: 20%">
                          Category
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
                                  <img v-if="category.img" alt="Avatar" style="width:50px" class="img-fluid img-thumbnail" src="assets/img/avatar.png">
                                  <img v-else alt="Avatar" style="width:50px" class="img-fluid img-thumbnail" src="assets/img/empty.jpg">
                              </li>
                             
                          </ul>
                      </td>
                      <td class="align-middle">
                          <h6>{{ category.name | upText }}</h6>
                      </td>
                     
                      <td class="align-middle">
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
                
                        <v-text-field v-model="form.name" label="Name"  :class="{ 'is-invalid': form.errors.has('name') }" ></v-text-field>
                        <has-error :form="form" field="name"></has-error>

                        <v-textarea v-model="form.description" label="Description"></v-textarea>
                        <has-error :form="form" field="description"></has-error>

                        <!-- <div class="form-check">
                            <input class="form-check-input" v-model="form.status" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Status
                            </label>
                        </div> -->
                        <div class="custom-control custom-switch">
                      <input type="checkbox"  v-model="form.status" class="custom-control-input" id="customSwitch1">
                      <label class="custom-control-label" v-show="form.status" for="customSwitch1">Active</label>
                      <label class="custom-control-label" v-show="!form.status" for="customSwitch1">Inactive</label>
                    </div>

                        <!-- <input type="file" v-model="form.img" label="Image"  ></input> -->
                        <!-- <img v-if="form.img" :src="form.img" alt="" style="max-width: 100%;width: 250px; object-fit: cover" /> -->

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
</template>
<script>
export default {
    data() {
        return {
            Status: '',
            editMode: false,
            categories: {},
            form: new Form({
                id: '',
                name: '',
                description: '',
                status: true,
                img:''
            })
        }
    },
    methods: {
         onFileChange(payload) {
            //const file = payload.target.files[0]; // use it in case of normal HTML input
            const file = payload; // in case vuetify file input
            if (file) {
                this.form.img = URL.createObjectURL(file);
                URL.revokeObjectURL(file); // free memory
            } else {
                this.form.img =  null
            }
        },
        editModal(category){
            this.editMode = true;
            this.form.reset();
            $('#addModal').modal('show');
            this.form.fill(category);
        },
        newModal(){
            this.editMode = false;
            this.form.reset();
            $('#addModal').modal('show');
        },
        loadCategory(){
            axios.get('/api/category').then(({ data }) => { this.categories = data})
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
                            swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                            )
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
                })
                .catch(() => {
                    this.$Progress.fail()
                    this.$Progress.finish()
                })
        }
    },
    created() {
        this.loadCategory();
        Fire.$on('updateList',() => {
            this.loadCategory();
        });
    },
}
</script>