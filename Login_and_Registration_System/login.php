<?php 
    session_start();
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="mydata";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    } catch (\Throwable $th) {
        echo "Failed". $th ->getMessage();
    }
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $whois = $_POST['usernameandmail']??'';
        $password = $_POST['password']??'';
        if (filter_var($whois,FILTER_VALIDATE_EMAIL)) {
            $sql="SELECT * FROM users WHERE mail=:mail";
            $stmt=$conn->prepare($sql);
            $stmt->bindParam(':mail', $whois, PDO::PARAM_STR);
            $stmt->execute();
            $user=$stmt->fetch(PDO::FETCH_ASSOC);
            if ($user) {
                if (password_verify($password,$user['password'])) {
                    $_SESSION['user_id']= $user['id'];
                    $_SESSION['user_email']= $user['mail'];

                    header("Location: Dashboard.php");
                }
            }
        }else {
            
        }
    
        
    } else{

    }
    $conn=null;
   
    ?>