<template>
  <div>
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{editMode ? 'Edit':'Add'}} Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><router-link to="/dashboard">Home</router-link></li>
              <li class="breadcrumb-item active"><router-link to="/admin/category">Category</router-link></li>
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
                   <v-form @submit.prevent="editMode ? updateCategory() : createCategory()">

                        <div class="modal-body">
                        
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input v-model="form.name" type="text" class="form-control" id="name" placeholder="Name" :class="{ 'is-invalid': form.errors.has('name') }">
                                </div>
                                <has-error :form="form" field="name"></has-error>

                                <div class="form-group">
                                    <label for="name">Sub Header</label>
                                    <input v-model="form.sub_header" type="text" class="form-control" id="sub_header" placeholder="Sub Header" :class="{ 'is-invalid': form.errors.has('sub_header') }">
                                </div>
                        

                                <div class="form-group">
                                    <label for="inputState">Store</label>
                                   

                                     <select  name="store" v-model="form.store_id" class="form-control" :class="{ 'is-invalid': form.errors.has('store_id') }">
                                     <option disabled value="">Select a store</option>
                                        <option v-for="shop in shops" v-bind:key="shop.id" v-bind:value="shop.id" :selected="shop.id == form.store_id"> {{ shop.name }} </option>
                                    </select>
                                <!-- <has-error :form="form" field="store"></has-error> -->

                                </div>
                                
                                <div class="form-group">
                                    <label for="inputState">Category Image</label>
                                    <div v-if="!form.img">
                                        <h6>Select an image</h6>
                                        <input type="file" ref="file" @change="onCategoryChange">
                                         <p v-if="imgStatus" class="text-danger">Upload a image with dimension 100px*100px</p>
                                    <p v-else class="text-hint">Upload a image with dimension 100px*100px</p>
                                    </div>
                                    <div v-else>
                                        <img v-show="!imagePreview" :src="form.img" />
                                        <img v-show="imagePreview" :src="'/img/category/'+form.img" />
                                        <button @click.prevent="removeImage"><i class="fas fa-trash text-danger"></i>
                                        Remove image</button>
                                    </div>
                                   
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Banner Image</label>
                                    <div v-if="!form.banner">
                                        <h6>Select an image</h6>
                                        <input type="file" ref="banner" @change="onBannerChange">
                                        <p v-if="bannerStatus" class="text-danger">Upload a image with dimension 100px*100px</p>
                                    <p v-else class="text-hint">Upload a image with dimension 100px*100px</p>
                                    </div>
                                    <div v-else>
                                        <img v-show="!bannerPreview" :src="form.banner" />
                                        <img v-show="bannerPreview" :src="'/img/category/'+form.banner" />
                                        <button @click.prevent="removeBanner"><i class="fas fa-trash text-danger"></i>
                                        Remove image</button>
                                    </div>
                                    
                                </div>

                                <div class="form-group">
                                    <label for="short description">Short Description</label>
                                    <vue-editor v-model="form.short_description" ></vue-editor>

                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <vue-editor v-model="form.description" ></vue-editor>

                                </div>
                                <!-- <has-error :form="form" field="description"></has-error> -->
                            
                                <!-- <div class="custom-control custom-switch">
                                    <input type="checkbox"  v-model="form.status" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" v-show="form.status" for="customSwitch1">Active</label>
                                    <label class="custom-control-label" v-show="!form.status" for="customSwitch1">Inactive</label>
                                </div> -->

                            

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
            id:'',
            shops:[],
            text:'',
            editMode: false,
            imagePreview: false,
            bannerPreview: false,
            form: new Form({
                id: '',
                name: '',
                description: '',
                status: true,
                img:'',
                banner:'',
                sub_header:'',
                short_description:'',
                store_id: ''
            }),
            imgStatus: false,
            bannerStatus: false
        }
    },
    methods: {
        loadShop(){
            axios.get('/api/store').then(({ data }) => { this.shops = data; })
        },
        getCategory(id){
            axios.get('/api/category/'+id).then(({ data }) => { this.form.fill(data); })
        },
        onCategoryChange(e) {
            var refStr = "file";
            if (this.$refs[refStr].files[0] == undefined)
                return;
            console.log(this.$refs[refStr].files[0]);
            this.createImage(this.$refs[refStr].files[0],refStr,617,521);
        },
        onBannerChange(e) {
            var refStr = "banner";
            if (this.$refs[refStr].files[0] == undefined)
                return;
            console.log(this.$refs[refStr].files[0]);
            this.createImage(this.$refs[refStr].files[0],refStr,663,646);
        },
        createImage(file,refStr,w,h) {
            var img = new Image();
            var imgwidth = 0;
  		    var imgheight = 0;
            var vm = this;
			var _URL = window.URL || window.webkitURL;
            img.src = _URL.createObjectURL(file);
            img.onload = function(e) {
                imgwidth = this.width;
                imgheight = this.height;
                if(imgwidth < w || imgheight < h){
                    
                    if( refStr == "file")
                        vm.imgStatus = true;
                    else
                        vm.bannerStatus = true;

                    setTimeout(function(){
                       if( refStr == "file")
                            vm.imgStatus = false;
                        else
                            vm.bannerStatus = false;
                       vm.$refs[refStr].value = "";
                    }, 3000);
                }else{
                        var reader = new FileReader();
                        reader.onload = (e) => {
                            if( refStr == "file")
                            vm.form.img = e.target.result;
                            else
                            vm.form.banner = e.target.result;
                        };
                        reader.readAsDataURL(file);
                }
            }
        },
        removeImage: function (e) {
            if(this.editMode){
                this.imagePreview = false;
            }
            this.form.img = '';
        },
        removeBanner: function (e) {
            if(this.editMode){
                this.bannerPreview = false;
            }
            this.form.banner = '';
        },
        createCategory(){
            this.$Progress.start()
            this.form.post('/api/category/store')
                .then(() => {
                    Fire.$emit('updateList');
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
        updateCategory(){
            this.$Progress.start()
            this.form.put('/api/category/'+this.form.id)
                .then(() => {
                    Fire.$emit('updateList');
                    toast.fire({
                        icon: 'success',
                        title: 'Successfully Updated'
                    })

                    this.$Progress.finish()
                    this.imagePreview = false;
                    this.bannerPreview = false;
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
        console.log(this.id);
        if(this.id){
            this.getCategory(this.id);
            this.imagePreview = true;
            this.bannerPreview = true;
            this.editMode = true;
        }
        Fire.$on('updateList',() => {
            this.$router.push({name:"Category"})
        });
    }
}
</script>

<style>

</style>