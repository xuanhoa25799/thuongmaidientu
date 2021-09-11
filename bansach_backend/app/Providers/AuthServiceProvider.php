<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->registerPolicies();
//        $this->defineGateTheLoai();
//
//        Gate::define('menu-list',function ($user) {
//            return $user->checkPermissionAccess(config('permissions.access.list-menu'));
//        });

    }

    public function defineGateTheLoai()
    {
        Gate::define('theloai-list','App\Policies\TheLoaiPolicy@view');
        Gate::define('theloai-add','App\Policies\TheLoaiPolicy@create');
        Gate::define('theloai-edit','App\Policies\TheLoaiPolicy@update');
        Gate::define('theloai-delete','App\Policies\TheLoaiPolicy@delete');
    }
}
