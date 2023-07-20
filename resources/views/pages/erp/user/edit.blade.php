@extends('layout.erp.main')
@section('content-wrapper')


<form class="forms-sample" action="{{route('users.update',$user->id)}}" method="post">
                @method('PUT')
                @csrf

                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" value="{{$user->username}}" name="txtname">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Mobile</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Mobile" value="{{$user->mobile}}" name="txtmobile">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Email</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" value="{{$user->email}}" name="txtemail">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Address</label>
                      <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Address" value="{{$user->address}}" name="txtaddress">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Password</label>
                      <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password" value="{{$user->password}}" name="txtaddress">
                    </div>
                   
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
</form>
@endsection