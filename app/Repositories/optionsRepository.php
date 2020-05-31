<?php

namespace App\Repositories;

use App\Models\options;
use App\Repositories\BaseRepository;

/**
 * Class optionsRepository
 * @package App\Repositories
 * @version October 29, 2019, 9:04 pm UTC
*/

class optionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'question_id',
        'option_name',
        'answer'
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
        return options::class;
    }
}
