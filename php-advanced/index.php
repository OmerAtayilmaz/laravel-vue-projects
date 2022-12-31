
<?php
 $name="Rakun Faruk";
 echo "Selam, $name";
 ?>

<?php

function calcAge($birthDate){
    return 2023-$birthDate;
}

echo  calcAge(2001);
?>

<?php
$num=25;
$num2=3.15;
$name="Jogn";
$loggedIn=true;
$scores=[50,25,32];


?>


<?php

class Product {
    private $name;
    private $price;
    private $isExist;

    public function __construct($name,$price,$isExist){
        $this->name=$name;
        $this->price=$price;
        $this->isExist=$isExist;
    }
    public function productDetail():string{
        return "Product Name:$this->name\nPrice:$this->price\nStatus:$this->isExist";
    }
    public static function awesomeCall(){

    }
}


$p1=new Product("Macbook Pro","200$",true);
echo $p1->productDetail();

Product::awesomeCall();

?>

<?php
class TechProduct extends Product{
    public $model;
    public function __construct($name,$price,$isActive,$model){
        parent::__construct($name,$price,$isActive);
        $this->model=$model;
    }
    public function getDetails():string{
        return "This product model is $this->model";
    }
}

$t1=new TechProduct("Iphone",444,true,"2022");
echo $t1->getDetails();
echo $t1->productDetail();

?>

<?php
interface CRUD {
    public function findProductByCategory($email);
    public function getProductById($id);
    public function getAll():array;
}

?>

<?php
class Action implements CRUD{

    public function findProductByCategory($email)
    {
        // TODO: Implement findProductByCategory() method.
    }

    public function getProductById($id)
    {
        // TODO: Implement getProductById() method.
    }

    public function getAll(): array
    {
        // TODO: Implement getAll() method.
    }
}
?>

<?php

abstract class Shape{
    abstract public function area();
}

class Circle extends Shape{
    private $radius;
    public function  __construct($radius){
        $this->radius=$radius;
    }
    public function area(){
        return pi()*pow($this->radius,2);
    }
}

$c1=new Circle(360);
echo $c1->area();
?>