<?php namespace Edutalk\Base\AssetsManagement\Facades;

use Illuminate\Support\Facades\Facade;
use Edutalk\Base\AssetsManagement\Assets;

class AssetsFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Assets::class;
    }
}
