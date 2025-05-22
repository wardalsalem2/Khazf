<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('location');
            $table->decimal('price', 8, 2);
            $table->string('duration');
            $table->enum('categories', ['Traditional Ceramics ', 'Handicraft Market', 'Pottery Workshop', 'Cultural Tour', 'Art Exhibitions']);
            $table->enum('status', ['active', 'deactive']);
            $table->date('date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('experiences');
    }
}
