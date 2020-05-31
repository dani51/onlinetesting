<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class options
 * @package App\Models
 * @version October 29, 2019, 9:04 pm UTC
 *
 * @property integer question_id
 * @property string option_name
 */
class options extends Model
{
    use SoftDeletes;

    public $table = 'options';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'question_id',
        'option_name',
        'answer'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'question_id' => 'integer',
        'option_name' => 'string',
        'answer' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'option_name' => 'required',
        'answer' => 'required'
    ];


}
