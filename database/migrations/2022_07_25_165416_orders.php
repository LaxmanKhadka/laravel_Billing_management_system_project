<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('productName');
            $table->string('productQuantity');
            $table->string('productPrice');
            $table->string('Customer_select');
            $table->string('customerEmail');
            $table->string('customerPhone');
            $table->string('shippingAddress1');
            $table->string('shippingAddress2');
            $table->string('State');
            $table->string('City');
            $table->string('Country');
            $table->string('subtotalAmount');
            $table->string('taxAmount');
            $table->string('discountAmount');
            $table->string('totalAmount');
            $table->string('paid_by');
            $table->string('Paid_Ref_No');
            $table->string('bankName');
            $table->string('Invoice_no');
            $table->string('remarks');
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
        schema::dropIfExists('orders');
    }
};
