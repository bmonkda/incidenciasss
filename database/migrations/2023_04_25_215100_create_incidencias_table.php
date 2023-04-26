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
        Schema::create('incidencias', function (Blueprint $table) {
            $table->id();


            $table->string('titulo');
            $table->string('slug');

            $table->longText('descripcion');

            // $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade')->nullable();
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade')->nullable();
            
            $table->foreignId('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
            
            $table->foreignId('emergency_id')->references('id')->on('emergencies')->onDelete('cascade');

            $table->foreignId('estatu_id')->default(1)->references('id')->on('estatus')->onDelete('cascade');

            $table->bigInteger('user_id')->nullable();

            $table->foreignId('asignado_id')->nullable()/* ->references('idusuario')->on('users') */;
            $table->foreignId('asigna_id')->nullable()/*->references('id')->on('users')*/;


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
        Schema::dropIfExists('incidencias');
    }
};
