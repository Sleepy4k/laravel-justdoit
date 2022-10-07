<?php

namespace App\Repositories\Models;

use App\Models\Task;
use App\Repositories\EloquentRepository;
use App\Contracts\Models\TaskInterface;

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