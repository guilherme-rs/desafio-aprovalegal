<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doc_id');
            $table->foreign('doc_id')
                ->references('id')
                ->on('documents');

            $table->foreignId('initial_employee');
            $table->foreign('initial_employee')
                ->references('id')
                ->on('employees');

            $table->foreignId('initial_sector');
            $table->foreign('initial_sector')
                ->references('id')
                ->on('sectors');

                $table->foreignId('final_employee');
                $table->foreign('final_employee')
                    ->references('id')
                    ->on('employees');

            $table->foreignId('final_sector');
            $table->foreign('final_sector')
                ->references('id')
                ->on('sectors');

            $table->string('obs', 100)->nullable();
            $table->boolean('is_finished')->nullable()->default(false);

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
        Schema::dropIfExists('flows');
    }
}
