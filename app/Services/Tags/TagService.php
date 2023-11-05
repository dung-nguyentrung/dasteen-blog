<?php

namespace App\Services\Tags;

use App\Repositories\Tags\TagRepositoryInterface;
use App\Services\BaseService;

class TagService extends BaseService implements TagServiceInterface
{
    /**
     * __construct
     *
     * @param  TagRepositoryInterface $tagRepo
     */
    public function __construct(protected TagRepositoryInterface $tagRepo)
    {
        parent::__construct($tagRepo);
    }
}
