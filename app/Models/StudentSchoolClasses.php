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
        'final_term_grade',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schoolClasses()
    {
        return $this->hasMany(SchoolClass::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
