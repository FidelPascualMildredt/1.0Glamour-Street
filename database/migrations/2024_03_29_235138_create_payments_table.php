<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
        });
        DB::table('payments')->insert([
            ['name' => 'PayPal', 'description' => 'Pago a través de PayPal'],
            ['name' => 'Tarjeta de crédito', 'description' => 'Pago con tarjeta de crédito'],
            ['name' => 'Tarjeta de débito', 'description' => 'Pago con tarjeta de débito'],
            // Agrega más métodos de pago según sea necesario
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
