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
        Schema::create('funkopops', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("tipo");
            $table->integer("precio");
            $table->integer("item_number");
            $table->integer("categoria_id");
            $table->integer("license_id");
            $table->string("box_number");
            $table->text("imagen");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funkopops');
    }
};
