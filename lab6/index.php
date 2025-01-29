<?php
//const is used to define constants in a class
// Constants are values that cannot be changed after they are defined

class MyClass {
    const name = 'Hasan'.'<br>';
}
//Constants are accessed using the :: operator without needing to create an instance of the class

echo MyClass::name; // Output: Hasan

//--------------******---------

//static (Static Properties/Methods)
// static is used to define static properties or methods in a class
// These belong to the class itself rather than any specific instance of the class.


class MyClass1 {
    public static $dept = 'IT'.'<br>';

    public static function myStaticMethod() {
        return self::$dept;
    }
}
//Static properties and methods are accessed using the :: operator without needing to create an instance of the class.

echo MyClass1::$dept; // Output: IT
echo MyClass1::myStaticMethod(); // IT

//const: Used to define immutable values that cannot change during the execution of the program.

//static: Used to define properties or methods that belong to the class itself and can have their values changed during execution.