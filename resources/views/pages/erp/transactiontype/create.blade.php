@extends('layout.erp.main')
@section('content-wrapper')

<div class="card-header bg-light" style="height: 70px;">
  <div class="w-100 d-flex justify-content-between align-items-end">
    <h4 class="color-primary">Create Transaction</h4>
    <a href="{{route('transections.index')}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-wrench mr-1"></i> Manage Transection</a>
  </div>
</div>

<div id="app">



<form class="forms-sample" @submit.prevent="addData">

                @csrf

                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" v-model="name" class="form-control" id="exampleInputUsername1" placeholder="Username" name="name">
                    </div>

                    
                   
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
</form>
</div>
@section('script')

<script type="module">
  import {
    createApp
  } from 'vue'

  const app = createApp({
    data() {
      return {
        name:''
      }
    },

    methods: {

      addData(){
            axios.post('http://localhost/LaravelProjectsecond/Project/public/api/types',{
                name:this.name})
            .then(response=>{
                console.log(response.data)
            })
        },

        
      

    },

   
  });



  app.mount('#app')
</script>


@endsection
@endsection