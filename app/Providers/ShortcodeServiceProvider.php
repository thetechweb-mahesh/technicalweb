<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ShortcodeService;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Blade;

class ShortcodeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('shortcode', function () {
            return new ShortcodeService();
        });
    }

    public function boot()
    {
        $shortcode = app('shortcode');

        // Register a shortcode with route-based dynamic content
        $shortcode->register('route-content', function ($attributes) {
            $route = $attributes['route'] ?? null;

            if ($route && Route::has($route)) {
                // Generate the content by calling the specified route
                $response = Route::dispatch(app('request')->create(route($route), 'GET'));
                return $response->getContent();
            }

            return '<!-- Route not found -->';
        });
        Blade::directive('shortcode', function ($expression) {
            return "<?php echo app('shortcode')->parse($expression); ?>";
        });
    }
}
