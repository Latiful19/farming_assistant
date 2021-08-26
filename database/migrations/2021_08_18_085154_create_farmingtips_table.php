<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmingtipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmingtips', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('Phone');
            $table->string('address');
            $table->timestamps();
        });
        return redirect()->route('farmingtips.farmingtip');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farmingtips');
    }
}
