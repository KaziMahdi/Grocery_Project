@extends('layout.erp.main')
@section('content-wrapper')

@section('style')
<style>


    body {
        margin-top: 20px;
        color: #2e323c;
        background: #f5f6fa;
        position: relative;
        height: 100%;
    }

    .invoice-container {
        padding: 1rem;
    }

    .invoice-container .invoice-header .invoice-logo {
        margin: 0.8rem 0 0 0;
        display: inline-block;
        font-size: 1.6rem;
        font-weight: 700;
        color: #2e323c;
    }

    .invoice-container .invoice-header .invoice-logo img {
        max-width: 130px;
    }

    .invoice-container .invoice-header address {
        font-size: 0.8rem;
        color: #9fa8b9;
        margin: 0;
    }

    .invoice-container .invoice-details {
        margin: 1rem 0 0 0;
        padding: 1rem;
        line-height: 180%;
        background: #f5f6fa;
    }

    .invoice-container .invoice-details .invoice-num {
        text-align: right;
        font-size: 0.8rem;
    }

    .invoice-container .invoice-body {
        padding: 1rem 0 0 0;
    }

    .invoice-container .invoice-footer {
        text-align: center;
        font-size: 0.7rem;
        margin: 5px 0 0 0;
    }

    .invoice-status {
        text-align: center;
        padding: 1rem;
        background: #ffffff;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        margin-bottom: 1rem;
    }

    .invoice-status h2.status {
        margin: 0 0 0.8rem 0;
    }

    .invoice-status h5.status-title {
        margin: 0 0 0.8rem 0;
        color: #9fa8b9;
    }

    .invoice-status p.status-type {
        margin: 0.5rem 0 0 0;
        padding: 0;
        line-height: 150%;
    }

    .invoice-status i {
        font-size: 1.5rem;
        margin: 0 0 1rem 0;
        display: inline-block;
        padding: 1rem;
        background: #f5f6fa;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        border-radius: 50px;
    }

    .invoice-status .badge {
        text-transform: uppercase;
    }

    @media (max-width: 767px) {
        .invoice-container {
            padding: 1rem;
        }
    }


    .custom-table {
        border: 1px solid #e0e3ec;
    }

    .custom-table thead {
        background: #007ae1;
    }

    .custom-table thead th {
        border: 0;
        color: #ffffff;
    }

    .custom-table>tbody tr:hover {
        background: #fafafa;
    }

    .custom-table>tbody tr:nth-of-type(even) {
        background-color: #ffffff;
    }

    .custom-table>tbody td {
        border: 1px solid #e6e9f0;
    }


    .card {
        background: #ffffff;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        border: 0;
        margin-bottom: 1rem;
    }

    .text-success {
        color: #00bb42 !important;
    }

    .text-muted {
        color: #9fa8b9 !important;
    }

    .custom-actions-btns {
        margin: auto;
        display: flex;
        justify-content: flex-end;
    }

    .custom-actions-btns .btn {
        margin: .3rem 0 .3rem .3rem;
    }

    .sales-invoice {
    background-color: #f1f1f1;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    padding: 10px;
    font-family: Arial, sans-serif;
    width: 200px;
    display: flex;
    justify-content: center;
  }
  
  .sales-invoice h4 {
    color: purple;
    text-align: center;
  }
    
    
</style>
@endsection
<div class="container">
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="invoice-container">
                        <div class="invoice-header">
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
                                    
                                    <div class="sales-invoice mb-5 float-right">
                                        
                                             <h4>SALES INVOICE</h4>   
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                                    
                                    <div class="custom-actions-btns mb-5">
                                        <a href="#" class="btn btn-primary">
                                            <i class="icon-download"></i> Download
                                        </a>
                                        <a href="" class="btn btn-secondary" onclick="printPage()">
                                            <i class="icon-printer"></i> Print
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
                            <!-- Row start -->
                            <div class="row gutters print-container">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <a href="#" class="invoice-logo">
                                        Grocery store
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <address class="text-right">
                                        <strong>KAZI, Inc.</strong><br>
                                        House:12, Road:1<br>
                                        Block:E<br>
                                        Mobile: 01518389862<br>
                                        Email: mdkazimahdi@gmail.com
                                    </address>
                                </div>
                            </div>
                            <!-- Row end -->
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                    <div class="invoice-details">
                                        <address>
                                            To: {{$customer->name}}<br>
                                            Street: {{$customer->address}} <br>
                                            Phone: {{$customer->mobile}}
                                        </address>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="invoice-details">
                                        <div class="invoice-num">
                                            <div>Invoice:{{$order->id}}</div>
                                            <div>Issu Date:{{$order->delivery_date}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
                        </div>
                        <div class="invoice-body" id="print-content">
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table custom-table m-0">
                                            <thead>
                                                <tr>
                                                    <th>SN</th>
                                                    <th>Items</th>                                                    
                                                    <th>Measure</th>
                                                    <th>Uom</th>
                                                    <th>Price</th>
                                                    <th>Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                              $sn=0;
                                              $subtotal=0;
                                            @endphp
                                                @foreach($order_details as $order_detail)
                                                <tr>
                                                    <td>{{++$sn}}</td>                                    
                                                    <td>{{$order_detail->pname}}</td>
                                                    <td>{{$order_detail->measure}}</td>
                                                    <td>{{$order_detail->uname}}</td>
                                                    <td>{{$order_detail->price}}</td>
                                                    <?php 
                                                    $amount=($order_detail->measure*$order_detail->price)-$order_detail->discount;
                                                    $subtotal+=$amount
                                                    ?>
                                                    <td>{{$amount}}</td>
                                                </tr>
                                                
                                                @endforeach
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td colspan="4">
                                                        <p class="text-right">
                                                            Subtotal<br>
                                                            Tax(5%)<br>
                                                            
                                                        </p>
                                                        <h5 class="text-success text-right"><strong>Grand Total</strong></h5>
                                                        <h5 class="text-success text-right"><strong>Paid Amount</strong></h5>
                                                        <h5 class="text-success text-right"><strong>Due Amount</strong></h5>
                                                    </td>
                                                    <td>
                                                        
                                                        <p>
                                                            {{$subtotal}}<br>
                                                           <?php $tax=$subtotal*0.05?>
                                                            {{$tax}}<br>
                                                        </p>
                                                        <?php $total=$subtotal+$tax?>
                                                        <h5 class="text-success"><strong>{{$total}}</strong></h5>
                                                        
                                                        <h5 class="text-success"><strong>{{$order->paid_amount}}</strong></h5>
                                                        <?php $due= $total- $order->paid_amount?>
                                                        <h5 class="text-success"><strong>{{$due}}</strong></h5>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
                        </div>
                        <div class="invoice-footer">
                            Thank you for your Business.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('script')
<script>
        function printPage() {
            // Get the element to print
            var content = document.getElementById("print-content");

            // Modify the content before printing
            content.innerHTML += "<br>Printed on " + new Date().toLocaleDateString();

            // Print the modified content
            window.print();
        }
    </script>
@endsection



</div>

@endsection