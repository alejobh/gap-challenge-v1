<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
  protected $table = 'stores';
  protected $fillable = ['name'];

  //SPECIFIED IN DOCS THAT NOT RETURN THE TIMESTAMPS
  protected $hidden = ['created_at', 'updated_at'];

  /*
  * this function returns an Elloquent collection of App\Articles that the store owns itself (relationship)
  * @return Collection
  */
  public function getArticles() {
    return $this->hasMany('App\Article');
  }
}
