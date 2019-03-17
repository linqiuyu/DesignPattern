<?php
/**
 * Created by PhpStorm.
 * User: linqiuyu
 * Date: 19-3-17
 * Time: 下午7:42
 */

interface Love
{
    public function sajiao();
}

class KeAi implements Love
{
    public function sajiao()
    {
        echo 'I\'m keai' . PHP_EOL;
    }
}

class Tiger implements Love
{
    public function sajiao()
    {
        echo 'Coming now';
    }
}

class GirlFriend
{
    protected $xingge;

    function __construct($xingge)
    {
        $this->xingge = $xingge;
    }

    function sajiao()
    {
        $this->xingge->sajiao();
    }
}

$keai = new KeAi();
$li = new GirlFriend($keai);
$li->sajiao();
