<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageInformation extends Model
{
 	protected $fillable = [
        'id', 'mision', 'vision', 'whoarewe', 'historical_review'
    ];
}
