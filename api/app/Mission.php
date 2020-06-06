<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
  protected $table = 'mission';

  public function convoyeur() {
    return $this->belongsTo('App\Client');
  }

  public function trajet() {
    return $this->hasOne('App\Trajet');
  }
}
