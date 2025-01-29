<?php

class Students{
    public const University="National";
    private $name;
    private $dept;
    private $level;

    public function __construct($name,$dept,$level){
        $this->name=$name;
        $this->dept=$dept;
        $this->level=$level;
    }
    public function setName($name):void{
        self::University;
         $this->name=$name ;
    }

    public function getName():string{

        return $this->name ;
    }
    public function setDept($dept):void{

        $this->name=$dept ;
   }

    public function getDept():string{
        return $this->dept;
    }
    public function setLevel($level):void{

        $this->name=$level ;
   }
    public function getLevel():string{
        return $this->level;
    }
}


class IT extends Students{

}

$it=new Students("Hasan","IT","3");
echo $it->getName().'<br>';
echo $it->getDept().'<br>';
echo $it->getLevel().'<br>';




//----------------------********------------------

// class NewClass{
//      private $name;
//     private $lastname;
//     public const dep="IT";
//     public function __construct($name,$lastname){
//         $this->name=$name;
//         $this->lastname=$lastname;


//     }


//      public function getName():string{
//         return $this->name;
//      }
//      public function getLastname():string{
//         return $this->lastname;
//      }

// }
// $it =new NewClass("Hasan","Almaliki");
// echo $it->getName();
// echo $it->getLastname().'<br>';

// echo $it::dep;

// class Child extends NewClass{

// }
