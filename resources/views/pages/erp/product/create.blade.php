@extends('layout.erp.main')
@section('content-wrapper')


<div class="card-header bg-light" style="height: 70px;">
  <div class="w-100 d-flex justify-content-between align-items-end">
    <h4 class="color-primary">Create Product</h4>
    <a href="{{'/products'}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-wrench mr-1"></i> Manage Product</a>
  </div>
</div>


<form class="forms-sample" action="{{route('products.store')}}" method="post" enctype="multipart/form-data">

                @csrf

                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Productname" name="txtname">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Purchase Price</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Purchaseprice" name="txtprice">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Selling Price</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Sellingprice" name="txtsellingprice">
                    </div>

                    <div class="form-group">
                    <label for="exampleSelectGender">Uom</label>
                        <select class="form-control" id="exampleSelectGender" name="txtuom">
                            
                            @foreach($uoms as $uom)
                          <option value="{{$uom->id}}">{{$uom->name}}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="exampleCategory">Category</label>
                        <select class="form-control" id="exampleCategory" name="txtCategory">
                            
                          @foreach($categoryes as $categorye)
                          <option value="{{$categorye->id}}">{{$categorye->name}}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Photo</label>
                      <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password" name="txtphoto">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
</form>
@endsection