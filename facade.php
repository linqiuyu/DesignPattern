<?php
/**
 * Created by PhpStorm.
 * User: linqiuyu
 * Date: 19-3-18
 * Time: 下午7:10
 */

class Light
{
    public function turnOn()
    {
        echo 'open the light' . PHP_EOL;
    }


    public function turnOff()
    {
        echo 'close the light' . PHP_EOL;
    }
}

class Camera
{
    function active()
    {
        echo 'open camera' . PHP_EOL;
    }

    public function deactive()
    {
        echo 'close camera' . PHP_EOL;
    }
}

class Facade
{
    protected $light;
    protected $camera;

    public function __construct()
    {
        $this->light = new Light();
        $this->camera = new Camera();
    }

    public function start()
    {
        $this->light->turnOff();
        $this->camera->active();
    }

    public function stop()
    {
        $this->light->turnOff();
        $this->camera->deactive();
    }
}

$f = new Facade();
$f->start();
$f->stop();