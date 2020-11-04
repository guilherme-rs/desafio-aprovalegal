<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanySectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_sector', function (Blueprint $table) {
            $table->id();

            $table->foreignId('company_id');

            $table->foreign('company_id')
                ->references('id')
                ->on('companies');

            $table->foreignId('sector_id');

            $table->foreign('sector_id')
                ->references('id')
                ->on('sectors');

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
        Schema::dropIfExists('company_sector');
    }
}
