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
        Schema::create('job_postings', function (Blueprint $table) {
            $table->id('JobID');
            $table->string('JTitle', 50);
            $table->string('JLocation', 50);
            $table->float('Salary', 20);
            $table->string('EmailAdd', 50);
            $table->string('Address', 50);
            $table->string('CPerson', 50);
            $table->string('EmpType', 20);
            $table->string('CIndustry', 50);
            $table->string('CName', 50);
            $table->text('JDesc');
            $table->integer('CNumCompany');
            $table->timestamps();
        });
    }
   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_postings');
    }
};
