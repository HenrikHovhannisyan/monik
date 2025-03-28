<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('promocode_id')->nullable()->constrained('promocodes')->onDelete('set null');
            $table->string('shipping_address');
            $table->string('order_notes')->nullable();
            $table->string('payment_option');
            $table->string('shipping_option');
            $table->decimal('shipping_cost', 10, 2);
            $table->decimal('cart_price', 10, 2);
            $table->decimal('total_price', 10, 2);
            $table->string('status')->default('processing');
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
        Schema::dropIfExists('checkouts');
    }
}

