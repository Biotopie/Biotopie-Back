<?php

use App\Forms;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create("forms", function (Blueprint $table) {
            $table->increments(Forms::ID);
            $table->string(Forms::NAME_SOCIETY);
            $table->string(Forms::HEADQUARTER);
            $table->string(Forms::REPRESENTING);
            $table->integer(Forms::PHONE_NUMBER);
            $table->string(Forms::EMAIL);
            $table->dateTime(Forms::DATE);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists("forms");
    }
}
