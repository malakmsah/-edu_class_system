<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends User
{
    protected $table = 'students';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
    ];
}
