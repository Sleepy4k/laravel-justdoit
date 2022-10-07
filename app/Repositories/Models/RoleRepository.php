<?php

namespace App\Repositories\Models;

use Spatie\Permission\Models\Role;
use App\Contracts\Models\RoleInterface;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\EloquentRepository;

class RoleRepository extends EloquentRepository implements RoleInterface
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
    public function __construct(Role $model)
    {
        $this->model = $model;
    }
    
    /**
     * Create a model.
     *
     * @param array $payload
     * @return Model
     */
    public function create(array $payload): ?Model
    {
        $model = $this->model->create($payload);

        if (array_key_exists('permission', $payload)) {
            $model->syncPermissions($payload['permission']);
        }

        return $model->fresh();
    }
    
    /**
     * Update existing model.
     *
     * @param int $modelId
     * @param array $payload
     * @return Model
     */
    public function update(int $modelId, array $payload): bool
    {
        $model = $this->findById($modelId);

        if (array_key_exists('permission', $payload)) {
            $model->syncPermissions($payload['permission']);
        }

        return $model->update($payload);
    }
}