<?php
/**
 * Created by PhpStorm.
 * User: linqiuyu
 * Date: 19-3-17
 * Time: 下午4:30
 */

interface Skill
{
    function family();
    function buy();
}

class Person implements Skill
{
    function family()
    {
        echo 'person family' . PHP_EOL;
    }

    function buy()
    {
        echo 'person buy' . PHP_EOL;
    }
}

class JingLing implements Skill
{
    function family()
    {
        echo 'JingLing family' . PHP_EOL;
    }

    function buy()
    {
        echo 'JingLing buy' . PHP_EOL;
    }
}

class Factory
{
    static protected $heroTypes = [
        'person' => Person::class,
        'jingLing' => JingLing::class,
    ];

    static function createHero($type)
    {
        if (!array_key_exists($type, self::$heroTypes)) {
            return null;
        }
        return new self::$heroTypes[$type];
    }
}

$person = Factory::createHero('person');
$jingLing = Factory::createHero('jingLing');

$person->family();
$person->buy();
$jingLing->family();
$jingLing->buy();
