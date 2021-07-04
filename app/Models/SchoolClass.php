<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    protected $table = 'school_classes';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'name',
        'description'
    ];
}
