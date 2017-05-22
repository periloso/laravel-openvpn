<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoggedEvent extends Model
{
    protected $fillable = [
        'application_id', 'release_stage', 'severity', 'device', 'exceptions', 'breadcrumbs', 'metadata', 'context',
        'user',
    ];

    protected $casts = [
        'device' => 'array',
        'exceptions' => 'array',
        'breadcrumbs' => 'array',
        'metadata' => 'array',
        'context' => 'array',
        'user' => 'array',
    ];

    /**
     * Retrieves the application this event belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
