<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherSchoolClasses extends Model
{
    protected $table = 'teacher_school_classes';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'teacher_id',
        'school_class_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}
