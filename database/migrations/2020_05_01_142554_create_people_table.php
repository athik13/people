<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{

    const TABLE_NAME = 'people';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(static::TABLE_NAME, function (Blueprint $table) {
            $table->uuid('people_id');

            $table->string('atoll')->nullable();
            $table->string('island')->nullable();
            $table->string('district')->nullable();
            $table->string('house')->nullable();
            $table->string('nid')->nullable();
            $table->string('name')->nullable();
            $table->string('dob')->nullable();

            $table->primary('people_id');

            $table->timestamps();
            // $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(static::TABLE_NAME);
    }
}
