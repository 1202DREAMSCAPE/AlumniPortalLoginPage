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
       Schema::create('alumni', function (Blueprint $table) {
           $table->increments('AlumID');
           $table->integer('SNum')->nullable(false);
           $table->string('Gender', 15)->nullable(false);
           $table->string('Password', 100)->nullable(false);
           $table->string('LName', 50)->nullable(false);
           $table->string('FName', 50)->nullable(false);
           $table->string('MName', 50)->nullable();
           $table->string('NameExt', 10)->nullable();
           $table->string('MaidenName', 50)->nullable();
           $table->string('Dept', 50)->nullable(false);
           $table->string('Course', 100)->nullable(false);
           $table->date('BDay')->nullable(false);
           $table->year('Graduated')->nullable(false);
           $table->string('POB', 50)->nullable(false);
           $table->integer('ContactNum')->nullable(false);
           $table->integer('TelNum')->nullable();
           $table->string('EmailAdd', 50)->nullable(false);
           $table->text('Linkedin')->nullable();
           $table->string('Nationality', 50)->nullable(false);
           $table->string('CivilStat', 50)->nullable(false);
           $table->string('Address', 100)->nullable(false);
           $table->string('Country', 50)->nullable(false);
           $table->string('Province', 50)->nullable();
           $table->string('Region', 10)->nullable();
           $table->string('City', 50)->nullable(false);
           $table->integer('PostalCode')->nullable(false);
           $table->text('Skills')->nullable();
           $table->unique('ContactNum');
           $table->unique('EmailAdd');
           $table->unique('SNum');
           $table->unique('TelNum');
       });
    }
    
  
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni');
    }
};
