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
        Schema::create('datos', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo_barras');
            $table->string('nombre');
            $table->double('precio');
            $table->string('descripcion');
            $table->integer('cantidad');
            $table->timestamps();
        });
    }
    public function list()
    {
        $Comp= Compras::all();
        
        return view('Datos/list', compact('dat'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos');
    }
};
