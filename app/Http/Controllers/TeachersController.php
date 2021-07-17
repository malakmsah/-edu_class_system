<?php

namespace App\Http\Controllers;

use App\Services\TeacherService;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    protected $teacherService;

    public function index()
    {
        $all = $this->getTeacherService()->all();
        var_dump($all);
        return $all;
    }

    protected function getTeacherService()
    {
        if (empty($this->teacherService)) {
            $this->teacherService = new TeacherService();
        }
        return $this->teacherService;
    }
}
