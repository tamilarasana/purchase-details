<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    //

    protected $table = 'purchase_details';
	 protected $primaryKey = 'id';

      protected $fillable = [
         
         
       
           'pid',
           'stock_code',
           'account',
           'product',

           'bill_type',
           'seller',
           'quantity',
           'unit_price',

           'lot_price',
           'gst_price',
           'gst_paid',
           'bill_amount',

           'overhead',
           'commission',
           'cost_to_company',
           'banck_ac',

           't_lot_price',
           't_gst_recevid',
           'excess_gst_received',
           't_sold_quanity',

           't_paid_quanity',
           't_bill_amount',
           't_bill_received',
           't_bill_pend',

           't_sales_overhead',
           't_sales_commission',
           't_net_receivable',
           't_loss',

           'profit_before_tax',
           'profit_after_tax',
           'optimum_profit',
           'unit_profit',

           'created_by',
           'created_date',
           'updated_by',
           'updated_date',

    ];
}
