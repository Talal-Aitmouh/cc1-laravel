<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolsTable extends Migration
{
    public function up(): void
    {
        Schema::create('vols', function (Blueprint $table) {
            $table->id('NumVol');
            $table->string('CodeAv', 4);
            $table->string('MatPil', 8);
            $table->date('DateVol');
            $table->string('VilleDép', 50);
            $table->string('VilleArr', 50);
            $table->integer('NbrePass')->default(40);
            $table->boolean('VolRéalisé')->default(false);
            $table->timestamps();
    
            $table->foreign('CodeAv')->references('CodeAv')->on('avions')->onDelete('cascade');
            $table->foreign('MatPil')->references('MatPil')->on('pilotes')->onDelete('cascade');
        });
    }
    

    public function down()
    {
        Schema::dropIfExists('vols');
    }
}
