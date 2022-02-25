<?php

namespace App\Services;

use App\Models\PreparationBook;

class PreparationBookService extends ModelService
{
    const MODEL = PreparationBook::class;

    public function getForIndex($limit = 20, $columns = ['*'])
    {
        return $this->query()->latest()->paginate($limit, $columns);
    }
}
