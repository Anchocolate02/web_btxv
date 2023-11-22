<?php

namespace App\Providers;

use DigitalCreative\CollapsibleResourceManager\Resources\Group;
use DigitalCreative\CollapsibleResourceManager\Resources\InternalLink;
use DigitalCreative\CollapsibleResourceManager\Resources\TopLevelResource;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use Silvanite\NovaToolPermissions\NovaToolPermissions;
use DigitalCreative\CollapsibleResourceManager\CollapsibleResourceManager;
use EricLagarda\NovaGallery\NovaGallery;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            new Help,
        ];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new CollapsibleResourceManager([
                'remember_menu_state' => true,
                'navigation' => [
                    TopLevelResource::make([
                        'label' => 'CMS',
                        'resources' => [

                            Group::make([
                                'label' => 'Cơ sở dữ liệu',
                                'expanded' => false,
                                'resources' => [
                                    \App\Nova\Post::class,
                                    // \App\Nova\Sanpham::class,
                                    \App\Nova\Video::class,
                                    \App\Nova\Category::class,
                                    \App\Nova\Hosochiensi::class,
                                    \App\Nova\Thoikihoatdong::class,
                                    \App\Nova\Camtuong::class,
                                    // \App\Nova\User::class,
                                    \App\Nova\Loaidanhmuc::class,


                                    // \App\Nova\Feedback::class,
                                    
                                ]
                            ]),
                           
                            Group::make([
                                'label' => 'Ảnh',
                                'expanded' => false,
                                'resources' => [
                                 
                                    // \App\Nova\Anhtt::class,
                                    \App\Nova\Hoidap::class,
                                    \App\Nova\thuvienanh::class,
                                    \App\Nova\Lienketwebsite::class,

                                    
                                ]
                            ]),
                          
                        ]
                    ]),
                ]
            ]),
            //new \OptimistDigital\MenuBuilder\MenuBuilder,
            new NovaGallery,
            new NovaToolPermissions(),
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
