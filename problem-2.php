<?php 
class Car{
    public $engineNo;
    public $model;
    public $owner;

    function __construct($engineNo, $model, $owner){
        $this->engineNo = $engineNo;
        $this->model = $model;
        $this->owner = $owner;
    }

    function showInfo(){
        echo "Car Details:"."<br>";
        echo "Engine NO: ".$this->engineNo."<br>";
        echo "Model: ".$this->model."<br>";
        echo "Owner: ".$this->owner."<br>";
    }
}
$car = new Car(1234, 'ghost', 'steve');
$car->showInfo();

?>