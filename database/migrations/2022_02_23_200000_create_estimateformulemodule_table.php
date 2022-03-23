<?php

use App\EstimateFormuleModule;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstimateformulemoduleTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create("estimateformulemodule", function (Blueprint $table) {
            $table->bigIncrements(EstimateFormuleModule::ID)->autoIncrement();
            $table->unsignedBigInteger(EstimateFormuleModule::ID_ESTIMATE);
            $table->unsignedBigInteger(EstimateFormuleModule::ID_FORMULE);
            $table->unsignedBigInteger(EstimateFormuleModule::ID_MODULE);

            $table->foreign(EstimateFormuleModule::ID_ESTIMATE)->references(\App\Estimates::ID)->on('estimates')->onDelete('cascade');
            $table->foreign(EstimateFormuleModule::ID_FORMULE)->references(\App\Formules::ID)->on('formules')->onDelete('cascade');
            $table->foreign(EstimateFormuleModule::ID_MODULE)->references(\App\Modules::ID)->on('modules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists("estimateformulemodule");
    }
}
