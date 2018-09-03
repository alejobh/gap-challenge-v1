<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  protected $table = 'articles';
  protected $fillable = ['name', 'description', 'price', 'total_in_shelf', 'total_in_vault', 'store_id'];

  /*
  * this function returns a single App\Store that the Article belongs (relationship)
  * @return App\Store
  */
  public function getStore() {
    return $this->belongsTo('App\Store', 'store_id', 'id');
  }
}
