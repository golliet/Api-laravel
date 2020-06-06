<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
  protected $table = 'trajet';

  public function client() {
    return $this->belongsTo('App\Client');
  }

  public function mission() {
    return $this->belongsTo('App\Mission');
  }

  // https://github.com/staudenmeir/belongs-to-through

  public function convoyeur() {
    return $this->BelongsToThrough('App\Convoyeur', 'App\Mission');
  }
}
