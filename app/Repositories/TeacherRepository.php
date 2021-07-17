<?php

namespace App\Repositories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;

class TeacherRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new Teacher();
    }
}
