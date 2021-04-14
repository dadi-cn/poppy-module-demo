<?php

namespace Demo\Hooks\ArrayDemo;

use Poppy\Core\Services\Contracts\ServiceArray;

/**
 * 选择广告位
 */
class Service implements ServiceArray
{

    public function key(): string
    {
        return 'poppy-core-array-service';
    }


    public function data()
    {
        return [];
    }
}