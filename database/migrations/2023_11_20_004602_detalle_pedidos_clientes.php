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
        Schema::create('detalle_pedidos_clientes', function (Blueprint $table) {
            $table->id();
            $table->integer('idpedido');
            $table->integer('idproducto');
            $table->integer('cantidad');
            $table->double('precio_unitario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_pedidos_clientes');

    }
};
