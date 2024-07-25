<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'age', 'nationality', 'freelance', 'languages', 'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
