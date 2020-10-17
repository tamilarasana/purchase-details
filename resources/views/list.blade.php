<!DOCTYPE html>
<html>
 <head>
  <title>Your Details</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 </head>
 <body>
 <h2 style="text-align:center;">List </h2>
<div class="table-responsive">
  <table class="table table-striped table-hover table-condensed">
    <thead>
      <tr>
        <th><strong>ID</strong></th>
        <th><strong>Purchase Date</strong></th>
        <th><strong>Account</strong></th>
        <th><strong>Product</strong></th>

        <th><strong>Billing</strong></th>
        <th><strong>Seller</strong></th>
        <th><strong>Quantity</strong></th>
        <th><strong>Unit Price</strong></th>

        <th><strong>Lot Price</strong></th>
        <th><strong>GST %</strong></th>
        <th><strong>GST Paid</strong></th>
        <th><strong>Bill Amount</strong></th>

        <th><strong>Overhead</strong></th>
        <th><strong>Commision</strong></th>
        <th><strong>CTC</strong></th>
        <th><strong>Bank Account</strong></th>

        <th><strong>Total Lot Price</strong></th>
        <th><strong>Total GST Received</strong></th>
        <th><strong>Excess GST Received</strong></th>
        <th><strong>Total Sold Quanity</strong></th>
 
        <th><strong>Total Pending Quantity</strong></th>
        <th><strong>Total Bill Amount</strong></th>
        <th><strong>Total Bill Received</strong></th>
        <th><strong>Total  Bill Pending</strong></th>
 
        <th><strong>Total Sales Overhead</strong></th>
        <th><strong>Total Sales Commission</strong></th>
        <th><strong>Total  Net  Receivable</strong></th>
        <th><strong>Total Loss</strong></th>

        <th><strong>Profit Before Tax</strong></th>
        <th><strong>Profit After Tax</strong></th>
        <th><strong>Optium Profit</strong></th>
        <th><strong>Unit Profit</strong></th>

        <th><strong>Crate By</strong></th>
        <th><strong>Create Date</strong></th>
        <th><strong>Update By</strong></th>
        <th><strong>Update Date</strong></th>

       </tr>
    </thead>
    <tbody>
    
         @foreach($datas as $key=> $datas)
          <tr>
              <td>{{$datas['pid']}}</td>
              <td>{{$datas['stock_code']}}</td>
              <td>{{$datas['account']}}</td>
              <td>{{$datas['product']}}</td>

              <td>{{$datas['bill_type']}}</td>
              <td>{{$datas['seller']}}</td>              
              <td>{{$datas['quantity']}}</td>
              <td>{{$datas['unit_price']}}</td>

              <td>{{$datas['lot_price']}}</td>
              <td>{{$datas['gst_price']}}</td>              
              <td>{{$datas['gst_paid']}}</td>
              <td>{{$datas['bill_amount']}}</td>

              <td>{{$datas['overhead']}}</td>
              <td>{{$datas['commission']}}</td>
              <td>{{$datas['cost_to_company']}}</td>
              <td>{{$datas['banck_ac']}}</td>
              
              <td>{{$datas['t_lot_price']}}</td>
              <td>{{$datas['t_gst_recevid']}}</td>
              <td>{{$datas['excess_gst_received']}}</td>
              <td>{{$datas['t_sold_quanity']}}</td>

              <td>{{$datas['t_paid_quanity']}}</td>
              <td>{{$datas['t_bill_amount']}}</td>
              <td>{{$datas['t_bill_received']}}</td>
              <td>{{$datas['t_bill_pend']}}</td>

              <td>{{$datas['t_sales_overhead']}}</td>
              <td>{{$datas['t_sales_commission']}}</td>
              <td>{{$datas['t_net_receivable']}}</td>
              <td>{{$datas['t_loss']}}</td>

              <td>{{$datas['profit_before_tax']}}</td>
              <td>{{$datas['profit_after_tax']}}</td>
              <td>{{$datas['optimum_profit']}}</td>
              <td>{{$datas['unit_profit']}}</td>

              <td>{{$datas['created_by']}}</td>
              <td>{{$datas['created_date']}}</td>
              <td>{{$datas['updated_by']}}</td>
              <td>{{$datas['updated_date']}}</td>

          </tr>
        @endforeach
    </tbody>
  </table>
  <center>
  <a class="btn btn-danger" href="{{ url('/view') }}">Back</a>
  </center>
  </body>
</html>