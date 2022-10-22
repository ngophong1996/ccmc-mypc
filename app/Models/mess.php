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
    public function listingConfigs(){
        $defaultListingConfigs = parent::defaultListingConfigs();
        $listingConfigs= array(
            array(
                'field' => 'id',
                'name'=>'ID',
                'type'=> 'text'
            ),
            array(
                'field' => "username",
                'name'=>'Name',
                'type'=> 'text'
            ),
            array(
                'field' => "useremail",
                'name'=>'Email',
                'type'=> 'text'
            ),
            array(
                'field' => "class",
                'name'=>'Class',
                'type'=> 'text'
            ),
            array(
                'field' => "content",
                'name'=>'Content',
                'type'=> 'text'
            )
       );

       return array_merge($listingConfigs, $defaultListingConfigs);
     }
}
