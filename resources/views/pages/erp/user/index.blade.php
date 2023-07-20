@extends('layout.erp.main')
@section('content-wrapper')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="card-header bg-light " style="height: 70px;">
        <div class="w-100 d-flex justify-content-between align-items-end">
          <h4 class="color-primary">Manage User</h4>
          <a href="{{url('/users/create')}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-plus-circle mr-1"></i> Create new</a>
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
                Password
              </th>
              <th>
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>

              <td>
                {{$user->id}}
              </td>
              <td>
                {{$user->username}}
              </td>
              <td>
                {{$user->mobile}}
              </td>
              <td>
                {{$user->email}}
              </td>
              <td>
                {{$user->address}}
              </td>
              <td>
                {{$user->password}}
              </td>
              <td>
                <form action="{{route('users.destroy',$user->id)}}" method="post">
                  @method('DELETE')
                  @csrf

                  <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                  <a href="{{route('users.show',$user->id)}}" class="btn btn-success">View</a>
                  <button type="submit" name="delete" class="btn btn-info">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>

          <tfoot>
            <tr>
              <th colspan="8">
                {{$users->links()}}
              </th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection