@extends('layout.erp.main')
@section('content-wrapper')

<div class="col-lg-12 grid-margin stretch-card" id="app">
  <div class="card">
    <div class="card-body">
      <div class="card-header bg-light " style="height: 70px;">
        <div class="w-100 d-flex justify-content-between align-items-end">
          <h4 class="color-primary">Manage Transections</h4>
          <a href="{{route('transections.create')}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-plus-circle mr-1"></i> Create new</a>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>
                ID
              </th>
              <th>
                Name
              </th>
              <th>
                Action
              </th>
            </tr>
          </thead>
          <tbody>

            <tr v-for="transaction in transactions">

              <td>
                @{{transaction.id}}
              </td>
              <td>
                @{{transaction.name}}
              </td>

              <td>
                
                 <form action="#" method="post"> 
                  <button type="submit" name="edit" @click.prevent="editData(transaction.id)" class="btn btn-primary">Edit</button>
                  <a href="" class="btn btn-success">View</a>
                  <button type="submit" name="delete" @click.prevent="deleteData(transaction.id)" class="btn btn-info">Delete</button>
                  </form>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')

<script type="module">
  import {
    createApp
  } from 'vue'

  const app = createApp({
    data() {
      return {
        id:0,
        transactions:[],
        upname:''
      }
    },

    methods: {

      getTransaction() {
        axios.get("http://localhost/LaravelProjectsecond/Project/public/api/types")
          .then(response => {
            this.transactions = [...response.data]
          })
          .catch(error => {
            console.error(error);
          });
      },

      deleteData(id) {
      const url = 'http://localhost/LaravelProjectsecond/Project/public/api/types';
      
          axios.delete(`${url}/${id}`)
            .then(response=>{
                console.log(response.data)
            })
        },
        editData(id){
            axios.get(`http://localhost/LaravelProjectsecond/Project/public/api/types/${id}`)
            .then(response=>{
                this.upname=response.data.name
                this.id=response.data.id
            })
        },

        


    },

    mounted() {

      this.getTransaction();
    }

  })



  app.mount('#app')
</script>

@endsection