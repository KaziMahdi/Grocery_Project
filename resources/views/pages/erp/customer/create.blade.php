@extends('layout.erp.main')
@section('content-wrapper')


<div class="card-header bg-light" style="height: 70px;">
  <div class="w-100 d-flex justify-content-between align-items-end">
    <h4 class="color-primary">Create Customer</h4>
    <a href="{{'/customers'}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-wrench mr-1"></i> Manage Customer</a>
  </div>
</div>

<form class="forms-sample" action="{{route('customers.store')}}" method="post">

  @csrf

  <div class="form-group">
    <label for="exampleInputUsername1">Name</label>
    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="txtname">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Mobile</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Mobile" name="txtmobile">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" name="txtemail">
  </div>

  <div class="form-group">
    <label for="exampleInputConfirmPassword1">Address</label>
    <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Address" name="txtaddress">
  </div>

  <button type="submit" class="btn btn-primary mr-2">Submit</button>
  <button class="btn btn-light">Cancel</button>
</form>
@endsection