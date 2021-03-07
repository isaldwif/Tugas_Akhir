<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->integer('SAC')->nullable();
            $table->integer('SIC')->nullable();

            $table->string('alamat')->nullable();
            $table->string('penempatan')->nullable();

            $table->decimal('latitude', $precision = 11, $scale = 7)->nullable();
            $table->decimal('longtitude', $precision = 11, $scale = 7)->nullable();

            $table->decimal('power_consume', $precision = 10, $scale = 1)->nullable();
            $table->decimal('power_output', $precision = 10, $scale = 1)->nullable();
            $table->integer('coverage')->nullable();

            $table->integer('tahun_install')->nullable();
            $table->integer('tahun_comm')->nullable();

            $table->string('merk')->nullable();
            $table->string('negara')->nullable();
            $table->string('type')->nullable();

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
        Schema::dropIfExists('profiles');
    }
}
