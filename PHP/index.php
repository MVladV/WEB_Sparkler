<?php
    $a = 25;                    //integer
    $b = 3.45;                  //float
    $c = "Hello, I`m Vlad.";    //string
    $d = true;                  //boolean
    
    echo "$a" . "<br>";

    if($a > $b){
        echo "First is bigger" . "</br>";
    }
    else{
        echo "Second is bigger" . "</br>";
    }
    
    $array = array(
        'Table',
        'Chair',
        'Bed',
        'Sofa',);           

    for($i = 0; $i < count($array); $i++)
    {
        echo "{$array[$i]}" . "<br>";
    }

    $f = [
        'name' => 'Владислав',
        'surname' => 'Мітлицький',
        'education' => 'КПІ ТІ-02',
    ];                         
    
    foreach ($f as $name => $answer) {
        echo "{$name} data: $answer" . '<br>';
    }
    
    class Person{
        private $name;
        private $surname;
        private $age;
        public function __construct(){
        }
        ///
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }
        ///
        public function getSurname(){
            return $this->surname;
        }
        public function setSurname($name){
            $this->surname = $surname;
        }
        ///
        public function getAge(){
            return $this->age;
        }
        public function setAge($age){
            $this->age = $age;
        }
    }
    class Man extends Person{
        private $male;
        private $mindset;
        public function __constructor($male, $mindset){
            parent::__construct();
            $this->male = male;
            $this->mindset = mindset;
        }
    }
    class Singleton{
        private static $_instance = null;
        private function __construct(){

        }
        public function __clone(){

        }
        static public function getInstance(){
            if(is_null(self::$_instance)){
                self::$_instance = new self();
            }
            return self::$_instance;
        }
    }

    $person = new Person;
    $person->setName(Vladislav);
    $name = $person->getName();
    echo "<br>" . "$name";
