<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'description', 'tech_stack', 'image',
        'demo_url', 'github_url', 'features', 'category',
        'featured', 'order', 'is_active'
    ];

    protected $casts = [
        'tech_stack' => 'array',
        'features' => 'array',
        'featured' => 'boolean',
        'is_active' => 'boolean'
    ];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title);
            }
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }
}