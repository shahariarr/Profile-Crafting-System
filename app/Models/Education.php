<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'duration',
        'institution',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
