<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = 'grades';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'a' ,
    ];
}
