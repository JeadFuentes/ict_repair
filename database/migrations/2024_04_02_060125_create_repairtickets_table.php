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
        Schema::create('repairtickets', function (Blueprint $table) {
            $table->id();
            $table->string('emailaddress');
            $table->string('division');
            $table->string('unitsection');
            $table->string('name');
            $table->string('designation');
            $table->string('typeofrequest');
            $table->string('description');
            $table->string('status')->nullable();
            $table->foreignID('user_id')->contrained('users')->nullable();
            $table->string('addtlstatus');
            $table->string('itemtype')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repairtickets');
    }
};
