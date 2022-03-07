<?php

namespace App\Services;

use App\Models\HowItWork;

class HowItWorkService extends ModelService
{
    const MODEL = HowItWork::class;

    public function getForIndex($limit = 20, $columns = ['*'])
    {
        return $this->query()->latest()->paginate($limit, $columns);
    }
}
