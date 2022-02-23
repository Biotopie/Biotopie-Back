<?php

use App\Estimates;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstimatesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create("estimates", function (Blueprint $table) {
            $table->bigIncrements(Estimates::ID)->autoIncrement();
            $table->string(Estimates::EMAIL);
            $table->dateTime(Estimates::DATE);
            $table->string(Estimates::NAMESOCIETY);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists("estimates");
    }
}
