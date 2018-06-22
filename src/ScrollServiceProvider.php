<?php
namespace Huh\Scroll;
use Illuminate\Support\ServiceProvider;
class ScrollServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
//        include __DIR__ . '/routes.php';
//        $this->loadViewsFrom(__DIR__ . '/Views', 'scroll');
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Scroll::class, function () {
            return new Scroll();
        });

        $this->app->alias(Scroll::class, 'scroll');
    }
}