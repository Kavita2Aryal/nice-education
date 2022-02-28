<?php

namespace App\Services;

use App\Models\Enquiry;

class EnquiryService extends ModelService
{
    const MODEL = Enquiry::class;

    public function getForIndex($limit = 20, $columns = ['*'])
    {
        return $this->query()->latest()->paginate($limit, $columns);
    }

}
