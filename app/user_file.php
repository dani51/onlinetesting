<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_file extends Model
{
    
     protected $table = 'user_files';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'image_name', 
    ];
}
