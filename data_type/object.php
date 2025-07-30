<?php
class Mobile {
  public $brand;
  
  public function showBrand() {
    echo "Brand is " . $this->brand;
  }
}

$phone = new Mobile();      
$phone->brand = "Samsung";  
$phone->showBrand();        
?>