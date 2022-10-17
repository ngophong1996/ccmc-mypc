<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class mess extends Base
{
    use HasFactory;
    protected $fillable = [
        'username',
        'useremail',
        'class',
        'content',
      

    ];
}
