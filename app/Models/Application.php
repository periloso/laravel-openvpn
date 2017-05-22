<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'user_id',
    ];

    /**
     * Retrieves the ApiKeys belonging to this application.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function apiKeys()
    {
        return $this->hasMany(ApiKey::class);
    }

    /**
     * Retrieves the events of this application.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function loggedEvents()
    {
        return $this->hasMany(LoggedEvent::class);
    }

    /**
     * Retrieves the owner of this application.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
