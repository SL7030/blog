<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use UConverter;

class post extends Model
{
    use HasFactory;

    protected function casts():array
    {
        return[
            'published_at' => 'datetime',
            'is_active' => 'boolean',
            'prueba' => 'integer',
        ];
    }

    /* protected $table = 'posts'; */

    protected function title(): Attribute
    {
        return Attribute::make(
            //mutador: Limitar como se va a guardar la informacion a la base de datos
            set: function($value){
                return strtolower($value);
            },
            //accessor: es para como se va a mostrar la información contenida en la base de datos
            get: function($value){
                return ucfirst($value);
            }

        );
    }

}
