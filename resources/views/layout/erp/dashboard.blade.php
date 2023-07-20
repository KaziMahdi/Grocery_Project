@extends('layout.erp.main')

@section('content-wrapper')

<link rel="stylesheet" href="{{asset('assetsdash/css/app.min.css')}}">
<link rel="stylesheet" href="{{asset('assetsdash/css/make.css')}}">


<div class="row ">
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-style1">
                <div class="card-statistic-3">
                  <div class="card-icon card-icon-large"><i class="fa fa-award"></i></div>
                  <div class="card-content">
                    <h4 class="card-title">New Orders</h4>
                    <span>524</span>
                    <div class="progress mt-1 mb-1" data-height="8">
                      <div class="progress-bar l-bg-purple" role="progressbar" data-width="25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0 text-sm">
                      <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                      <span class="text-nowrap">Since last month</span>
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
                    <h4 class="card-title">New Booking</h4>
                    <span>1,258</span>
                    <div class="progress mt-1 mb-1" data-height="8">
                      <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0 text-sm">
                      <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                      <span class="text-nowrap">Since last month</span>
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
                    <h4 class="card-title">Inquiry</h4>
                    <span>10,225</span>
                    <div class="progress mt-1 mb-1" data-height="8">
                      <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0 text-sm">
                      <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                      <span class="text-nowrap">Since last month</span>
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
                    <h4 class="card-title">Earning</h4>
                    <span>$2,658</span>
                    <div class="progress mt-1 mb-1" data-height="8">
                      <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0 text-sm">
                      <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                      <span class="text-nowrap">Since last month</span>
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
                  <h4>Revenue Chart</h4>
                  <div class="card-header-action">
                    <ul class="nav nav-pills" role="tablist" id="chart-tabs">
                      <li class="nav-item">
                        <a class="nav-link active card-tab-style" data-bs-toggle="tab" data-id="1" role="tab"
                          aria-selected="true">2017</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link card-tab-style" data-bs-toggle="tab" data-id="2" role="tab"
                          aria-selected="false">2018</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link card-tab-style" data-bs-toggle="tab" data-id="3" role="tab"
                          aria-selected="false">2019</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-body">
                  <div id="chart1"></div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-6 ">
              <div class="card">
                <div class="card-header">
                  <h4>Revenue Chart</h4>
                </div>
                <div class="card-body">
                  <div id="chart2"></div>
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