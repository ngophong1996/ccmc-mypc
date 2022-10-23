<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class mypc extends Base
{
    use HasFactory;
    protected $fillable = [
        'username',
        'useremail',
        'class',
        'option',
        'device',
        'image',
        'wifi',
        'total',
        'paymentstate',
      

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
                'field' => "option",
                'name'=>'Option',
                'type'=> 'text'
            ),
            array(
                'field' => "device",
                'name'=>'Device',
                'type'=> 'text'
            ),
            array(
                'field' => "wifi",
                'name'=>'Rent router',
                'type'=> 'text'
            ),
            array(
                'field' => "total",
                'name'=>'Total',
                'type'=> 'money'
            ),
            array(
                'field' => "image",
                'name'=>'Bill Image',
                'type'=> 'text'
            ),
            array(
                'field' => "paymanetstate",
                'name'=>'Payment status',
                'type'=> 'text'
            ),

       );

       return array_merge($listingConfigs, $defaultListingConfigs);
     }
}
