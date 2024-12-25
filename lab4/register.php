<?php
require_once "conectdb.php";

$name =  $Address = $Phone =  '';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $Address = htmlspecialchars(trim($_POST['Address']));
    $Phone = htmlspecialchars(trim($_POST['Phone']));
    $query = "INSERT INTO USERS 
    (Name,Address,Phone)
    values(:name,:Address,:Phone)";
     $add = $conn->prepare($query);   //this used to PDO
    
    $add->execute([
        'name' => $name,
        'Address' => $Address,
        'Phone' => $Phone
        
    ]);
    echo "<script>alert('success')</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <br>
    <label for="Address">Address:</label>
    <input type="Address" id="Address" name="Address">
    <br>
    <label for="Phone">Phone:</label>
    <input type="Phone" id="Phone" name="Phone">
    <br>

    <input type="submit" value="Sign in">
</form>
    
</body>
</html>