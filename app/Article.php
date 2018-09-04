<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
  use SoftDeletes;
  
  protected $table = 'articles';
  protected $fillable = ['name', 'description', 'price', 'total_in_shelf', 'total_in_vault'];

  //SPECIFIED IN DOCS THAT NOT RETURN THE TIMESTAMPS AND THE store_id
  protected $hidden = ['created_at', 'updated_at', 'store_id'];

  /*
  * this function returns just the name of the store that the Article belongs
  * @return App\Store
  */
  public function store_name() {
    return $this->belongsTo('App\Store', 'store_id', 'id');
  }

  /*
  * this function returns a single App\Store that the Article belongs (relationship)
  * @return App\Store
  */
  public function getStore() {
    return $this->belongsTo('App\Store', 'store_id', 'id');
  }
}
