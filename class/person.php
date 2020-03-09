<?php
class Person{
  public $name;
  public $surname;
  public $date;
  public $height;
  public $weight;

  public function setName($name){
    $this->name=$name;
  }
  public function getName(){
    return $this->name;
  }
  public function setSurname($surname){
    $this->surname=$surname;
  }
  public function getSurname(){
    return $this->surname;
  }
  public function setDate($surname){
    $this->date=$date;
  }
  public function getDate(){
    return $this->date;
  }
  public function setHeight($surname){
    $this->height=$height;
  }
  public function getHeight(){
    return $this->height;
  }
  public function setWeight($surname){
    $this->weight=$weight;
  }
  public function getWeight(){
    return $this->weight;
  }
  public function setAll($name,$surname,$date,$weight,$height){
    $this->name=$name;
    $this->surname=$surname;
    $this->date=$date;
    $this->height=$height;
    $this->weight=$weight;
  }
  public function getAll(){
    return<<<GET
    <hr>
    Imie i nazwisko: $this->name $this->surname<br>
    Data urodzenia: $this->date<br>
    Waga: $this->weight kg<br>
    Wzrost: $this->height cm<br>
    <hr>
GET;
  }
}
$obj = new Person();
$obj->setAll("Dawid","Drożdżyński","26.10.2001","75","190");
 ?>
