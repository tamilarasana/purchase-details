<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\Purchase;
use Auth;

class PurchasedetailsController extends Controller
{


	 public function store(Request $request){

      

      /* print_r($validation);*/


            $purchase = new Purchase();

          
           $purchase->pid                 = $request->id;
           $purchase->stock_code          = $request->purchasedate;
           $purchase->account             = $request->account;
           $purchase->product             = $request->product;

           $purchase->bill_type           = $request->billing;
           $purchase->seller              = $request->seller;
           $purchase->quantity           = $request->quantity;
           $purchase->unit_price          = $request->unitprice;

           $purchase->lot_price           = $request->lotprice;
           $purchase->gst_price           = $request->gst;
           $purchase->gst_paid            = $request->gstpaid;
           $purchase->bill_amount         = $request->billamount;

           $purchase->overhead            = $request->overhead;
           $purchase->commission          = $request->commission;
           $purchase->cost_to_company     = $request->ctc;
           $purchase->banck_ac            = $request->bankaccount;

           $purchase->t_lot_price         = $request->totallotprice;
           $purchase->t_gst_recevid       = $request->totalgstreceived;
           $purchase->excess_gst_received = $request->excessgstreceived;
           $purchase->t_sold_quanity      = $request->totalsoldquantity;

         
           $purchase->t_paid_quanity      = $request->totalpendingquantity;
           $purchase->t_bill_amount       = $request->totalbillamount;
           $purchase->t_bill_received     = $request->totalbillreceivd;
           $purchase->t_bill_pend         = $request->totalbillpending;
 
           $purchase->t_sales_overhead    = $request->totalsalesoverhead;
           $purchase->t_sales_commission  = $request->totalsalescommission;
           $purchase->t_net_receivable    = $request->totalnetreceivable;
           $purchase->t_loss              = $request->totalloss;

           
           $purchase->profit_before_tax   = $request->profitbeforetax; 
           $purchase->profit_after_tax    = $request->profitaftertax;
           $purchase->optimum_profit      = $request->optimumprofit;
           $purchase->unit_profit         = $request->unitprofit;

           
           $purchase->created_by          = $request->creatby;
           $purchase->created_date        = $request->createdate;
           $purchase->updated_by          = $request->updateby;
           $purchase->updated_date        = $request->updatedate;


            if($purchase->save()){

            return redirect('view')->with('message','Data added Successfully');

        }
                   /* echo "Insert Successfully";
                }else{
                    echo "failled";
                }*/

       }

        public function index(){ 
            $datas['datas'] = Purchase::all();
             


            return view('view',$datas);
          
        }

        public function list(){
           $datas['datas'] = Purchase::all();
          return view('list', $datas);
        }

        public function edit($id){

                $data = Purchase::find($id);


                return view('edit_details', compact('data','id'));
            }



        
}
