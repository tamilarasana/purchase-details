<html>
<head>
    <!-- bootstrap cdn -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!-- Our Custom CSS -->
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
          <h5 class="card-header d-flex justify-content-between align-items-center">
          <b>Purchase Details</b>
            <!--   <button type="button" class="btn btn-lg btn-primary">Edit</button>
              <button type="button" class="btn btn-lg btn-success">List All</button> -->
          </h5>
         <form class=" " action="{{URL::to('/store')}}" method="post" autocomplete="off">
                 <div class="row">
                        <div class="col">
                            <label>ID</label>
                            <input type="text" name="id" class="form-control" placeholder="ID">
                        </div>

                        <div class="col">
                            <label>Purchase Date</label>
                            <input type="date" name="purchasedate"  class="form-control" placeholder="ID">
                        </div>

                        <div class="col">
                            <label>Account</label>
                            <select type="text" name="account" class="form-control">
                               <option>--Select--</option>
                                <option value="sbi">Chennai SBI</option>
                                <option value="iot">Thiruchi DM</option> 
                            </select>
                        </div>

                        <div class="col">
                            <label>Product</label>
                            <select type="text" name="product" class="form-control">
                            <option>--Select--</option>
                            <option value="v4400">V4400</option>
                            <option value="v4401">V4401</option> 
                            </select>

                        </div>
                </div>
                <hr>

                     <div class="row">
                        <div class="col">
                            <label>Billing</label>
                            <input type="billing" name="billing" class="form-control" placeholder="Billing">
                        </div>

                        <div class="col">
                            <label>Seller</label>
                            <select type="text" name="seller" class="form-control">
                            <option>--Select--</option>
                            <option value="tamil">Tamilarasan</option>
                            <option value="vicky">Vicky</option> 
                            </select>
                        </div>

                        <div class="col">
                            <label>Quantity</label>
                            <input type="text" name="quantity" class="form-control" placeholder="Quantity">
                        </div>

                        <div class="col">
                            <label>Unit Price</label>
                            <input type="text" name="unitprice" class="form-control" placeholder="Unit Price">
                        </div>
                </div>
                <hr>

                <div class="row">
                        <div class="col">
                            <label>Lot  Price</label>
                            <input type="billing" name="lotprice" class="form-control" placeholder="Lot  Price">
                        </div>

                        <div class="col">
                            <label>GST %</label>
                            <select type="text" name="gst" class="form-control">
                            <option>--Select--</option>
                            <option value="1">1</option>
                            <option value="2">2</option> 
                            <option value="3">3</option> 
                            <option value="4">4</option>
                            <option value="5">5</option> 
                          </select>
                        </div>

                        <div class="col">
                            <label>GST Paid</label>
                            <input type="text" name="gstpaid" class="form-control" placeholder="GST Paid">
                        </div>

                        <div class="col">
                            <label>Bill Amount</label>
                            <input type="text" name="billamount" class="form-control" placeholder="Bill Amount">
                        </div>
                </div>
                <hr>


                 <div class="row">
                        <div class="col">
                            <label>Overhead</label>
                            <input type="text" name="overhead" class="form-control" placeholder="Overhead">
                        </div>

                        <div class="col">
                            <label>Commission</label>
                            <input type="text" name="commission"  class="form-control" placeholder="Commission">
                        </div>

                        <div class="col">
                            <label>CTC</label>
                            <input type="text" name="ctc" class="form-control" placeholder="CTC">
                        </div>

                        <div class="col">
                            <label>Bank Account</label>
                            <select type="text" name="bankaccount" class="form-control">
                            <option>--Select--</option>
                            <option value="tamilsbi">Tamil  SBI</option>
                            <option value="sooriyaicic">Sooriya ICIC</option> 
                            </select>
                        </div>
                </div>
                <hr>

                <div class="row">
                        <div class="col">
                            <label>Total Lot Price</label>
                            <input type="text" name="totallotprice" class="form-control" placeholder="Total Lot Price">
                        </div> 

                        <div class="col">
                            <label>Total GST Received</label>
                            <input type="text" name="totalgstreceived"  class="form-control" placeholder="Total GST Received">
                        </div>

                        <div class="col">
                            <label>Excess GST Received</label>
                            <input type="text" name="excessgstreceived" class="form-control" placeholder="Excess GST Received">
                        </div>

                        <div class="col">
                            <label>Total Sold Quantity</label>
                            <input type="text" name="totalsoldquantity" class="form-control" placeholder="Product">
                        </div>
                </div>
                <hr>


                 <div class="row">
                        <div class="col">
                            <label>Total Pending Quantity</label>
                            <input type="text" name="totalpendingquantity" class="form-control" placeholder="Total Pending Quantity">
                        </div>

                        <div class="col">
                            <label>Total Bill Amount</label>
                            <input type="text" name="totalbillamount"  class="form-control" placeholder="Total Bill Account">
                        </div>

                        <div class="col">
                            <label>Total Bill Received</label>
                            <input type="text" name="totalbillreceivd" class="form-control" placeholder="Total Bill Received">
                        </div>

                        <div class="col">
                            <label>Total Bill Pending</label>
                            <input type="text" name="totalbillpending" class="form-control" placeholder="Total Bill Pending">
                        </div>
                </div>
                <hr>

                 <div class="row">
                        <div class="col">
                            <label>Total Sales Overhead </label>
                            <input type="text" name="totalsalesoverhead" class="form-control" placeholder="Total Sales Overhead">
                        </div>

                        <div class="col">
                            <label>Total Sales Commission</label>
                            <input type="text" name="totalsalescommission"  class="form-control" placeholder="totalsalescommission">
                        </div>

                        <div class="col">
                            <label>Total Net Receivable</label>
                            <input type="text" name="totalnetreceivable" class="form-control" placeholder="Total Net Receivable">
                        </div>

                        <div class="col">
                            <label>Total Loss</label>
                            <input type="text" name="totalloss" class="form-control" placeholder="Total Loss">
                        </div>
                </div>
                <hr>

                <div class="row">
                        <div class="col">
                            <label>Profit Before Tax</label>
                            <input type="text" name="profitbeforetax" class="form-control" placeholder="Profit Before Tax">
                        </div>

                        <div class="col">
                            <label>Profit After Tax</label>
                            <input type="text" name="profitaftertax"  class="form-control" placeholder="Profit After Tax">
                        </div>

                        <div class="col">
                            <label>Optimum Profit</label>
                            <input type="text" name="optimumprofit" class="form-control" placeholder="Optimum Profit">
                        </div>

                        <div class="col">
                            <label>Unit profit</label>
                            <input type="text" name="unitprofit" class="form-control" placeholder="Unit Profit">
                        </div>
                </div>
                <hr>

                 <div class="row">
                        <div class="col">
                            <label>Crete By</label>
                            <input type="text" name="creatby" class="form-control" placeholder="createby">
                        </div>

                        <div class="col">
                            <label>Create Date</label>
                            <input type="text" name="createdate"  class="form-control" placeholder="Create Date">
                        </div>

                        <div class="col">
                            <label>Update By</label>
                            <input type="text" name="updateby" class="form-control" placeholder="Update By">
                        </div>

                        <div class="col">
                            <label>Update Date</label>
                            <input type="text" name="updatedate" class="form-control" placeholder="Update Date">
                        </div>
                </div>
                <hr>

                 <center>
                     <div class="form-group">
                        <tr><input type="submit" name="button" class="btn btn-success" value="OK" />
                        <td><a class="btn btn-danger" href="detail">Cancel</a></td></tr>
                    </div>
                 </center>
      </form>
  
  </body>
</html>
