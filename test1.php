<!DOCTYPE html>
<html>
<head>
</head>
<body>
  
<form action="" method="GET">
  <p>First name:<br>
     <input type="text" name="firstname"><br>
     Second name:<br><input type="text" name="secondname"><br>
     Last name:<br><input type="text" name="lastname"><br>
     Age:<br><input type="number" name="age">
  </p>
  <p>
    <input type="submit" name="button"  value="Submit">
  </p>
</form>
  
<?php
    if (!empty($_GET['firstname']) && !empty($_GET['secondname']) && !empty($_GET['lastname']) && !empty($_GET['age'])) {
        $firstname = $_GET['firstname'];
        $secondname = $_GET['secondname'];
        $lastname = $_GET['lastname'];
        $age = $_GET['age'];
      
            echo "you are ".$firstname." ".$secondname." ".$lastname." and you are ".$age." years old";
    }
?>
</body>
</html> 
