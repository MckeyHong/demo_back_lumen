<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 20)->comment('帳號');
            $table->string('password', 60)->comment('密碼');
            $table->string('name', 30)->comment('名字');
            $table->string('email', 64)->comment('電子信箱');
            $table->string('phone', 20)->comment('電話');
            $table->string('country', 30)->comment('國籍');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE customer COMMENT '客戶資料'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customer');
    }
}
