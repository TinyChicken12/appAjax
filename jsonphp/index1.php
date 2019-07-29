<?php
$phpArray  = ["Ha Noi", "Ho Chi Minh", "Da nang"];

class Student {
    public $name;
    public $age;
    public $location;

    public function __construct($name, $age, $location){
        $this->name = $name;
        $this->age = $age;
        $this->location = $location;
    }
}

$an = new Student("an", 21, "Ha Noi");

echo "<pre>";
print_r($an);
echo "</pre>";

//Mã hóa mảng thành chuỗi json
$phpJson1 = json_encode($phpArray);
echo "<pre>";
print_r($phpJson1);
echo "</pre>";

//Mã hóa đối tượng thành chuỗi json
$phpJson2 = json_encode($an);
echo "<pre>";
print_r($phpJson2);
echo "</pre>";