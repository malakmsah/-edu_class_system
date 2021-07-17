<?php


namespace App\Repositories;


use App\Models\SchoolClass;
use Illuminate\Database\Eloquent\Model;

class SchoolClassRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new SchoolClass();
    }
}

