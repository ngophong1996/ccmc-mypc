<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mess extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'useremail',
        'class',
        'content',
      

    ];
}
