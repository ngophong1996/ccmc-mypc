<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wifi extends Model
{
    use HasFactory;
    protected $fillable = [
        'useremail',
        'address',
        'os',
        'description',
        'wifisent',
    ];
}
