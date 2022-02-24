<?php

namespace App\Helpers;

use Carbon\Carbon;

class CustomDate extends Carbon
{
    protected static $formatFunction = 'translatedFormat';

    protected static $createFromFormatFunction = 'createFromLocaleFormat';

    protected static $parseFunction = 'myCustomParse';

    public static function myCustomParse($string)
    {
        return static::rawCreateFromFormat('d/m/Y', $string);
    }
}
