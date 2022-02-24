<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{

    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $route_files_prefix = 'routes/web'; //defuat web route files
        $middleware = ['web', 'localize']; // default multilingual routes middleware


        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web/web.php'));

        $this->mapMultilingualRoutes(
            "routes/web/Admin.php",
            'dashboard/admin',
            'admin',
            "$this->namespace\Dashboard\Admin",
            ['web', 'localize']
        );

        $this->mapMultilingualRoutes(
            "routes/web/FrontEnd.php",
            null,
            'FrontEnd',
            "$this->namespace\FrontEnd",
            ['web', 'localize']
        );

        $this->mapMultilingualRoutes(
            "routes/web/web.php"
        );

    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */

    /**
     * Map multilingual site routes with given values
     *
     * @param string $path
     * @param null|string $prefix
     * @param null|string $name
     * @param null|string $namespace
     * @param array $middleware
     */
    private function mapMultilingualRoutes(
        $path,
        $prefix = null,
        $name = null,
        $namespace = null,
        array $middleware = ['web']
    )
    {
        //site locale
        $locale = request()->segment(1);

        //in case of both prefix and locale are present
        if ($locale && $prefix) {
            $prefix = $locale . '/' . $prefix;
        }

        //in case of only locale is present
        if (!$prefix && $locale) {
            $prefix = $locale;
        }

        $this->mapRoutes($path, $prefix, $name, $namespace, $middleware);
    }

    /**
     * map web routes
     *
     * @param string $path
     * @param null|string $prefix
     * @param null|string $name
     * @param null|string $namespace
     * @param array $middleware
     */
    private function mapRoutes(
        $path,
        $prefix = null,
        $name = null,
        $namespace = null,
        array $middleware = ['web']
    )
    {
        Route::middleware($middleware)
            ->namespace($namespace ?? $this->namespace)
            ->prefix($prefix)
            ->name($name ? "{$name}." : '')
            ->group(base_path($path));
    }
}
