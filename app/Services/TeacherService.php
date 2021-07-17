<?php


namespace App\Services;

use App\Repositories\TeacherRepository;

class TeacherService
{

    public function all()
    {
        return $this->getRepository()->all();
    }

    /**
     * @return TeacherRepository
     */
    protected function getRepository(): TeacherRepository
    {
        return new TeacherRepository();
    }
}
