<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Category extends Model
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
    protected $table = 'categories';

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
     * The spatie log that has actually changed after the update.
     *
     * @var bool
     */
    protected static $logOnlyDirty = true;

    /**
     * The spatie log that setting to false prevents the package from storing empty logs.
     *
     * @var bool
     */
    protected static $submitEmptyLogs = false;

    /**
     * The spatie log that make the model use another name than the default.
     *
     * @var string
     */
    protected static $logName = 'Categories';

    /**
     * The spatie log that override default created, updated, deleted description of the activity.
     *
     * @var string
     */
    public function getDescriptionForEvent(string $eventName): string
    {
        return "model Categories successfully {$eventName}";
    }

    /**
     * The spatie log that log listed event.
     *
     * @var array
     */
    protected static $recordEvents = [
        'created',
        'updated',
        'deleted'
    ];
    
    /**
     * The spatie log that need to be logged can be defined either by their name.
     *
     * @var array
     */
    protected static $logAttributes = [
        'id',
        'name',
        'label',
        'permission'
    ];
    
    /**
     * The menus relationship.
     *
     * @var array
     */
    public function menus()
    {
        return $this->hasMany(Menu::class, 'id', 'company');
    }
}