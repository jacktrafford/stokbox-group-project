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
        Schema::create('company_product_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id')->primary();
            $table->foreign('company_id')->references('id')->on('companies');
            
            $table->unsignedBigInteger('product_category_id')->index();
            $table->foreign('product_category_id')->references('id')->on('product_categories');
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
        Schema::dropIfExists('company_product_categories');
    }
};
