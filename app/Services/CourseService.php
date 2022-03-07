<?php

namespace App\Services;

use App\Models\Course;

class CourseService extends ModelService
{

    const MODEL = Course::class;

    public function getForIndex($limit = 20, $columns = ['*'])
    {
        return $this->query()->latest()->paginate($limit, $columns);
    }
}
