<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    use LogsActivity, HasRoles;

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
    protected $table = 'users';

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
    protected $fillable = [
        'username',
        'surename',
        'language',
        'logo',
        'password'
    ];

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
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    /**
     * The attributes that aren't mass assignable to determine if this is a date.
     *
     * @var array
     */
    protected $dates = [
        'deleted_at'
    ];
    
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

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
    protected static $logName = 'Users';

    /**
     * The spatie log that override default created, updated, deleted description of the activity.
     *
     * @var string
     */
    public function getDescriptionForEvent(string $eventName): string
    {
        return "model Users successfully {$eventName}";
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
        'username',
        'logo',
        'email',
        'whatsapp_number',
        'company'
    ];

    /**
     * The jwt get identifier.
     *
     * @var array
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    
    /**
     * The jwt custom claims.
     *
     * @var array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}