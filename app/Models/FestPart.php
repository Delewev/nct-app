<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FestPart extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'phone',
        'telegafets',
        'fut',
        'category',
        'city',
        'team',
        'titelfest',
        'namecoch',
        'phonecoch',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
