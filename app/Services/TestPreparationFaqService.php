<?php

namespace App\Services;


use App\Models\TestPreparationFaq;

class TestPreparationFaqService extends ModelService
{
    const MODEL = TestPreparationFaq::class;

    public function getForIndex($limit = 20, $columns = ['*'])
    {
        return $this->query()->latest()->paginate($limit, $columns);
    }
}
