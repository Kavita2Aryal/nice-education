<?php

namespace App\Services;

use App\Models\TestExam;

class TestExamService extends ModelService
{
    const MODEL = TestExam::class;

    public function getForIndex($limit = 20, $columns = ['*'])
    {
        return $this->query()->latest()->paginate($limit, $columns);
    }

}
