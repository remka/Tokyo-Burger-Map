<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{

    public $fillable = [
      'title_en',
      'title_ja',
      'description',
      'latitude',
      'longitude',
      'address_1',
      'address_2',
      'address_3',
      'municipality',
      'prefecture',
      'postcode',
      'country',
      'has_nonsmoking',
      'has_vegetarian'
    ];

}
