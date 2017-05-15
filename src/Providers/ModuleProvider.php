<?php namespace Edutalk\Base\AssetsManagement\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Edutalk\Base\AssetsManagement\Facades\AssetsFacade;

class ModuleProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../resources/public' => public_path(),
        ], 'Edutalk-public-assets');
    }

    public function register()
    {
        load_module_helpers(__DIR__);

        AliasLoader::getInstance()->alias('Assets', AssetsFacade::class);

        $this->mergeConfigFrom(__DIR__ . '/../../config/edutalk-assets.php', 'edutalk-assets');
    }
}
