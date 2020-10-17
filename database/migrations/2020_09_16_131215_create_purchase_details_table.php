<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_details', function (Blueprint $table) {
           $table->bigIncrements('id');


           $table->string('pid');
           $table->string('stock_code');
           $table->string('account');
           $table->string('product');

           $table->string('bill_type');
           $table->string('seller');
           $table->string('quantity');
           $table->string('unit_price');

           $table->string('lot_price');
           $table->string('gst_price');
           $table->string('gst_paid');
           $table->string('bill_amount');

           $table->string('overhead');
           $table->string('commission');
           $table->string('cost_to_company');
           $table->string('banck_ac');

           $table->string('t_lot_price');
           $table->string('t_gst_recevid');
           $table->string('excess_gst_received');
           $table->string('t_sold_quanity');

           $table->string('t_paid_quanity');
           $table->string('t_bill_amount');
           $table->string('t_bill_received');
           $table->string('t_bill_pend');

           $table->string('t_sales_overhead');
           $table->string('t_sales_commission');
           $table->string('t_net_receivable');
           $table->string('t_loss');

           $table->string('profit_before_tax');
           $table->string('profit_after_tax');
           $table->string('optimum_profit');
           $table->string('unit_profit');
           
           $table->string('created_by');
           $table->string('created_date');
           $table->string('updated_by');
           $table->string('updated_date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_details');
    }
}
