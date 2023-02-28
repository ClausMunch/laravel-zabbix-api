<?php

namespace Codepoint\ZabbixApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codepoint\ZabbixApi\ZabbixApi
 */
class ZabbixApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Codepoint\ZabbixApi\ZabbixApi::class;
    }
}
