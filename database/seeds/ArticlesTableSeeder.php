<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
  /**
  * Run the Article db seeds, sending 50 as the number of articles that the factory should create
  *
  * @return void
  */
  public function run()
  {
    factory(\App\Article::class, 50)->create();
  }
}
