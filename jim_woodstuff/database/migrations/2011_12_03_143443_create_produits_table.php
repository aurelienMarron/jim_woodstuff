<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->text('description')->nullable();
            $table->float('prix');
            $table->boolean('dispo')->nullable();
            $table->string('image',200)->nullable();
            $table->Biginteger('categorie_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('categorie_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
