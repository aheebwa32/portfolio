<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'category', 'proficiency', 'icon', 'color', 'order'
    ];

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }
}