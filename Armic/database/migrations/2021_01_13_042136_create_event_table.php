<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->String('name');
            $table->String('phone_number');
            $table->String('event_name');
            $table->Date('event_day');
            $table->String('event_venue');
            $table->String('event_image');
            $table->String('event_introduction');
            $table->Integer('event_fee');
            $table->String('ticket_where');
            $table->String('event_contact');
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
        Schema::dropIfExists('event');
    }
}
