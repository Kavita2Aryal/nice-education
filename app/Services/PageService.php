<?php

namespace App\Services;

use App\Models\Page;

class PageService extends ModelService
{
    const MODEL = Page::class;

    public function getForIndex($limit = 20, $columns = ['*'])
    {
        return $this->query()->latest()->paginate($limit, $columns);
    }
}
