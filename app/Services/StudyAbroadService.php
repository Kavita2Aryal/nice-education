<?php

namespace App\Services;

use App\Models\StudyAbroad;

class StudyAbroadService extends ModelService
{

    const MODEL = StudyAbroad::class;

    public function getForIndex($limit = 20, $columns = ['*'])
    {
        return $this->query()->latest()->paginate($limit, $columns);
    }
}
