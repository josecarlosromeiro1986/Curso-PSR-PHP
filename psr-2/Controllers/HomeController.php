<?php

namespace App\Controllers;

use FooInterface;
use BarClass as Bar;
use OtherVendor\OtherPackege\BazClass;

class HomeController extends Bar implements FooInterface
{
    private $layout = false;

    public function sampleMethod($a, $b = null)
    {
        if ($a === $b) {
            bar();
        } elseif ($a > $b) {
            $foo->bar($arg1);
        } else {
            BazClass::bar($arg1, $arg2);
        }
    }

    final public static function bar()
    {
        // method body
    }
}
