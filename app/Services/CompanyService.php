<?php

namespace App\Services;

use App\Models\Company;

class CompanyService extends ModelService
{
    const MODEL = Company::class;

    public function getForIndex($limit = 20, $columns = ['*'])
    {
        return $this->query()->latest()->paginate($limit, $columns);
    }

}
