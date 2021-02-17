<template>
    <div class="card">
        <div class="card-header">
                <h3 class="card-title">Category Table</h3>

                <div class="card-tools">
                  <button class="btn btn-success" data-toggle="modal" data-target="#addModal">Add New</button>
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
                  <tr v-for="category in categories" :key="category.ct_slno">
                       <td class="align-middle">
                          <ul class="list-inline">
                              <li class="list-inline-item" >
                                  <img v-if="category.ct_img" alt="Avatar" style="width:50px" class="img-fluid img-thumbnail" src="assets/img/avatar.png">
                                  <img v-else alt="Avatar" style="width:50px" class="img-fluid img-thumbnail" src="">
                              </li>
                             
                          </ul>
                      </td>
                      <td class="align-middle">
                          <h6>{{ category.ct_name }}</h6>
                      </td>
                     
                      <td class="align-middle">
                          <p>{{ category.ct_description }}</p>
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
                          <a class="btn border btn-default  btn-sm" href="#">
                              <i class="fas fa-pencil-alt text-primary">
                              </i>
                          </a>
                          <a class="btn border btn-default  btn-sm" href="#">
                              <i class="fas fa-trash text-danger">
                              </i>
                          </a>
                      </td>
                  </tr>
                  
              </tbody>
        </table>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add New</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <v-form @submit.prevent="createCategory">

                <div class="modal-body">
                
                        <v-text-field
                        v-model="form.name"
                        label="Name" 
                        :class="{ 'is-invalid': form.errors.has('name') }"
                        ></v-text-field>
                        <has-error :form="form" field="name"></has-error>
                        <v-textarea
                        v-model="form.description"
                        label="Description" 
                        required
                        ></v-textarea>
                        <has-error :form="form" field="description"></has-error>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
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
            categories: {},
            form: new Form({
                name: '',
                description: ''
            })
        }
    },
    methods: {
        loadCategory(){
            axios.get('/api/category').then(({ data }) => { this.categories = data})
        },
        createCategory(){
            this.form.post('/api/category/store');
        }
    },
    created() {
        this.loadCategory();
    },
}
</script>