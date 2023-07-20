@extends('layout.erp.main')
@section('content-wrapper')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="card-header bg-light " style="height: 70px;">
        <div class="w-100 d-flex justify-content-between align-items-end">

          <h4 class="color-primary">Details Customer</h4>

          <a href="{{route('customers.index')}}" class="btn btn rounded" style="background-color:#9370DB;color:azure"><i class="fas fa-plus-circle mr-1"></i> Manage Customer</a>
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
                Mobile
              </th>
              <th>
                Email
              </th>
              <th>
                Address
              </th>

            </tr>
          </thead>
          <tbody>

            <tr>

              <td>
                {{$customer->id}}
              </td>
              <td>
                {{$customer->name}}
              </td>
              <td>
                {{$customer->mobile}}
              </td>
              <td>
                {{$customer->email}}
              </td>
              <td>
                {{$customer->address}}
              </td>

            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection