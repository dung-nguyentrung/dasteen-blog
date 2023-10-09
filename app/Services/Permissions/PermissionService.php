<?php

namespace App\Services\Permissions;

use App\Repositories\Permissions\PermissionRepositoryInterface;
use App\Services\BaseService;

class PermissionService extends BaseService implements PermissionServiceInterface
{
    /**
     * __construct
     *
     * @param  PermissionRepositoryInterface $permissionRepo
     */
    public function __construct(protected PermissionRepositoryInterface $permissionRepo)
    {
        parent::__construct($permissionRepo);
    }
}
