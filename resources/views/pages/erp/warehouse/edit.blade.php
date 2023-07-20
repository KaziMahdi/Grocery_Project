@extends('layout.erp.main')
@section('content-wrapper')


<form class="forms-sample" action="{{url('/warehouses')}}/{{($warehouse->id)}}" method="post">
                @method("PUT")
                @csrf

                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="txtname" value="{{$warehouse->name}}">
                    </div>

                    
                   
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
</form>
@endsection