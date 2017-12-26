<?php

require_once 'Example.php';



class Demo extends Example
{
    public $age=22;
    protected $location="Dhaka";
    private $mobile='01681095485';

    public function newOne(){
        echo 'in one';
        $this->addition();
}

    public function newTwo(){
        echo 'in Two';
    }

    public function newThree(){
        echo 'in three';
    }

}