<?php

namespace App\Providers;

use App\Repositories\Categories\CategoryRepository;
use App\Repositories\Categories\CategoryRepositoryInterface;
use App\Repositories\Permissions\PermissionRepository;
use App\Repositories\Permissions\PermissionRepositoryInterface;
use App\Services\Categories\CategoryService;
use App\Services\Categories\CategoryServiceInterface;
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
        $this->app->singleton(CategoryRepositoryInterface::class, CategoryRepository::class);
    }

    /**
     * registerServices
     *
     * @return void
     */
    private function registerServices(): void
    {
        $this->app->singleton(PermissionServiceInterface::class, PermissionService::class);
        $this->app->singleton(CategoryServiceInterface::class, CategoryService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
    }
}
