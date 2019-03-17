<?php
/**
 * Created by PhpStorm.
 * User: linqiuyu
 * Date: 19-3-17
 * Time: 下午4:51
 */

class Man
{
    protected $observers = [];

    public function addObserver($observer)
    {
        if (!$observer instanceof Girl) {
            throw new Exception('observer need instance Girl');
        }
        $this->observers[] = $observer;
    }

    public function buy()
    {
        foreach ($this->observers as $observer) {
            $observer->freeze();
        }
    }

    public function deleteObserver($observer)
    {
        $key = array_search($this->observers, $observer);
        array_splice($this->observers, $key);
    }
}

class Girl
{
    function freeze()
    {
        echo 'The man is buying, freeze he bank card' . PHP_EOL;
    }
}

$xiaoming = new Man();
$xiaohua = new Girl();
$xiaoli = new Girl();

$xiaoming->addObserver($xiaohua);
$xiaoming->addObserver($xiaoli);
$xiaoming->buy();
