<?php

namespace App\Repositories;

use App\Models\questions;
use App\Repositories\BaseRepository;

/**
 * Class questionsRepository
 * @package App\Repositories
 * @version October 29, 2019, 11:54 am UTC
*/

class questionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'subject_id',
        'question_name',
        'question_time',
        'question_type',
        'question_answer'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return questions::class;
    }
}
