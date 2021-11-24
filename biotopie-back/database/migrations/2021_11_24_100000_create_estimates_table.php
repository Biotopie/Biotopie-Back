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
            $table->increments(Estimates::ID);
            $table->string(Estimates::EMAIL);
            $table->string(Estimates::FORMULA);
            $table->string(Estimates::MODULES);
            $table->dateTime(Estimates::DATE);
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
