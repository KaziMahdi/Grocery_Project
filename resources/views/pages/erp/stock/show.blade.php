@extends('layout.erp.main')
@section('content-wrapper')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="card-header bg-light " style="height: 70px;">
        <div class="w-100 d-flex justify-content-between align-items-end">

          <h4 class="color-primary">Details Stock</h4>          
          <a href="{{route('stocks.index')}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-plus-circle mr-1"></i>Manage Stock</a>
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
              Product
              </th>
              <th>
              Measure
              </th>              
              <th>
              Uom
              </th>
              <th>
              Transaction Types
              </th>
              


            </tr>
          </thead>
          <tbody>

          @foreach($stock_details as $stock_detail)
            <tr>

              <td>
                {{$stock_detail->id}}
              </td>
              <td>
                {{$stock_detail->product_name}}
              </td>
              <td>
                {{$stock_detail->measure}}
              </td>
              <td>
                {{$stock_detail->uname}}
              </td>
              <td>
                {{$stock_detail->transaction_type}}
              </td>
              <td>
              <a href="{{route('report')}}" class="btn btn-success">Report</a>

              </td>

            </tr>
          @endforeach
            <tfoot>
              <th>
                
              </th>
            </tfoot>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection