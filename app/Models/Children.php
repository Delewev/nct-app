<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'full', 'day', 'uni', 'tele', 'telegram', 'dsc'
    ];

}