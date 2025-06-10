<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Services\MethodService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    // public function register()
    // {
    //     //
    // }

    // /**
    //  * Bootstrap any application services.
    //  *
    //  * @return void
    //  */
    // public function boot()
    // {
    //     //
    // }

    public function boot()
    {
        // Register the Blade directive to handle shortcodes
        Blade::directive('shortcode', function ($expression) {
            return "<?php echo app(App\Services\MethodService::class)->handleShortcode($expression); ?>";
        });
    }

    public function register()
    {
        // Bind MethodService to the container
        $this->app->singleton(MethodService::class, function ($app) {
            return new MethodService();
        });
    }
}
