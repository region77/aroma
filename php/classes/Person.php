<?php
//Здоровье человека не может быть больше 100!

class Person{

   private $name;
   private $lastname;
   private $age;
   private $hp; //private инкапсулирует механизм. ошибка 500; нужны getter и setter см нижу set и get
   private $mother;
   private $father;
   private $dadsGrandmother;
   private $dadsGrandfather;


   // public $name;
   // public $lastname;
   // public $age;
   // public $hp; //это свойства

   function __construct($name,$lastname,$age,$mother=null,$father=null,$dadsGrandmother=null,$dadsGrandfather=null) { //функция внутри класса - это метод объекта
   $this->name=$name; //this  - это текущий объект,те тут будет Алекс
   $this->lastname=$lastname;
   $this->age=$age;
   $this->mother=$mother;
   $this->father=$father;
   $this->dadsGrandmother=$dadsGrandmother;
   $this->dadsGrandfather=$dadsGrandfather;
   $this->hp=100;
   }

   function sayHi($name){
      return "Hi $name, I'm ".$this->name; //конкатенация через точку
   }

   function setHp($hp){ //логика проверки .если здоровье даже больше 100, то будет в результате все равно 100
      if($this->hp+$hp>=100) $this->hp=100;
      else $this->hp=$this->hp+$hp;
   }
   // function setHp($hp) {
   //    $this->hp=$this->hp+$hp;
   // }

   function getHp(){
      return $this->hp;
   }

   function getName(){
      return $this->name;
   }
   function getLastname(){
      return $this->lastname;
   }
   function getAge(){
      return $this->age;
   }
   function getMother(){
      return $this->mother;
   }
   function getFather(){
      return $this->father;
   }
   function getDadsGrandfather(){
      return $this->dadsGrandfather;
   }
   function getDadsGrandmother(){
      return $this->dadsGrandmother;
   }
     function getInfo(){
       return "<h3>A few words about myself.</h3><br>
            My name is " .$this->getName()." ".$this->getLastname()."
            and I am ".$this->getAge().";<br>
            my mom is ".$this->getMother()->getName()." ".$this->getMother()->getLastname()." and she is ".$this->getMother()->getAge()." y.o.<br>
            my father's name is ".$this->getFather()->getName()." ".$this->getFather()->getLastname()."; he is ".$this->getFather()->getAge().";<br>
            my maternal grandparents are: granny - ".$this->getMother()->getMother()->getName()." ".$this->getMother()->getMother()->getLastName()." (aged ".$this->getMother()->getMother()->getAge().") <br>
            and grandpa - ".$this->getMother()->getFather()->getName()." ".$this->getMother()->getFather()->getLastname()." (aged ".$this->getMother()->getFather()->getAge()."); <br>
            my paternal grandparents are: granny - ".$this->getDadsGrandmother()->getName()." ".$this->getDadsGrandmother()->getLastname()." (".$this->getDadsGrandmother()->getAge()." y.o.) <br>
            and grandpa - ".$this->getDadsGrandfather()->getName()." ".$this->getDadsGrandfather()->getLastname()." which is ".$this->getDadsGrandfather()->getAge()." y.o.";
   }
}



$nina = new Person ("Antonina Sergeevna","Ivanova",68);
$tolya = new Person("Anatoly Arkadievich","Ivanov",70);
$elena = new Person ("Elena Pavlovna","Petrova",65);
$igor = new Person("Igor Mihalich","Petrov",68);

$alex = new Person("Alex","Ivanov",42,$nina,$tolya);
$olga = new Person("Olga","Petrova",42,$elena,$igor);
$valera = new Person("Valera","Ivanov",15,$olga,$alex,$nina,$tolya);

//echo $valera->getMother()->getFather()->getName();
echo $valera->getInfo();

//echo $valera->getDadsGrandmother()->getAge();
// $medKit=50;
//для private
// $alex->setHp(-30); //упал
// echo $alex->getHp()."<br>";
// $alex->setHp($medKit);//нашел аптечку
// echo $alex->getHp();

//для public
//$alex->hp=$alex->hp-30; //упал
// echo $alex->hp."<br>";
// $alex->hp=$alex->hp+$medKit;
// echo $alex->hp;

//$alex->name="Alex";
//echo $alex->sayHi($igor->name); //Hi Igor, I'm Alex
//echo $igor->name;
?>

