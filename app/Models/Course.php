<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category',
        'user_id'
    ];

    public function educator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
