@extends('layout.erp.main')
@section('content-wrapper')

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <div class="card-header bg-light " style="height: 70px;">
        <div class="w-100 d-flex justify-content-between align-items-end">

          <h4 class="color-primary">Details Product</h4>

          <a href="{{route('products.index')}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-plus-circle mr-1"></i> Manage Product</a>
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
                            Uom
                          </th>
                          <th>
                            Purchase Price
                          </th>
                          <th>
                            Selling Price
                          </th>                          
                          <th>
                            Photo
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        
                        <tr>
                          
                          <td>
                          {{$product->id}}
                          </td>
                          <td>
                          {{$product->name}}
                          </td>
                          <td>
                          {{$product->uom_id}}
                          </td>
                          <td>
                          {{$product->purchase_price}}
                          </td>
                          <td>
                           {{$product->salling_price}}
                          </td>
                          <td>
                          <img src="../img/{{$product->photo}}" width="60" height="60" style="border-radius: 20%;">
                          </td>
                          <td>
                           {{$product->created_at}}
                          </td>
                          <td>
                           {{$product->updated_at}}
                          </td>
                          
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection