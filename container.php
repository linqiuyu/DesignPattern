<?php
/**
 * Created by PhpStorm.
 * User: linqiuyu
 * Date: 19-3-18
 * Time: 下午7:34
 */

class Tyre
{
    public function roll()
    {
        echo 'The tire is rolling' . PHP_EOL;
    }
}

class BMW
{
    protected $tyre;

    public function __construct($tyre)
    {
        $this->tyre = $tyre;
    }

    function run()
    {
        $tyre = new Tyre();
        $tyre->roll();
        echo 'BMW run' . PHP_EOL;
    }
}

class Container
{
    static $register = [];

    static function bind($name, Closure $col)
    {
        self::$register[$name] = $col;
    }

    static function make($name)
    {
        $col = self::$register[$name];
        return $col();
    }
}

Container::bind('tyre', function () {
    return new Tyre();
});

Container::bind('bmw', function () {
    return new BMW(Container::make('tyre'));
});

$bmw = Container::make('bmw');
$bmw->run();