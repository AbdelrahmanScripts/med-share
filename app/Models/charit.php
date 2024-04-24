<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class charit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'image',
        'admin_id',
        'description',
        'specialty_id',
        'website_link',
        'isAtive',
    ];
    public function admin() : BelongsTo
    {
        return $this->belongsTo(admin::class);
    }
    
    public function specialty() : BelongsTo
    {
        return $this->belongsTo(specialty::class);
    }

    public function donations() : HasMany
    {
        return $this->hasMany(donation::class);
    }
}
