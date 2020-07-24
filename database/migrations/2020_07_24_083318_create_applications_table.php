<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('country');
            $table->string('phone');
            $table->string('company');
            $table->string('year_established');
            $table->string('company_phone');
            $table->string('company_email');
            $table->string('physical_address');
            $table->string('form_of_business');
            $table->string('home_office')->nullable();
            $table->text('corporate_partners')->nullable();
            $table->unsignedInteger('employee_number');
            $table->decimal('annual_revenue');
            $table->string('ownership_proportion');
            $table->unsignedInteger('farmers_number');
            $table->string('products_produced');
            $table->text('major_markets');
            $table->text('potential_markets');
            $table->string('installed_capacity');
            $table->text('financing')->nullable();
            $table->text('production_goal');
            $table->text('technology');
            $table->text('ngo_partnerships');
            $table->text('challenges');
            $table->text('interests');
            $table->text('needs');
            $table->text('success');
            $table->string('owners')->nullable();
            $table->string('premises')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('applications');
    }
}
