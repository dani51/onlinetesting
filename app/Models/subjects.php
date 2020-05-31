<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class subjects
 * @package App\Models
 * @version October 29, 2019, 11:36 am UTC
 *
 * @property string subject_name
 * @property string subject_author
 * @property integer subject_test_time
 */
class subjects extends Model
{
    use SoftDeletes;

    public $table = 'subjects';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'subject_name',
        'subject_author',
        'total_questions',
        'subject_test_time'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'subject_name' => 'string',
        'subject_author' => 'string',
        'subject_test_time' => 'integer',
        'total_questions' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'subject_name' => 'required',
        'subject_test_time' => 'required',
        'total_questions' => 'required',

    ];


}
