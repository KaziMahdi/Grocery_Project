@extends('layout.erp.main')
@section('content-wrapper')


<form class="forms-sample" action="{{route('products.update',$product)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Productname" name="txtname" value="{{$product->name}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Purchase Price</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Purchaseprice" name="txtprice" value="{{$product->purchase_price}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Selling Price</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Sellingprice" name="txtsellingprice" value="{{$product->salling_price}}">
                    </div>

                    <div class="form-group">
                    <label for="exampleSelectGender">Uom</label>
                        <select class="form-control" id="exampleSelectGender" name="txtuom" value="{{$product->uom_id}}">
                            
                        @foreach($uoms as $uom)

                        @if($uom->id==$product->uom_id)

                          <option value="{{$uom->id}}" selected>                            
                          {{$uom->name}}</option>

                        @else
                          <option value="{{$uom->id}}">                            
                          {{$uom->name}}</option>
                          
                        @endif
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="exampleSelectGender">Category</label>
                        <select class="form-control" id="exampleSelectGender" name="txtuom" value="{{$product->category_id}}">
                            
                        @foreach($categoryes as $categorye)

                        @if($categorye->id==$product->category_id)

                          <option value="{{$categorye->id}}" selected>                            
                          {{$categorye->name}}</option>

                        @else
                          <option value="{{$categorye->id}}">                            
                          {{$categorye->name}}</option>
                          
                        @endif
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Photo</label>
                      <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Photo" name="txtphoto" value="{{$product->photo}}">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
</form>
@endsection