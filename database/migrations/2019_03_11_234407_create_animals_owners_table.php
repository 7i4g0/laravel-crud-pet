<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('animals_owners', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->integer('animal_id');
        //     $table->integer('owner_id');

        //     // $table->foreign('animal_id')
        //     //         ->references('id')->on('animals')
        //     //         ->onDelete('cascade');

        //     // $table->foreign('owner_id')
        //     //         ->references('id')->on('owners')
        //     //         ->onDelete('cascade');

            
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('animals_owners', function (Blueprint $table) {
        //     $table->dropForeign('animals_owners_animal_id_foreign');
        //     $table->dropForeign('animals_owners_owner_id_foreign');
        // });
        Schema::dropIfExists('animals_owners');
    }
}
