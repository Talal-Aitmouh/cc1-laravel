<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePilotesTable extends Migration
{
    public function up(): void
{
    Schema::create('pilotes', function (Blueprint $table) {
        $table->string('MatPil', 8)->primary();
        $table->string('NomPrénomPil', 50);
        $table->string('AdressePil', 150);
        $table->string('TelPil', 8);
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('pilotes');
    }
}

