<?php
/**
 * Created by PhpStorm.
 * User: linqiuyu
 * Date: 19-3-17
 * Time: 下午4:42
 */

interface Tell
{
    function call();
    function receive();
}

class XiaoMi implements Tell
{
    public function call()
    {
        echo 'use xiaomi call' . PHP_EOL;
    }

    public function receive()
    {
        echo 'use xiaomi receive' . PHP_EOL;
    }
}

class HuaWei implements Tell
{
    function call()
    {
        echo 'use huawei call' . PHP_EOL;
    }

    function receive()
    {
        echo 'use huawei receive' . PHP_EOL;
    }

}


interface Factory
{
    static function createPhone();
}

class XiaoMiFactory implements Factory
{
    static function createPhone()
    {
        return new XiaoMi();
    }
}

class HuaWeoFactory implements Factory
{
    static function createPhone()
    {
        return new HuaWei();
    }
}


$xiaomi = XiaoMiFactory::createPhone();
$huawei = HuaWeoFactory::createPhone();

$xiaomi->call();
$xiaomi->receive();
$huawei->call();
$huawei->receive();
