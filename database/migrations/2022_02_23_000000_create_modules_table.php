<?php

use App\Modules;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create("modules", function (Blueprint $table) {
            $table->bigIncrements(Modules::ID)->autoIncrement();
            $table->string(Modules::NAME);
            $table->integer(Modules::PRICE);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists("modules");
    }
}
