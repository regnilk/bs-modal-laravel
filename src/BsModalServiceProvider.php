<?php
    
    namespace Regnilk\BsModalLaravel;
    
    use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
    use Illuminate\Support\Facades\Blade;
    use Regnilk\BsModalLaravel\Components\{
        Danger,
        Dark,
        Info,
        Light,
        Primary,
        Secondary,
        Success,
        Warning
    };
    
    class BsModalServiceProvider extends LaravelServiceProvider
    {
        /**
         * Indicates if loading of the provider is deferred.
         *
         * @var bool
         */
        protected $defer = FALSE;
        
        /**
         * Bootstrap the application events.
         *
         * @return void
         */
        public function boot()
        {
            $this->loadViewComponentsAs('bs-modal', [
                Danger::class,
                Dark::class,
                Info::class,
                Light::class,
                Primary::class,
                Secondary::class,
                Success::class,
                Warning::class
            ]);
            
            $this->loadViewsFrom(__DIR__ . '/Views', 'bs-modal-laravel');
            
            Blade::component('modal-danger', Danger::class);
            Blade::component('modal-dark', Dark::class);
            Blade::component('modal-info', Info::class);
            Blade::component('modal-light', Light::class);
            Blade::component('modal-primary', Primary::class);
            Blade::component('modal-secondary', Secondary::class);
            Blade::component('modal-success', Success::class);
            Blade::component('modal-warning', Warning::class);
            
            /*$this->publishes([
                __DIR__ . '/Views' => resource_path('views/vendor/components'),
            ]);*/
        }
        
    }