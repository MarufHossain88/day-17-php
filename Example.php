<?php





class Example
{
    public $name='Maruf Hossain';
    public $value;
    protected $city='Borisal';
    private $country='Bangladesh';


    public function __construct()
    {

    }

    public  function addition(){
      echo 'In addition';
//        echo $this->value;
////        $this->division();
}

protected function subtraction(){
        echo 'In subtraction';
}

private function division(){
    echo 'in division';
}

}