<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('application_name')->default('Eternak');
            $table->string('application_icon')->default('null');
            $table->string('application_author')->default('Puskomedia');
            $table->string('application_keywords')->default('dadidu, eternak, puskomedia');
            $table->text('application_description')->nullable();
            $table->string('sidebar_name')->default('Puskomedia');
            $table->string('sidebar_icon')->default('null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
