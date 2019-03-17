<?php
/**
 * Created by PhpStorm.
 * User: linqiuyu
 * Date: 19-3-17
 * Time: 下午6:36
 */

interface PerfectMan
{
    public function cook();
    public function writePhp();
}

class Wife
{
    public function cook()
    {
        echo 'I can cook' . PHP_EOL;
    }
}

class Man implements PerfectMan
{
    protected $wife;

    public function __construct($wife)
    {
        if (!$wife instanceof Wife) {
            throw new Exception('wife need instance Wife');
        }

        $this->wife = $wife;
    }

    public function cook()
    {
        $this->wife->cook();
    }

    public function writePhp()
    {
        echo 'I can write php' . PHP_EOL;
    }
}

$wife = new Wife();
$man = new Man($wife);

$man->cook();
