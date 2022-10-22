<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Base extends Model
{
    use HasFactory;
    public function defaultListingConfigs(){
        return array(
             array(
                 'field' => "updated_at",
                 'name'=>'updated_at',
                 'type'=> 'text'
             ),
             array(
                 'field' => "created_at",
                 'name'=>'created_at',
                 'type'=> 'text'
             ),
             array(
                'field' => "copy",
                'name'=>'copy',
                'type'=> 'copy'
            ),
            array(
                'field' => "edit",
                'name'=>'edit',
                'type'=> 'edit'
            ),
            array(
                'field' => "delete",
                'name'=>'delete',
                'type'=> 'delete'
            )
 
        );
        
     }
}
