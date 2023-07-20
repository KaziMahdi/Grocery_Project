@extends('layout.erp.main')
@section('content-wrapper')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="card-header bg-light " style="height: 70px;">
        <div class="w-100 d-flex justify-content-between align-items-end">
          <h4 class="color-primary">Manage Uom</h4>
          <a href="{{url('/uoms/create')}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-plus-circle mr-1"></i> Create new</a>
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
            @foreach($uoms as $uom)
            <tr>

              <td>
                {{$uom->id}}
              </td>
              <td>
                {{$uom->name}}
              </td>

              <td>
                <form action="{{route('uoms.destroy',$uom->id)}}" method="post">
                  @method('DELETE')
                  @csrf

                  <a href="{{route('uoms.edit',$uom->id)}}" class="btn btn-primary">Edit</a>
                  
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
@endsection