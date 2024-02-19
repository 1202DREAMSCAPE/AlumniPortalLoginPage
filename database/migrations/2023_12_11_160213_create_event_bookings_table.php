<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
       Schema::create('event_bookings', function (Blueprint $table) {
           $table->id('EBookID');
           $table->string('EventName', 50);
           $table->string('Fullname', 50);
           $table->integer('SNum');
           $table->string('EmailAdd', 50);
           $table->integer('ContactNum');
           $table->year('Graduated');
           $table->string('Office', 15);
           $table->string('ELoc', 50);
           $table->date('EDate');
           $table->string('EDesc');
           $table->string('Type');
           $table->time('TimeStart');
           $table->time('TimeEnd');
           $table->string('Description', 100);
       });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_bookings');
    }
};