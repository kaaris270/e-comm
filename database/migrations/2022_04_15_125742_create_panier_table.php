<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->
            $table->string("description");
            $table->string("prix");
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}