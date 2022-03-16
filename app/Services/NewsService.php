<?php

namespace App\Services;

use App\Models\News;

class NewsService extends ModelService
{

    const MODEL = News::class;

    public function getForIndex($limit = 20, $columns = ['*'])
    {
        return $this->query()->latest()->paginate($limit, $columns);
    }
}
