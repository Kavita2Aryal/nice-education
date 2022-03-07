<?php

namespace App\Services;

use App\Models\Team;

class TeamService extends ModelService
{
    const MODEL = Team::class;

    public function getForIndex($limit = 20, $columns = ['*'])
    {
        return $this->query()->latest()->paginate($limit, $columns);
    }
}
