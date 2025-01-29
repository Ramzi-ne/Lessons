<?php
//         -----Types Of Exception---------


//----------1. Built-in Exceptions----------
try {
    throw new Exception("This is a general exception.");
} catch (Exception $e) {
    echo 'Caught exception: ' . $e->getMessage();
}

//-----------ErrorException
try {
    throw new ErrorException("A PHP error occurred.");
} catch (ErrorException $e) {
    echo 'Caught error: ' . $e->getMessage();
}

//---------2. Specific Exceptions--------
//---------InvalidArgumentException
function setAge($age) {
    if ($age < 0) {
        throw new InvalidArgumentException("Age cannot be negative.");
    }
    echo "Your age is: $age";
}

try {
    setAge(-5);
} catch (InvalidArgumentException $e) {
    echo 'Caught exception: ' . $e->getMessage();
}

//--------OutOfRangeException
$array = [1, 2, 3];

try {
    if (!isset($array[5])) {
        throw new OutOfRangeException("Index is out of range.");
    }
} catch (OutOfRangeException $e) {
    echo 'Caught exception: ' . $e->getMessage();
}
 //------LogicException
 function doSomething($value) {
    if ($value === null) {
        throw new LogicException("Value cannot be null.");
    }
    echo "The value is: $value";
}

try {
    doSomething(null);
} catch (LogicException $e) {
    echo 'Caught exception: ' . $e->getMessage();
}

//------------3. Database Exceptions
//-------- PDOException

try {
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'username', 'password');
    // Attempt to execute an invalid SQL query
    $pdo->query('INVALID SQL');
} catch (PDOException $e) {
    echo 'Caught PDO exception: ' . $e->getMessage();
}

//-------------4. Custom Exceptions
//--------Custom Exception
class MyCustomException extends Exception {}

try {
    throw new MyCustomException("This is a custom exception.");
} catch (MyCustomException $e) {
    echo 'Caught custom exception: ' . $e->getMessage();
}