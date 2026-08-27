<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use UConverter;

class post extends Model
{
    use HasFactory;

    /* protected $table = 'posts'; */

    protected function title(): Attribute
    {
        return Attribute::make(
            //mutador
            set: function($value){
                return strtolower($value);
            },
            //accessor
            get: function($value){
                return ucfirst($value);
            }

        );
    }

}
