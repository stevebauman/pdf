<?php

namespace Stevebauman\Pdf\Facades;

use Illuminate\Support\Facades\Facade;

class Pdf extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'pdf';
    }
}
