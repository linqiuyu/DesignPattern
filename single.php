<?php
/**
 * Created by PhpStorm.
 * User: linqiuyu
 * Date: 19-3-17
 * Time: 下午4:15
 */

class Dog
{
    static private $instance;

    private function __construct()
    {

    }

    static public function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}

$dog1 = Dog::getInstance();
$dog2 = Dog::getInstance();

if ($dog1 === $dog2) {
    echo 'dog1 and dog2 are the same';
} else {
    echo 'dog1 and dog2 are not the same';
}
