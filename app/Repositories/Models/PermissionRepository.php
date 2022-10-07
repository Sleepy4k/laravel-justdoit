<?php

namespace App\Repositories\Models;

use Spatie\Permission\Models\Permission;
use App\Repositories\EloquentRepository;
use App\Contracts\Models\PermissionInterface;

class PermissionRepository extends EloquentRepository implements PermissionInterface
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
    public function __construct(Permission $model)
    {
        $this->model = $model;
    }
}