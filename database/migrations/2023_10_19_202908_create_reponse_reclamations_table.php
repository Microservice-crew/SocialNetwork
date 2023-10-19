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
    Schema::create('reponse_reclamations', function (Blueprint $table) {
        $table->id();
        $table->string('reclamation_id');
        $table->text('content');
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
        Schema::dropIfExists('reponse_reclamations');
    }
};
