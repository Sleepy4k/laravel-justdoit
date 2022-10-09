<?php

namespace App\Repositories\Models;

use App\Models\Task;
use App\Contracts\Models\TaskInterface;
use App\Repositories\EloquentRepository;

class TaskRepository extends EloquentRepository implements TaskInterface
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
    public function __construct(Task $model)
    {
        $this->model = $model;
    }
}