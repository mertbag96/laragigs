<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Listing extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'tags',
        'company',
        'location',
        'email',
        'website',
        'logo',
        'description',
    ];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') .'%');
        }
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') .'%')
            ->orWhere('tags', 'like', '%' . request('search') .'%')
            ->orWhere('company', 'like', '%' . request('search') .'%')
            ->orWhere('location', 'like', '%' . request('search') .'%')
            ->orWhere('email', 'like', '%' . request('search') .'%')
            ->orWhere('website', 'like', '%' . request('search') .'%')
            ->orWhere('description', 'like', '%' . request('search') .'%');
        }
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
