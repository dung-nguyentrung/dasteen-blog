<?php

namespace App\Services\Categories;

use App\Repositories\Categories\CategoryRepositoryInterface;
use App\Services\BaseService;

class CategoryService extends BaseService implements CategoryServiceInterface
{
    /**
     * __construct
     *
     * @param  CategoryRepositoryInterface $categoryRepo
     */
    public function __construct(protected CategoryRepositoryInterface $categoryRepo)
    {
        parent::__construct($categoryRepo);
    }
}
