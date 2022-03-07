<?php

namespace App\Services;

use App\Models\DocumentRequired;

class DocumentRequiredService extends ModelService
{
    const MODEL = DocumentRequired::class;

    public function getForIndex($limit = 20, $columns = ['*'])
    {
        return $this->query()->latest()->paginate($limit, $columns);
    }
}
