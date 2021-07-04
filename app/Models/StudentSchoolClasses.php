<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentSchoolClasses extends Model
{
    protected $table = 'student_school_classes';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'student_id',
        'teacher_id',
        'school_class_id',
        'first_term_grade',
        'mid_term_grade',
        'first_term_grade',
    ];
}
