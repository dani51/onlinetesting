<?php

namespace App\Repositories;

use App\Models\subjects;
use App\Repositories\BaseRepository;

/**
 * Class subjectsRepository
 * @package App\Repositories
 * @version October 29, 2019, 11:36 am UTC
*/

class subjectsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'subject_name',
        'subject_author',
        'total_questions',
        'subject_test_time'
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
        return subjects::class;
    }
}
