<?php

namespace App\Services;

use App\Models\VisaAcceptance;

class VisaAcceptanceService extends ModelService
{
    const MODEL = VisaAcceptance::class;

    public function getForIndex($limit = 20, $columns = ['*'])
    {
        return $this->query()->latest()->paginate($limit, $columns);
    }
}
