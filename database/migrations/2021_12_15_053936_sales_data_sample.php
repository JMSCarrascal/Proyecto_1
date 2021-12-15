<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SalesDataSample extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_data_sample', function (Blueprint $table) {
            $table->string('ORDERNUMBER');
            $table->string('QUANTITYORDERED');
            $table->string('PRICEEACH');
            $table->string('ORDERLINENUMBER');
            $table->string('SALES');
            $table->string('ORDERDATE');
            $table->string('STATUS');
            $table->string('QTR_ID');
            $table->string('MONTH_ID');
            $table->string('YEAR_ID');
            $table->string('PRODUCTLINE');
            $table->string('MSRP');
            $table->string('PRODUCTCODE');
            $table->string('CUSTOMERNAME');
            $table->string('PHONE');
            $table->string('ADDRESSLINE1');
            $table->string('ADDRESSLINE2')->nullable();
            $table->string('CITY');
            $table->string('STATE')->nullable();
            $table->string('POSTALCODE');
            $table->string('COUNTRY');
            $table->string('TERRITORY');
            $table->string('CONTACTLASTNAME');
            $table->string('CONTACTFIRSTNAME');
            $table->string('DEALSIZE');
            $table->timestamp('updated_at');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
