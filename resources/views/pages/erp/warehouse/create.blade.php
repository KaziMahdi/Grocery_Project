@extends('layout.erp.main')
@section('content-wrapper')


<div class="card-header bg-light" style="height: 70px;">
  <div class="w-100 d-flex justify-content-between align-items-end">
    <h4 class="color-primary">Create Warehouse</h4>
    <a href="{{'/warehouses'}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-wrench mr-1"></i> Manage Warehouse</a>
  </div>
</div>

<form class="forms-sample" action="{{route('warehouses.store')}}" method="post">

  @csrf

  <div class="form-group">
    <label for="exampleInputUsername1">Name</label>
    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Name" name="txtname">
  </div>

  

  <button type="submit" class="btn btn-primary mr-2">Submit</button>
  <button class="btn btn-light">Cancel</button>
</form>
@endsection