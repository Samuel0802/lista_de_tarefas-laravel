<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('tarefas_sistemas', function (Blueprint $table) {
            $table->id();
            $table->string('tarefas');
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('tarefas_sistemas');
    }
};
