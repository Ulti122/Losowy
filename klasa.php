<?php
/**
 * Created by PhpStorm.
 * User: Karol
 * Date: 18.10.2018
 * Time: 09:18
 */

require 'klasa2.php';

class klasa
{
    public $zmienna;
    public $klasaa ;

    public function __construct()
    {
        $this->klasaa = new klasa2();
    }
}