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
            $table->string(Forms::EMAIL);  
            $table->string(Forms::SUBJECT);
            $table->string(Forms::CONTENT);      
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
