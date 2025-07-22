<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',        // ✅ baru
        'file_path',
        'category_id',
        'published_at',
        'isbn',          // ✅ baru
        'issn',          // ✅ baru
        'description',  
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
