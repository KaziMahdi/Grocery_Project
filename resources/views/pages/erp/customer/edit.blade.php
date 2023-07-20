@extends('layout.erp.main')
@section('content-wrapper')


<form class="forms-sample" action="{{url('/customers')}}/{{($customer->id)}}" method="post">
                @method("PUT")
                @csrf

                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="txtname" value="{{$customer->name}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Mobile</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" name="txtmobile" value="{{$customer->mobile}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Email</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="txtemail" value="{{$customer->email}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Address</label>
                      <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password" name="txtaddress" value="{{$customer->address}}">
                    </div>
                   
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
</form>
@endsection