<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\EloquentRepository;
use Spatie\TranslationLoader\LanguageLine;
use App\Contracts\Models\LanguageInterface;

class LanguageRepository extends EloquentRepository implements LanguageInterface
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
    public function __construct(LanguageLine $model)
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
        $payload['text'] = [
            'id' => $payload['lang_id'],
            'en' => $payload['lang_en']
        ];

        unset($payload['lang_id']);
        unset($payload['lang_en']);

        $model = $this->model->create($payload);

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
        $payload['text'] = [
            'id' => $payload['lang_id'],
            'en' => $payload['lang_en']
        ];

        unset($payload['lang_id']);
        unset($payload['lang_en']);
        
        $model = $this->findById($modelId);

        return $model->update($payload);
    }
}