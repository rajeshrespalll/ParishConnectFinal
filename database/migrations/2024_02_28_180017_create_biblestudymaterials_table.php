<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('biblestudymaterials', function (Blueprint $table) {
            $table->id();
            $table->string('ResourceTitle');
            $table->string('ResourceImage');
            $table->string('ResourceLink'); // Change data type to string
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biblestudymaterials');
    }
};
