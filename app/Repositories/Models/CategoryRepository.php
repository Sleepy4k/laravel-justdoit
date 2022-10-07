<?php

namespace App\Repositories\Models;

use App\Models\Category;
use App\Repositories\EloquentRepository;
use App\Contracts\Models\CategoryInterface;

class CategoryRepository extends EloquentRepository implements CategoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * Base respository constructor
     * 
     * @param Model $model
     */
    public function __construct(Category $model)
    {
        $this->model = $model;
    }
}