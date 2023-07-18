<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->date('date_purchase')->nullable();
            $table->bigInteger('purchase_number')->nullable();
            $table->foreignId('customer_id')->nullable()->OnDelete()->constraint();
            $table->boolean('status_received')->nullable();
            $table->bigInteger('discount')->nullable();
            $table->integer('tax')->nullable();
            $table->bigInteger('paiment')->nullable();
            $table->text('description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('migration_purchases');
    }
};
