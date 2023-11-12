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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('sub_heading_1');
            $table->mediumText('sub_heading_1_body');
            $table->string('sub_heading_2');
            $table->mediumText('sub_heading_2_body');
            $table->string('sub_heading_3');
            $table->mediumText('sub_heading_3_body');
            $table->string('sub_heading_4');
            $table->mediumText('sub_heading_4_body');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
