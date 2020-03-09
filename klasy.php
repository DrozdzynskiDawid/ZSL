<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      class User{
        public $name;
        public $surname;
        public $city;
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
        public function setCity($city){
          $this->city=$city;
        }
        public function getCity(){
          return $this->city;
        }
        public function setAll($name,$surname,$city){
          $this->name=$name;
          $this->surname=$surname;
          $this->city=$city;
        }
        public function getAll(){
          return<<<GET
          <hr>
          Imie: $this->name<br>
          Nazwisko: $this->surname<br>
          Miasto: $this->city<br>
          <hr>
GET;
        }
      }

      $object = new User();
      $object->name="Krystyna";
      $object->setName("Paweł");
      //echo $object->name;
      echo $object->getName()," ";
      $object->setSurname("Gołąb");
      echo $object->getSurname();
      $object->setAll("Janusz","Tomczak","Poznań");
      echo $object->getAll();
     ?>
  </body>
</html>
