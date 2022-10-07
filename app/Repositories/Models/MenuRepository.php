<?php

namespace App\Repositories\Models;

use App\Models\Menu;
use App\Repositories\EloquentRepository;
use App\Contracts\Models\MenuInterface;

class MenuRepository extends EloquentRepository implements MenuInterface
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
    public function __construct(Menu $model)
    {
        $this->model = $model;
    }
}