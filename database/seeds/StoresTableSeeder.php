<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
  /**
  * Run the Store db seeds, sending 20 as the number of articles that the factory should create
  *
  * @return void
  */
  public function run()
  {
    factory(\App\Store::class, 20)->create();
  }
}
