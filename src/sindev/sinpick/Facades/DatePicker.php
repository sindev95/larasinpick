<?php


namespace sindev\sinpick\Facades;


use Illuminate\Support\Facades\Facade;

class DatePicker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'sinpick';
    }
}
