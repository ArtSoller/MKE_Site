<?php
    session_start();
    include 'connect_users.php';
    $password_confirm = $_POST['password_confirm'];
    $password = $_POST['password'];
    if ($password_confirm === $password)
    {
        $sql = "INSERT INTO users (full-name, login, password) VALUES (:full-name, :login, :password)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(":full-name", $_POST["full-name"]);
        $stmt->bindValue(":login", $_POST["login"]);
        $stmt->bindValue(":password", $password);
        
        $stmt->execute();
        header("Location: index1.php");
        die();        
    }
    else
    {
        $_SESSION['message'] = "Пароли не совпадают";
        header('Location: sign_up.php');    
    }    
?>