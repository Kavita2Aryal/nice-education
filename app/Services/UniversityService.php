<?php

namespace App\Services;

use App\Models\University;

class UniversityService extends ModelService
{

    const MODEL = University::class;

    public function getForIndex($limit = 20, $columns = ['*'])
    {
        return $this->query()->latest()->paginate($limit, $columns);
    }
}
