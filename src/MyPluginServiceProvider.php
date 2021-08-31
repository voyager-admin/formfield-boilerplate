<?php

namespace My\Plugin;

use Illuminate\Support\ServiceProvider;
use Voyager\Admin\Facades\Voyager as Voyager;
use Voyager\Admin\Manager\Plugins as PluginManager;

class MyPluginServiceProvider extends ServiceProvider
{
    public function boot(PluginManager $pluginmanager)
    {
        $pluginmanager->addPlugin(\My\Plugin\MyPlugin::class);
        $this->loadTranslationsFrom(realpath(__DIR__.'/../resources/lang'), 'my-plugin');
        Voyager::addTranslations('my-plugin', 'my-plugin');
    }

    public function register()
    {
        
    }
}