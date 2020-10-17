<html>
<head>
    <!-- bootstrap cdn -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!-- Our Custom CSS -->
<link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- {{ print_r($datas) }} -->
    <div class="container">
          <h5 class="card-header d-flex justify-content-between align-items-center">
          <b>Purchase Details</b>
             <a href="{{ url('/purchase') }}"> <button class="btn btn-lg btn-primary">Edit</button></a>
              <a class="btn btn-lg btn-success" href="{{ url('/list') }}">List All</a>
          </h5>


          <thead>
             <tbody> 
               @foreach($datas as $key=> $datas)
                 <tr>
                 <div class="row">

                        <div class="col">
                            <th><label>ID</label></th><br>
                             <td><strong>{{$datas['pid']}}</strong></td>
                        </div>

                        <div class="col">
                           <th><label>Purchase Date</label></th><br>
                            <td><strong>{{$datas['stock_code']}}</strong></td>
                        </div>

                        <div class="col">
                            <th><label>Account</label></th><br>
                             <td><strong>{{$datas['account']}}</strong></td>
                        </div>

                        <div class="col">
                           <th><label>Product</label></th><br>
                           <td><strong>{{$datas['product']}}</strong></td>
                       </div>
                </div>
                <hr>

                     <div class="row">
                        <div class="col">
                           <th><label>Billing</label></th><br>
                           <td><strong>{{$datas['bill_type']}}</strong></td>
                        </div>

                        <div class="col">
                            <th><label>Seller</label></th><br>
                              <td><strong>{{$datas['seller']}}</strong></td>
                        </div>

                        <div class="col">
                            <th><label>Quantity</label></th><br>
                             <td><strong>{{$datas['quantity']}}</strong></td>
                        </div>

                        <div class="col">
                            <th><label>Unit Price</label></th><br>
                            <td><strong>{{$datas['unit_price']}}</strong></td>
                        </div>
                </div>
                <hr>

                <div class="row">
                        <div class="col">
                           <th><label>Lot  Price</label></th><br>
                           <td><strong>{{$datas['lot_price']}}</strong></td>
                        </div>

                        <div class="col">
                            <th><label>GST %</label></th><br>
                             <td><strong>{{$datas['gst_price']}}</strong></td>
                        </div>

                        <div class="col">
                           <th><label>GST Paid</label></th><br>
                            <td><strong>{{$datas['gst_paid']}}</strong></td>
                        </div>

                        <div class="col">
                           <th><label>Bill Amount</label></th><br>
                           <td><strong>{{$datas['bill_amount']}}</strong></td>
                        </div>
                </div>
                <hr>


                 <div class="row">
                        <div class="col">
                            <th><label>Overhead</label></th><br>
                            <td><strong>{{$datas['overhead']}}</strong></td>
                        </div>

                        <div class="col">
                            <th><label>Commission</label></th><br>
                            <td><strong>{{$datas['commission']}}</strong></td>
                        </div>

                        <div class="col">
                           <th><label>CTC</label></th><br>
                           <td><strong>{{$datas['cost_to_company']}}</strong></td>
                        </div>

                        <div class="col">
                            <th><label>Bank Account</label></th><br>
                            <td><strong>{{$datas['banck_ac']}}</strong></td>
                            </div>
                </div>
                <hr>

                <div class="row">
                        <div class="col">
                            <th><label>Total Lot Price</label></th><br>
                            <td><strong>{{$datas['t_lot_price']}}</strong></td>
                        </div> 

                        <div class="col">
                            <th><label>Total GST Received</label></th><br>
                            <td><strong>{{$datas['t_gst_recevid']}}</strong></td>                   
                        </div>

                        <div class="col">
                            <th><label>Excess GST Received</label></th><br>
                            <td><strong>{{$datas['excess_gst_received']}}</strong></td>
                        </div>

                        <div class="col">
                            <th><label>Total Sold Quantity</label></th><br>
                            <td><strong>{{$datas['t_sold_quanity']}}</strong></td>
                        </div>
                </div>
                <hr>


                 <div class="row">
                        <div class="col">
                            <th><label>Total Pending Quantity</label></th><br>
                            <td><strong>{{$datas['t_paid_quanity']}}</strong></td>
                        </div>

                        <div class="col">
                           <th><label>Total Bill Amount</label></th><br>
                           <td><strong>{{$datas['t_bill_amount']}}</strong></td>                            
                        </div>

                        <div class="col">
                            <th><label>Total Bill Received</label></th><br>
                            <td><strong>{{$datas['t_bill_received']}}</strong></td>
                        </div>

                        <div class="col">
                            <th><label>Total Bill Pending</label></th><br>
                            <td><strong>{{$datas['t_bill_pend']}}</strong></td>                          
                        </div>
                </div>
                <hr>

                 <div class="row">
                        <div class="col">
                            <th><label>Total Sales Overhead </label></th><br>
                            <td><strong>{{$datas['t_sales_overhead']}}</strong></td>                     
                       </div>

                        <div class="col">
                            <th><label>Total Sales Commission</label></th><br>
                            <td><strong>{{$datas['t_sales_commission']}}</strong></td>
                        </div>

                        <div class="col">
                            <th><label>Total Net Receivable</label></th><br>
                            <td><strong>{{$datas['t_net_receivable']}}</strong></td>
                        </div>

                        <div class="col">
                            <th><label>Total Loss</label></th><br>
                            <td><strong>{{$datas['t_loss']}}</strong></td>
                        </div>
                </div>
                <hr>

                <div class="row">
                        <div class="col">
                            <th><label>Profit Before Tax</label></th><br>
                             <td><strong>{{$datas['profit_before_tax']}}</strong></td>
                        </div>

                        <div class="col">
                            <th><label>Profit After Tax</label></th><br>
                            <td><strong>{{$datas['profit_after_tax']}}</strong></td>
                        </div>

                        <div class="col">
                            <th><label>Optimum Profit</label></th><br>
                             <td><strong>{{$datas['optimum_profit']}}</strong></td>
                        </div>

                        <div class="col">
                            <th><label>Unit profit</label></th><br>
                            <td><strong>{{$datas['unit_profit']}}</strong></td>
                        </div>
                </div>
                <hr>

                 <div class="row">
                        <div class="col">
                            <th><label>Crete By</label></th><br>
                            <td><strong>{{$datas['created_by']}}</strong></td>
                        </div>

                        <div class="col">
                            <th><label>Create Date</label></th><br>
                             <td><strong>{{$datas['created_date']}}</strong></td>
                        </div>

                        <div class="col">
                            <th><label>Update By</label></th><br>
                            <td><strong>{{$datas['updated_by']}}</strong></td>
                        </div>

                        <div class="col">
                            <th><label>Update Date</label></th><br>
                             <td><strong>{{$datas['updated_date']}}</strong></td>
                        </div>
                </div>
                <hr>

            </thead>
                     
              </tr>
            @endforeach 
        </tbody>

  </body>
</html>
