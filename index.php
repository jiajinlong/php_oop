<?php

class ShopProduct
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    protected $price = 5;
    public $discount = 1;

//    function __construct($title, $firstName, $mainName, $price)
//    {
//        $this->title = $title;
//        $this->producerMainName = $mainName;
//        $this->producerFirstName = $firstName;
//        $this->price = $price;
//    }

    function getProducer(){
        return "{$this->producerFirstName}" . "{$this->producerMainName}";
    }

    function getSummaryLine(){
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }

    function setDiscount($num){
        $this->discount = $num;
    }

    function getPrice(){
        return ($this->price - $this->discount);
    }
}

class BookProduct extends ShopProduct
{
    function getPrice(){
        return $this->price;
    }
}

$product2 = new BookProduct();
print $product2->getPrice();
//class CdProduct extends ShopProduct
//{
//    public $playLength;
//
//    function __construct($title, $firstName, $mainName, $price, $playLength)
//    {
//        parent::__construct($title, $firstName, $mainName, $price);
//        $this->playLength = $playLength;
//    }
//
//    function getLength(){
//        return $this->playLength;
//    }
//
//    function getSummaryLine()
//    {
//        $base = parent::getSummaryLine();
//        $base .= ": playing time - {$this->playLength}";
//        return $base;
//    }
//}
//
//class BookProduct extends ShopProduct
//{
//    public $numPages;
//
//    function __construct($title, $firstName, $mainName, $price, $numPages)
//    {
//        parent::__construct($title, $firstName, $mainName, $price);
//        $this->numPages = $numPages;
//    }
//
//    function getNumberOfPages(){
//        return $this->numPages;
//    }
//
//    function getSummaryLine()
//    {
//        $base = parent::getSummaryLine();
//        $base .= ": page count - ";
//        return $base;
//    }
//}
