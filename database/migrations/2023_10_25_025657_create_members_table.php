<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id()->comment('編號(主鍵)');
            $table->string("name")->comment('人員名稱');
            $table->integer("oid")->unsiged()->comment('團體(外部鍵)');
            $table->string("position")->comment('位置');
            $table->double("height")->unsiged()->nullable()->comment('身高');
            $table->double("weight")->unsiged()->nullable()->comment('體重');
            $table->integer("year")->unsiged()->nullable()->comment('年資');
            $table->integer("age")->unsiged()->comment('年齡');
            $table->string("nationality")->comment('國籍');
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
        Schema::dropIfExists('members');
    }
};
