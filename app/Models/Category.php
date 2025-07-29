<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Relasi: 1 kategori bisa memiliki banyak blog
    public function blogs() {
        return $this->hasMany(Blog::class);
    }
}
