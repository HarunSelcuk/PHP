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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $whois = $_POST['usernameandmail'] ?? '';
        $password = $_POST['password'] ?? '';
    
        if (filter_var($whois, FILTER_VALIDATE_EMAIL)) {
            // Kullanıcı email ile giriş yapıyorsa
            $sql = "SELECT * FROM users WHERE email = :whois";
        } else {
            // Kullanıcı username ile giriş yapıyorsa
            $sql = "SELECT * FROM users WHERE username = :whois";
        }

        $stmt = $conn->prepare($sql);
    $stmt->bindParam(':whois', $whois, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email']; // Hatalı değişken adını düzelttim
        $_SESSION['user_username'] = $user['username']; // Kullanıcı adını da saklayalım

        header("Location: Dashboard.php");
        exit();
    } else {
        header("Location: 404.php");
        exit();
    }
} else {
    header("Location: 404.php");
    exit();
}

$conn = null;
?>