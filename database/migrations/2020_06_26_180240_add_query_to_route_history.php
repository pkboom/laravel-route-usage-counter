<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddQueryToRouteHistory extends Migration
{
    public function up()
    {
        Schema::table('route_history', function (Blueprint $table) {
            $table->string('query')->nullable();
        });
    }
}