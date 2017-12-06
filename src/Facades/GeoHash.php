<?php
/**
 * Created by PhpStorm.
 * User: Odeen
 * Date: 2016/5/12
 * Time: 21:58.
 */

namespace Westery\GeoHash\Facades;

use Illuminate\Support\Facades\Facade as LaravelFacade;


class GeoHash extends LaravelFacade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'GeoHash';
    }
}
