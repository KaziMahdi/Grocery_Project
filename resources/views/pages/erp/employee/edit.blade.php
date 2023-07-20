@extends('layout.erp.main')
@section('content-wrapper')


<form class="forms-sample" action="{{route('employees.update',$employee->id)}}" method="post">
                @method('PUT')
                @csrf

                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="txtname" value="{{$employee->name}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Mobile</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" name="txtmobile" value="{{$employee->mobile}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Email</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="txtemail" value="{{$employee->email}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Address</label>
                      <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password" name="txtaddress" value="{{$employee->address}}">
                    </div>
                   
                    <button type="Update" class="btn btn-primary mr-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
</form>
@endsection