<?php
/**
 * Trait
 */
// trait A
// {
//     public $a = "A";
// 
//     public function a()
//     {
//         return $this->a;
//     }
// }
// 
// class B
// {
//     use A;
// }
// 
// $b = new B();
// echo $b->a();


// ------------------------------------------------


// interface B
// {
//     public function B();
// }
// 
// 
// class A implements B
// {
//     private $a = "A";
// 
//     public function a()
//     {
//         return $this->a;
//     }
// 
//     public function b()
//     {
//         return $this->a;
//     }
// }
// 
// 
// $a = new A();
// echo $a->a();
// echo $a->b();




// ------------------------------------------------


// abstract class Animal
// {
//     private $type;
//     abstract public function sound();
// }
// 
// class Dog extends Animal
// {
//     public function __construct()
//     {
//         $this->type = "Dog";
//     }
// 
//     public function sound()
//     {
//         return $this->type . " says vov vov";
//     }
// }
// 
// 
// $dog = new Dog();
// echo $dog->sound();
// 


// // // --------------- static ---------------------------------
// // 
// // 
// abstract class Animal
// {
//     private $type;
//     abstract public function sound();
// }
// 
// class Dog extends Animal
// {
//     // private $legs = 4;
//     protected static $legs = 4;
// 
//     public function __construct()
//     {
//         $this->type = "Dog";
//     }
// 
//     public function sound()
//     {
//         return $this->type . " says vov vov";
//     }
// 
//     public function legs()
//     {
//         return $this->type . " has " . self::$legs . " legs.";
//     }
// 
//     public static function getLegs()
//     {
//         return self::$legs;
//     }
// }
// 
// 
// $dog = new Dog();
// echo $dog->sound();
// echo $dog->legs();
// echo $dog->getLegs();
// echo Dog::getLegs();
// 
// 
// // --------------- magic ---------------------------------
// 
// class DogDebuggable extends Dog
// {
//     public function __debugInfo()
//     {
//         return [
//             "legs" => self::$legs,
//             "type" => $this->type,
//         ];
//     }
// 
//     public function __toString()
//     {
//         return "A {$this->type} with " . self::$legs . " legs.";
//     }
// 
//     public function __invoke()
//     {
//         return $this->sound();
//     }
// }
// 
// $dog = new DogDebuggable();
// var_dump($dog);
// echo $dog;
// echo $dog();


// --------------- inject ---------------------------------

interface SessionInterface
{
    public function start();
}

class Session implements SessionInterface
{
    public function start() {}
}

class SessionB implements SessionInterface
{
    public function start() {}
}

class A
{
    private $session;

    public function injectSession(SessionInterface $session)
    {
        $this->session = $session;
    }
}


$session = new SessionB();
$a = new A();
$a->injectSession($session);
