@extends('layout.erp.main')
@section('content-wrapper')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="card-header bg-light " style="height: 70px;">
        <div class="w-100 d-flex justify-content-between align-items-end">
          <h4 class="color-primary">Manage Product</h4>
          <input type="text" class="form-control" placeholder="Searche" id="serch" style="height: 40px;width: 30%;" onkeyup="search()">
          <a href="{{url('/products/create')}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-plus-circle mr-1"></i> Create new</a>
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
                Purchase Price
              </th>
              <th>
                Selling Price
              </th>
              <th>
                Uom
              </th>
              <th>
                Category
              </th>
              <th>
                Photo
              </th>

              <th>
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
            <tr>

              <td>
                {{$product->id}}
              </td>
              <td>
                {{$product->name}}
              </td>

              <td>
                {{$product->purchase_price}}
              </td>
              <td>
                {{$product->salling_price}}
              </td>
              <td>
                {{$product->uname}}
              </td>
              <td>
                {{$product->cname}}
              </td>
              <td>
                <img src="img/{{$product->photo}}" width="60" height="60" style="border-radius: 20%;">
              </td>
              <td>

                <form action="{{route('products.destroy',$product->id)}}" method="post">
                  @method('DELETE')
                  @csrf

                  <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                  <a href="{{route('products.show',$product->id)}}" class="btn btn-success">View</a>
                  <button type="submit" name="delete" class="btn btn-info">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>

          <tfoot>
            <tr>
              <th colspan="8">
                {{$products->links()}}
              </th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
@section('script')
<script>
        function search(){
            let serch=document.getElementById('serch').value
            
            let table=document.getElementById('table')
            
            let tr=table.getElementsByTagName('tr')
            
            for(i=0;i<tr.length;i++){

                let td=tr[i].getElementsByTagName('td')

                for(l=0;l<td.length;l++){
                    let content=td[l].textContent

                    if(content.indexOf(serch) > -1){
                        tr[i].style.display=""
                        tr[i].style.backgroundColor="#f2f2f2"
                        

                        break;
                    }else{
                        tr[i].style.display="none"
                    }
                }
            }
        }
</script>
@endsection
@endsection