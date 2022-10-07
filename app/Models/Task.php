<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Task extends Model
{
    use LogsActivity;

    /**
     * The table associated with created data.
     *
     * @var string
     */
    const CREATED_AT = 'created_at';

    /**
     * The table associated with updated data.
     *
     * @var string
     */
    const UPDATED_AT = 'updated_at';

    /**
     * The database connection that should be used by the model.
     *
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tasks';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];
    
    /**
     * The attributes that aren't mass assignable to determine if this is a date.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];

    /**
     * The spatie log that setting log option.
     *
     * @var bool
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
                            ->logOnly(['tiket_number', 'time', 'amount', 'status', 'price', 'package_id', 'user_id'])
                            ->logOnlyDirty()
                            ->useLogName('Task')
                            ->setDescriptionForEvent(fn(string $eventName) => "model Task successfully {$eventName}")
                            ->dontSubmitEmptyLogs();
    }
}