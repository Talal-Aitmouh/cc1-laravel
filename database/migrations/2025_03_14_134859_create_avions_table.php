<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvionsTable extends Migration
{
    public function up(): void
    {
        Schema::create('avions', function (Blueprint $table) {
            $table->string('CodeAv', 4)->primary();
            $table->string('ModèleAv', 50);
            $table->integer('CapacitéAv')->unsigned()->default(50);
            $table->timestamps();
        });
    }
    

    public function down()
    {
        Schema::dropIfExists('avions');
    }
}
