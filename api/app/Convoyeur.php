<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Convoyeur extends Model
{
  protected $table = 'convoyeur';

  public function missions() {
    return $this->hasMany('App\Mission');
  }
}
