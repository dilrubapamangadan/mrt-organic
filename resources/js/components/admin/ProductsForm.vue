<template>
  <div>
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{editMode ? 'Edit':'Add'}} Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><router-link to="/dashboard">Home</router-link></li>
              <li class="breadcrumb-item active"><router-link to="/admin/products">Products</router-link></li>
              <li class="breadcrumb-item active">{{editMode ? 'Edit':'Add'}}</li>
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

                    <div class="card-tools">
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <v-form @submit.prevent="editMode ? updateProduct() : createProduct()">

                        <div class="modal-body">
                        
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input v-model="form.name" type="text" class="form-control" id="name" placeholder="Name" :class="{ 'is-invalid': form.errors.has('name') }">
                                </div>
                                <has-error :form="form" field="name"></has-error>

                                <div class="form-group">
                                    <label for="inputState">Store</label>
                                    <select @change="loadCategory(form.store_id)" name="store" v-model="form.store_id" class="form-control" >
                                        <option v-for="item in items" v-bind:key="item.id" v-bind:value="item.id" :selected="item.id == form.store_id"> {{ item.name }} </option>
                                    </select>
                                <!-- <has-error :form="form" field="store"></has-error> -->

                                </div>

                                <div class="form-group">
                                    <label for="inputState">Category</label>
                                    <select  name="category" v-model="form.category_id" class="form-control" >
                                        <option v-for="category in categories" v-bind:key="category.id" v-bind:value="category.id" :selected="category.id == form.category_id"> {{ category.name }} </option>
                                    </select>
                                <!-- <has-error :form="form" field="store"></has-error> -->
                                </div>
                                <div v-if="!form.img">
                                    <h6>Select an image</h6>
                                    <input type="file" @change="onFileChange">
                                </div>
                            
                                <div v-else>
                                    <img v-show="!imagePreview" :src="form.img" />
                                    <img v-show="imagePreview" :src="'/img/product/'+form.img" />
                                    <button @click.prevent="removeImage"><i class="fas fa-trash text-danger"></i>
                                    Remove image</button>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <!-- <textarea v-model="form.description" class="form-control" id="description" rows="3" :class="{ 'is-invalid': form.errors.has('description') }"></textarea> -->
                                    <vue-editor v-model="form.description" ></vue-editor>

                                </div>
                                <has-error :form="form" field="description"></has-error>
                        
                            
                                <div class="custom-control custom-switch">
                                    <input type="checkbox"  v-model="form.status" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" v-show="form.status" for="customSwitch1">Active</label>
                                    <label class="custom-control-label" v-show="!form.status" for="customSwitch1">Inactive</label>
                                </div>

                            

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" @click="cancelForm()" data-dismiss="modal">Cancel</button>
                            <button type="submit" v-show="!editMode" class="btn btn-primary">Create</button>
                            <button type="submit" v-show="editMode" class="btn btn-primary">Update</button>
                        </div>
                    </v-form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>  
</template>

<script>
import { VueEditor } from "vue2-editor";

export default {
    components: { 
          VueEditor
    },
    data() {
        return {
            editMode: false,
            imagePreview: false,
            categories: [],
            items: [],
            products: {},
            form: new Form({
                id: '',
                name: '',
                description: '',
                status: true,
                img:'',
                store_id: '',
                category_id: ''
            })
        }
    },
    methods: {
        loadShop(){
            axios.get('/api/store').then(({ data }) => { this.items = data})
        },
        loadCategory(id){
             this.$Progress.start()
            axios.get('/api/store/category/'+id).then(({ data }) => { this.categories = data; this.$Progress.finish(); })
        },
        getProduct(id){
            axios.get('/api/product/'+id).then(({ data }) => { this.form.fill(data[0]);this.loadCategory(data[0].store_id); })
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
        createProduct(){
            this.$Progress.start()
            this.form.post('/api/product/store')
                .then(() => {
                    toast.fire({
                        icon: 'success',
                        title: 'Successfully created'
                    })
                    this.$Progress.finish()
                    Fire.$emit('updateList');
                })
                .catch(() => {
                    this.$Progress.fail()
                    this.$Progress.finish()
                })
        },
        updateProduct(id){
            this.$Progress.start()
            this.form.put('/api/product/'+this.form.id)
                .then(() => {
                    Fire.$emit('updateList')
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
        },
        cancelForm(){
            Fire.$emit('updateList');
        }
    },
    created() {
        this.loadShop();
        this.id = this.$route.params.id
        if(this.id){
            this.imagePreview = true;
            this.editMode = true;
            this.getProduct(this.id);
        }
        Fire.$on('updateList',() => {
            this.$router.push({name:"Products"})
        });
    }
}
</script>

<style>

</style>