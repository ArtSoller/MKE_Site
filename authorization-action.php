<?php
    session_start();
    include 'connect_users.php';

    $sql = "SELECT * FROM users WHERE login = :login AND password = :password";
    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(":login", $_POST["login"]);
    $stmt->bindValue(":password", $_POST["password"]);

    $user=$stmt->execute();

    if($stmt->rowCount() > 0)
    {
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $_SESSION['user'] = array(
            'id' => $user[0]['id'],
            'full-name' => $user[0]['full-name']
        );
        header('Location: index.php');
    }
    else
    {
        $_SESSION['message'] = "Неверный логин или пароль";
        header('Location: authorization.php');
    }
?>

<!-- <pre>
    <?php
            print_r($user);
            print_r($_SESSION["user"]);
    ?>
</pre> -->