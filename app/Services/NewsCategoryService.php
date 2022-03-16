<?php

namespace App\Services;

use App\Models\NewsCategory;

class NewsCategoryService extends ModelService
{
    const MODEL = NewsCategory::class;

    public function getForIndex($limit = 20, $columns = ['*'])
    {
        return $this->query()->latest()->paginate($limit, $columns);
    }

}
