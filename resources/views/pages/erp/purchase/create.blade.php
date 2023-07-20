@extends('layout.erp.main')

@section('style')

@endsection


@section('content-wrapper')

<form action="/orders" method="post">
  @method('POST')
  @csrf

  <div style="margin:8% 0 10% 5%;border:2px solid #844FC1;box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;">


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">



            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h3 style="text-align: center;">
                    <i class="fas fa-House"></i>Grocery Store<br>
                    <button type="button" class="btn btn mt-2" style="background-color: #844FC1;color:aliceblue;margin-top:2px">Purchases Form</button><br>
                  </h3>
                </div>
                <hr style="border:1px solid #844FC1; width:90%">
                <!-- /.col -->
              </div>

              <!-- info row -->
              <div class="row invoice-info" style="font-size:16px;">
                <div class="col-sm-4 invoice-col">
                  
                  <address>
                    <strong>KAZI, Inc.</strong><br>
                    House:12, Road:1<br>
                    Block:E<br>
                    Mobile: 01518389862<br>
                    Email: mdkazimahdi@gmail.com
                  </address>
                </div>
                <!-- /.col -->

                <div class="col-sm-4 invoice-col">
                  
                  Suppliers
                  <address>
                    <select id="cmbSupplier" name="supplier_id">
                      @foreach($suppliers as $supplier)
                      <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                      @endforeach
                    </select>

                    <div id="supplier-mobile"></div>

                  </address>
                  <div>
                Shipping Address:<br>
                <textarea id="txtShippingAddress"></textarea>
              </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">

                  <table>

                    <tr>
                      <td><b><i class="fa fa-circle  text-xs mr-1" style="color:#00a7c7"></i>Purchase Date:</b></td>
                      <td><input type="text" style="width:150px" id="txtPurchaseDate" value=<?php echo date("d-m-Y"); ?> /></td>
                    </tr>
                    <tr>
                      <td><b><i class="fa fa-circle  text-xs mr-1" style="color:#00a7c7"></i>Due Date:</b></td>
                      <td><input type="text" style="width:150px" id="txtDueDate" value=<?php echo date("d-m-Y"); ?>></td>
                    </tr>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row" style="font-size:medium;margin-top:30px;background-color:#844FC1;">
                <div class="col-12 table-responsive">
                  <table class="table table-striped" style="color:gray">
                    <thead>
                      <tr style="color:aliceblue">
                        <th>SN</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Mesure</th>
                        <th>Uom</th>
                        <th>Discount</th>
                        <th>Subtotal</th>



                        <th><input type="button" id="clearAll" value="Clear" /></th>
                      </tr>
                      <tr>
                        <th></th>
                        <th>
                          <select id="cmbProduct" name="product_id" style="width: 100px;">
                            @foreach($products as $product)
                            <option value="{{$product->id}}">{{$product->name}}</option>
                            @endforeach
                          </select>
                        </th>

                        <th>
                          <input type="text" id="txtPrice" style="width: 90px;" />
                        </th>
                        <th>
                          <input type="text" id="txtMesure" style="width: 90px;" />
                        </th>
                        <th>
                          <input type="text" id="txtUom" style="width: 90px;" />
                        </th>
                        <th><input type="text" id="txtDiscount" style="width: 90px;" /></th>
                        <th></th>
                        <th><input type="button" id="btnAddToCart" value=" + " /></th>
                      </tr>
                    </thead>
                    <tbody id="items">

                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row" style="margin-top: 30px;font-size:medium">
                <!-- accepted payments column -->
                <div class="col-6">
                  <strong>Remark</strong><br>
                  <textarea id="txtRemark" style="width: 150px;height:50px"></textarea>
                </div>
                <!-- /.col -->
                <div class="col-6">


                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <th style="width:50%">Subtotal:</th>
                          <td id="subtotal">0</td>
                        </tr>
                        <tr>
                          <th>Tax (5%)</th>
                          <td id="tax">0</td>
                        </tr>

                        <tr>
                          <th>Total:</th>
                          <td id="net-total">0</td>
                        </tr>
                        <tr>
                          <th>Paid Amount</th>
                          <td><input type="text" id="Paid" style="width: 150px;" /></td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print" style="font-size: medium;margin-top:20px">
                <div class="col-12">
                  <!-- <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-success"><i class="fas fa-print"></i> Print</a> -->
                  <div style="float: right;">
                    <button type="button" id="btnProcessOrder" class="btn btn float-right" style="background-color:#844FC1;color:aliceblue"><i class="far fa-credit-card"></i>Save</button>

                  </div>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->



    <script>
      $(function() {




        printCart();

        $("#btnProcessOrder").on("click", function(e) {

          e.preventDefault();

          let supplier_id= $("#cmbSupplier").val();
          var token = $("input[name='_token']").val();
          var method = $("input[name='_method']").val();

          let purchase_date = $("#txtPurchaseDate").val();
          let delivery_date = $("#txtDueDate").val();
          let shipping_address=$("#txtShippingAddress").val();
          let purchase_total=$("#net-total").html();
          let paid_amount=$("#Paid").val();
          let due_amount=$("#due").val();
          let discount = $("#txtDiscount").val();
          let remark= $("#txtRemark").val();
          let vat = 0;
          

          let products = JSON.parse(localStorage.getItem("cart"));

          

          $.ajax({
            url: "{{route('purchases.store')}}",
            type: 'POST',
            data: {
              _token: token,
              _method: method,
              "cmbSuppliar": supplier_id,
              "txtPurchaseDate": purchase_date,
              "txtDueDate": delivery_date,
              "txtShipping":shipping_address,
              "txtPurchaseTotal":purchase_total,
              "txtpaidAmount":paid_amount,
              "txtdueAmount":due_amount,
              "txtDiscount": discount,
              "txtVat": vat,
              "txtremark":remark,
              "txtProducts": products
            },
            success: function(res) {
              console.log(res);
              clearCart();
              $("#items").html("");
            }
          });

        })







        $("#cmbSupplier").on("change", function() {
          $.ajax({
            url: "<?php echo url('getsuppliars') ?>",
            type: 'GET',
            data: {
              "id": $(this).val()
            },
            success: function(res) {
              console.log(res)
              let suppliar = JSON.parse(res)
              $("#supplier-mobile").html("<b>Mobile:</b>" + suppliar.mobile)
            }
          });
        });

        $("#cmbProduct").on("change", function() {
          $.ajax({
            url: "<?php echo url('getproducts') ?>",
            type: 'GET',
            data: {
              "id": $(this).val()
            },
            success: function(res) {
              console.log(res)
              let product = JSON.parse(res)
              
              $("#txtUom").val(product.uom_id);
            }
          });
        })



        $("#btnAddToCart").on("click", function() {

          AddtoCart();

        });

        function AddtoCart() {

          let item_id = $("#cmbProduct").val();
          let name = $("#cmbProduct option:selected").text();
          let price = $("#txtPrice").val();
          let measure = $("#txtMesure").val();
          let uom_id = $("#txtUom").val();
          let discount = $("#txtDiscount").val();
          let total_discount = discount * measure;
          let subtotal = price * measure - total_discount;

          let item = {
            "name": name,
            "item_id": item_id,
            "price": price,
            "measure": parseFloat(measure),
            "uom_id": uom_id,
            "discount": discount,
            'total_discount': total_discount,
            "subtotal": subtotal
          }

          save(item)
          printCart();

        }

        $("body").on("click", ".delete", function() {
          let id = $(this).data("id");
          delItem(id);
          printCart();
        })

        $("#clearAll").on("click", function() {
          clearCart();
          printCart();
        })

        function printCart() {
          let cart = getCart();
          let sn = 1;
          let $bill = "";
          let subtotal = 0;
          $.each(cart, function(i, item) {
            //console.log(item.name);
            subtotal += item.price * item.measure - item.discount;
            let $html = "<tr>";
            $html += "<td>";
            $html += sn;
            $html += "</td>";
            $html += "<td>";
            $html += item.name;
            $html += "</td>";
            $html += "<td data-field='price'>";
            $html += item.price;
            $html += "</td>";
            $html += "<td data-field='measure'>";
            $html += item.measure;
            $html += "</td>";
            $html += "</td>";
            $html += "<td data-field='uom_id'>";
            $html += item.uom_id;
            $html += "</td>";
            $html += "<td data-field='discount'>";
            $html += item.total_discount;
            $html += "</td>";
            $html += "<td data-field='subtotal'>";
            $html += item.subtotal;
            $html += "</td>";
            $html += "<td>";
            $html += "<input type='button' class='delete' data-id='" + item.item_id + "' value='-'/>";
            $html += "</td>";
            $html += "</tr>";
            $bill += $html;
            sn++;
          });

          $("#items").html($bill);

          //Order Summary
          $("#subtotal").html(subtotal);
          let tax = (subtotal * 0.05).toFixed(2);
          $("#tax").html(tax);
          $("#net-total").html(parseFloat(subtotal) + parseFloat(tax));
        }




      });
    </script>


  </div>
</form>
@endsection