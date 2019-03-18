<?php
/**
 * Created by PhpStorm.
 * User: linqiuyu
 * Date: 19-3-18
 * Time: 下午7:26
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

$tyre = new Tyre();
$bmw = new BMW($tyre);
$bmw->run();