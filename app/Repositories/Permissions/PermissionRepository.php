<?php

namespace App\Repositories\Permissions;

use App\Models\Permission;
use App\Repositories\BaseRepository;

class PermissionRepository extends BaseRepository implements PermissionRepositoryInterface
{
    public function __construct(Permission $model)
    {
        parent::__construct($model);
    }
}
