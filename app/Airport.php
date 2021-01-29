<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;


class Airport extends Model
{
    //
    use SearchableTrait;

    protected $searchable = [
        'columns' => [
            'airport_name' => 10,
            'country' => 5,
        
        ]
     
    ];
 

}
