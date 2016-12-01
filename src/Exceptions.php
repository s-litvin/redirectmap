<?php
namespace Litvin\Redirectmap;
use Illuminate\Support\Facades\Facade;

class Exceptions extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'exceptions';
    }
}