@extends('layout.erp.main')
@section('content-wrapper')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="card-header bg-light " style="height: 70px;">
        <div class="w-100 d-flex justify-content-between align-items-end">

          <h4 class="color-primary">Manage Employee</h4>
          <input type="text" class="form-control" placeholder="Searche" id="serch" style="height: 40px;width: 30%;" onkeyup="search()">

          <a href="{{url('/employees/create')}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-plus-circle mr-1"></i> Create new</a>
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
                Mobile
              </th>
              <th>
                Email
              </th>
              <th>
                Address
              </th>
              <th>
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($employees as $employee)
            <tr>

              <td>
                {{$employee->id}}
              </td>
              <td>
                {{$employee->name}}
              </td>
              <td>
                {{$employee->mobile}}
              </td>
              <td>
                {{$employee->email}}
              </td>
              <td>
                {{$employee->address}}
              </td>
              <td>
                <form action="{{route('employees.destroy',$employee->id)}}" method="post">
                  @method('DELETE')
                  @csrf

                  <a href="{{route('employees.edit',$employee->id)}}" class="btn btn-primary">Edit</a>
                  <a href="{{route('employees.show',$employee->id)}}" class="btn btn-success">View</a>
                  <button type="submit" name="delete" class="btn btn-info">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


@section('script')
<script>
        function search(){
            let serch=document.getElementById('serch').value
            
            let table=document.getElementById('table')
            
            let tr=table.getElementsByTagName('tr')
            
            for(i=0;i<tr.length;i++){

                let td=tr[i].getElementsByTagName('td')

                for(l=0;l<td.length;l++){
                    let content=td[l].textContent

                    if(content.indexOf(serch) > -1){
                        tr[i].style.display=""
                        tr[i].style.backgroundColor="#f2f2f2"
                        

                        break;
                    }else{
                        tr[i].style.display="none"
                    }
                }
            }
        }
</script>
@endsection

@endsection