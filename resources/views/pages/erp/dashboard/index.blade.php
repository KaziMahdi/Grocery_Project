@extends('layout.erp.main')

@section('content-wrapper')

<link rel="stylesheet" href="{{asset('assetsdash/css/app.min.css')}}">
<link rel="stylesheet" href="{{asset('assetsdash/css/make.css')}}">
@section('style')
<style>
table,tr,th,td{

  border-collapse: collapse;
  padding: 5px;
  text-align: center;
}

</style>
@endsection

<div class="row ">

            
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-style1">
                <div class="card-statistic-3">
                  <div class="card-icon card-icon-large"><i class="fa fa-award"></i></div>
                  <div class="card-content">
                    <h4 class="card-title">New Sales</h4>
                    
                    <h6>{{$result}}</h6>
                    <div class="progress mt-1 mb-1" data-height="8">
                      <div class="progress-bar l-bg-purple" role="progressbar" data-width="25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0 text-sm">
                      <span class="mr-2"><i class="fa fa-arrow-up"></i></span>
                      <span class="text-nowrap">Todays New Order</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-style2">
                <div class="card-statistic-3">
                  <div class="card-icon card-icon-large"><i class="fa fa-briefcase"></i></div>
                  <div class="card-content">
                    <h4 class="card-title">New Customer</h4>
                    <span>{{$customer}}</span>
                    <div class="progress mt-1 mb-1" data-height="8">
                      <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0 text-sm">
                      <span class="mr-2"><i class="fa fa-arrow-up"></i></span>
                      <span class="text-nowrap">New Customer</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-style3">
                <div class="card-statistic-3">
                  <div class="card-icon card-icon-large"><i class="fa fa-globe"></i></div>
                  <div class="card-content">
                    <h4 class="card-title">Sale Total</h4>
                    <span>{{$total}}</span>
                    <div class="progress mt-1 mb-1" data-height="8">
                      <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0 text-sm">
                      <span class="mr-2"><i class="fa fa-arrow-up"></i></span>
                      <span class="text-nowrap">Todays Sale Total</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-style4">
                <div class="card-statistic-3">
                  <div class="card-icon card-icon-large"><i class="fa fa-money-bill-alt"></i></div>
                  <div class="card-content">
                    <h4 class="card-title">Purchase Total</h4>
                    <span>{{$purchase}}</span>
                    <div class="progress mt-1 mb-1" data-height="8">
                      <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0 text-sm">
                      <span class="mr-2"><i class="fa fa-arrow-up"></i></span>
                      <span class="text-nowrap">Todays Purchase Total</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-lg-6 col-xl-6 ">
              <div class="card">
                <div class="card-header">
                  <h4>Sales Report</h4>
                  <div class="card-header-action">
                    
                  </div>
                </div>
                <div class="card-body">
                  <div>
                    <table>
                      <tr>
                        
                        <th>Sn</th>
                        <th>Customer</th>
                        <th>Sale Total</th>
                        <th>Paid Amount</th>
                        <th>Due Amount</th>

                      </tr>
                      @php 
                      $sn=0;
                      @endphp
                      @foreach($orderdetails as $orderdetail)
                      <tr>

                        <td>{{++$sn}}</td>
                        <td>{{$orderdetail->cname}}</td>
                        <td>{{$orderdetail->order_total}}</td>
                        <td>{{$orderdetail->paid_amount}}</td>

                        <?php
                         $due=$orderdetail->order_total-$orderdetail->paid_amount;
                          ?>
                        <td>{{$due}}</td>

                      </tr>
                      @endforeach
                      
                    
                      </table>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-6 ">
              <div class="card">
                <div class="card-header">
                  <h4>Purchase Report</h4>
                </div>
                <div class="card-body">
                  <div>
                  <table>
                      <tr>
                        
                        <th>Sn</th>
                        <th>Product</th>
                        <th>Measure</th>
                        <th>Uom</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Paid Amount</th>

                      </tr>
                      @php 
                      $sn=0;
                      @endphp
                      @foreach($purchasedetails as $purchasedetail)
                      <tr>

                        <td>{{++$sn}}</td>
                        <td>{{$purchasedetail->pname}}</td>
                        <td>{{$purchasedetail->measure}}</td>
                        <td>{{$purchasedetail->uname}}</td>
                        <td>{{$purchasedetail->price}}</td>
                        
                      <?php 
                          $total=$purchasedetail->price*$purchasedetail->measure;
                      
                      ?>
                        <td>{{$total}}</td>
                        <td>{{$purchasedetail->paid_amount}}</td>
                      </tr>
                      @endforeach
                      
                    
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </div>


  <script src="{{asset('assetsdash/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{asset('assetsdash/bundles/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assetsdash/bundles/jqvmap/dist/jquery.vmap.min.js')}}"></script>
  <!-- <script src="{{asset('assetsdash/bundles/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script> -->
  <!-- Page Specific JS File -->
  <script src="{{asset('assetsdash/js/page/index.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{asset('assetsdash/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('assetsdash/js/custom.js')}}"></script>


          @section('script')

          


          @endsection
        @endsection