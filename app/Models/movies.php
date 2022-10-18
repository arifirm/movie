<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'image', 'description', 'rating_star'];
    public function casts() {
        return $this->belongsToMany(Cast::class)->withPivot('role');
    }
}
