<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
  * Seed the application's database first in order to create (20) stores with random data and then seeds the articles with (50) different articles.
  *
  * @return void
  */
  public function run()
  {
    $this->call([
      StoresTableSeeder::class,
      ArticlesTableSeeder::class,
    ]);
  }
}
