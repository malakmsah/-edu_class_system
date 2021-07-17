<?php

namespace App\Repositories;

use App\Models\Student;

class StudentRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new Student();
    }
}
