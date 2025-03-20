<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydata";


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "INSERT INTO users (username,email,password) 
                VALUES (:username,:email,:password)";

                $stmt = $conn -> prepare($sql);

                $stmt -> bindParam(':username', $_POST['username']);
                $stmt -> bindParam(':email', $_POST['email']);
                    
                $hashpasword = password_hash($_POST[ 'password'], PASSWORD_DEFAULT);
                
                $stmt -> bindParam(':password', $hashpasword);
                $stmt->execute();
    } catch (\Throwable $th) {
        echo "Failed" . $th -> getMessage();
    }
    $conn=null;
?>
