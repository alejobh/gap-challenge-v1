<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('articles', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->text('description');
      /*
      * The accepted datatype for money, according to GAAP (Generally Accepted Accounting Principles) is Decimal (9, 4)....
      * if you need bigger numbers then Decimal (13, 4).
      */
      $table->decimal('price', 13, 2);
      $table->integer('total_in_shelf');
      $table->integer('total_in_vault');

      /* Relation between store and article */
      $table->integer('store_id')->unsigned();
      $table->foreign('store_id')->references('id')->on('stores');

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
    Schema::dropIfExists('articles');
  }
}
