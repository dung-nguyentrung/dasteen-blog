<?php

namespace App\Providers;

use App\Models\Permission;
use App\Repositories\BaseRepository;
use App\Repositories\BaseRepositoryInterface;
use App\Repositories\Permissions\PermissionRepository;
use App\Repositories\Permissions\PermissionRepositoryInterface;
use App\Services\BaseService;
use App\Services\BaseServiceInterface;
use App\Services\Permissions\PermissionService;
use App\Services\Permissions\PermissionServiceInterface;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->registerRepositories();
        $this->registerServices();
    }

    /**
     * registerRepositories
     *
     * @return void
     */
    private function registerRepositories(): void
    {
        $this->app->singleton(PermissionRepositoryInterface::class, PermissionRepository::class);
    }

    /**
     * registerServices
     *
     * @return void
     */
    private function registerServices(): void
    {
        $this->app->singleton(PermissionServiceInterface::class, PermissionService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
    }
}
