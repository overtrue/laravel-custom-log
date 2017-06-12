<?php

/*
 * This file is part of the overtrue/laravel-custom-log.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Overtrue\LaravelCustomLog\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class CustomLog.
 *
 * @author overtrue <i@overtrue.me>
 */
class CustomLog extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'custom-log';
    }
}
