<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class questions
 * @package App\Models
 * @version October 29, 2019, 11:54 am UTC
 *
 * @property integer subject_id
 * @property integer total_questions
 * @property string question_name
 * @property integer question_time
 * @property string question_answer
 */
class questions extends Model
{
    use SoftDeletes;

    public $table = 'questions';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'subject_id',
        'question_name',
        'question_time',
        'question_type',
        'question_answer'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'subject_id' => 'integer',
        'question_name' => 'string',
        'question_time' => 'integer',
        'question_type' => 'integer',
        'question_answer' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'question_name' => 'required'
    ];


}
