<?php

namespace App\Services;

use App\Models\TestPreparation;

class TestPreparationService extends ModelService
{
    const MODEL = TestPreparation::class;

    public function getForIndex($limit = 20, $columns = ['*'])
    {
        return $this->query()->latest()->paginate($limit, $columns);
    }
}
