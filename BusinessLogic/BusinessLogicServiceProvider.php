<?php

namespace Statamic\Addons\BusinessLogic;

use Statamic\API\Config;
use Statamic\Extend\ServiceProvider;

class BusinessLogicServiceProvider extends ServiceProvider
{
    
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    public $defer = true;
    

    public function boot()
    {
        $allowAnonymous = $this->getConfig('allowAnonymous');

        if ($allowAnonymous) {

            $excludes = Config::get('system.csrf_exclude', []);
            $actionUrl = $this->actionUrl('*');
            if (! in_array($actionUrl, $excludes)) {
                $excludes[] = $actionUrl;
                Config::set('system.csrf_exclude', $excludes);
            }

        }

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
