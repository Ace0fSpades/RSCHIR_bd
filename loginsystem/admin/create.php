<?php


if (isset($_POST["fname"]) && isset($_POST["name"])) {
      
    $conn = mysqli_connect("localhost", "root", "", "loginsystem");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $fname = $conn->real_escape_string($_POST["fname"]);
    $name = $conn->real_escape_string($_POST["name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $passwd = $conn->real_escape_string($_POST["pass"]);
    $tnum = $conn->real_escape_string($_POST["tnum"]);
     
         
    $sql = "INSERT INTO users (fname, lname, email, password, contactno) VALUES ('$name', '$fname', '$email', '$passwd', '$tnum')";
 
    
    if($conn->query($sql)){
        echo "Данные успешно добавлены";
        
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}

?>
<html>
    <body>
    <a href='dashboard.php'>Вернуться</a>
   </body>
</html>