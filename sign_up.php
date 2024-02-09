<!-- <?php
    session_start();

    if(isset($_SESSION["user"]))
    {
        header('Location: index.php');
    }
?> -->


<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"/>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&family=Poppins:wght@100&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel ="icon" href="#">
        <title>FPMI - HELP!</title>
    </head>

<body>
    <main>
    <nav class="navbar navbar-dark sticky-top" aria-label="First navbar example">
            <div class="container-fluid">
              <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="images/Account.jpg" alt="" width="32" height="32" class="imgf rounded-circle">
                  <strong>                
                    <?php
                      if(isset($_SESSION["user"])) : ?>
                        <h5 class="navbar-brand mx-3"><?= $_SESSION["user"]["full-name"]?></h5>    
                    <?php endif;?></strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                  <li><a class="dropdown-item" href="#">Старые решения</a></li>
                  <li><a class="dropdown-item" href="#">Настройки?</a></li>
                  <li><a class="dropdown-item" href="sign_up.php">Регистрация</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <?php if(isset($_SESSION["user"])) : ?>
                    <li><a class="dropdown-item" href="logout.php">Выйти</a></li>
                  <?php else:?>
                    <li><a class="dropdown-item" href="authorization.php">Войти</a></li> <!--href="authorization.php" -->
                  <?php endif;?>
                </ul>
                  </div>

              
              <a class="navbar-brand"  href="index.html"> FPMI HELP</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav me-auto mb-2">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Сплайн</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                          <li><a class="dropdown-item" href="spline1.html">Сплайн 1</a></li>
                          <li><a class="dropdown-item" href="spline2.html">Сплайн 2</a></li>
                          <li><a class="dropdown-item" href="spline3.html">Сплайн 3</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">МКЭ</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                          <li><a class="dropdown-item" href="MKE1.html">МКЭ 1</a></li>
                          <li><a class="dropdown-item" href="MKE2.html">МКЭ 2</a></li>
                        </ul>
                    </li>

                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="about.html">О нас</a>
                  </li>            
                </ul>
              </div>

            </div>

            
        </nav>
 

    <!-- Форма регистрации -->
    <div class="avtor page">
        <form class="f" action="sign_up-action.php" method="post">
            <label>ФИ</label>
            <input type="text" name="full-name" placeholder="Введите фамилию и имя">
            <label>Логин</label>
            <input type="text" name="login" placeholder="Введите свой логин">
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введите пароль">
            <label>Подтверждение пароля</label>
            <input type="password" name="password_confirm" placeholder="Введите пароль повторно">
            <input class="btn btn-success my-3" type="submit" value="Зарегестрироваться" name="in">
            <?php
                if (isset($_SESSION['message']))
                {
                    echo '<p class="msg">'  . $_SESSION['message'] .  '</p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>
    </div>
    </main>   
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <footer class ="sticky-bottom">&copy 2023 НГТУ </footer>
    </body>
</html>