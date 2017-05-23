<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoggedEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logged_events', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('application_id');
            $table->foreign('application_id')->references('id')->on('applications')->onUpdate('cascade')->onDelete('cascade');
            $table->string('severity')->nullable();
            $table->json('app')->nullable();
            $table->json('exceptions')->nullable();
            $table->json('device')->nullable();
            $table->json('breadcrumbs')->nullable();
            $table->json('metadata')->nullable();
            $table->json('context')->nullable();
            $table->json('user')->nullable();
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
        Schema::dropIfExists('logged_events');
    }
}
