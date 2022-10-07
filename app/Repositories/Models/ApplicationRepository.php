<?php

namespace App\Repositories\Models;

use App\Traits\UploadFile;
use App\Models\Application;
use App\Repositories\EloquentRepository;
use App\Contracts\Models\ApplicationInterface;

class ApplicationRepository extends EloquentRepository implements ApplicationInterface
{
    use UploadFile;

    /**
     * @var Model
     */
    protected $model;

    /**
     * Base respository constructor
     * 
     * @param Model $model
     */
    public function __construct(Application $model)
    {
        $this->model = $model;
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
        if (array_key_exists('application_icon', $payload)) {
            $payload["application_icon"] = $this->updateSingleFile('image', $payload["application_icon"], $payload['old_app_icon']);
        }

        if (array_key_exists('sidebar_icon', $payload)) {
            $payload["sidebar_icon"] = $this->updateSingleFile('image', $payload["sidebar_icon"], $payload['old_side_icon']);
        }

        return $this->findById($modelId)->update($payload);
    }
}