<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->enum('status', ['new-enquiry', 'quote-given', 'current-job', 'awaiting-invoice', 'invoice-sent', 'invoice-paid'])->default('new-enquiry');
            $table->string('purchase_order_number')->nullable();
            $table->integer('price')->nullable()->default(0);
            $table->integer('payment_terms_value')->nullable()->default(30);
            $table->enum('payment_terms_denomination', ['days', 'months'])->default('days');
            $table->string('site_address_line_1')->nullable();
            $table->string('site_address_line_2')->nullable();
            $table->string('site_address_town')->nullable();
            $table->string('site_address_city')->nullable();
            $table->string('site_address_postcode')->nullable();
            $table->text('description')->nullable();
            $table->string('surface_type')->nullable();
            $table->string('material')->nullable();
            $table->string('site_contact_name')->nullable();
            $table->string('site_contact_number')->nullable();
            $table->integer('archived')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('jobs');
    }
}
