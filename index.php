<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"/>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&family=Poppins:wght@100&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel ="icon" href="images/logo_site.png">
        <title>FPMI - MKE HELP!</title>
    </head>
    <body>
        <main>
        <nav class="navbar navbar-dark sticky-top" aria-label="First navbar example">
            <div class="container-fluid">
              <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="images/Account.jpg" alt="" width="32" height="32" class="imgf rounded-circle">
                  <strong>                
                    <?php session_start();
                      if(isset($_SESSION["user"])) : ?>
                        <h5 class="navbar-brand mx-3"><?= $_SESSION["user"]["full-name"]?></h5>    
                    <?php endif;?></strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                  <li><a class="dropdown-item" href="#">Старые решения</a></li>
                  <li><a class="dropdown-item" href="#">Настройки?</a></li>
                  <li><button class="dropdown-item" onclick="document.getElementById('id02').style.display='block'">Регистрация</button></li>
                  <li><hr class="dropdown-divider"></li>
                  <?php if(isset($_SESSION["user"])) : ?>
                    <li><a class="dropdown-item" href="logout.php">Выйти</a></li>
                  <?php else:?>
                    <li><button class="dropdown-item" onclick="document.getElementById('id01').style.display='block'">Войти</button></li> <!--href="authorization.php" -->
                  <?php endif;?>
                </ul>
                  </div>

              
              <a class="navbar-brand"  href="index.php"> FPMI MKE HELP</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav me-auto mb-2">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">МКЭ</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                          <li><a class="dropdown-item" href="MKE1.php">Параболическое уравнение в декартовой системе координат, схема Кранка-Николсона для аппроксимации по времени. Базисные функции биквадратичные на прямоугольниках</a></li>
                          <li><a class="dropdown-item" href="MKE2.php">Гиперболическое уравнение в декартовой системе координат, схема Кранка-Николсона для аппроксимации по времени. Базисные функции биквадратичные на прямоугольниках</a></li>
                          <li><a class="dropdown-item" href="MKE3.php">Параболическое уравнение в декартовой системе координат, трехслойная явная схема для аппроксимации по времени. Базисные функции линейные на треугольниках</a></li>
                          <li><a class="dropdown-item" href="MKE4.php">Параболическое уравнение в цилиндрической системе координат, трехслойная неявная схема для аппроксимации по времени. Базисные функции билинейные на прямоугольниках</a></li>
                        </ul>
                    </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="about.html">О нас</a>
                  </li>            
                </ul>
              </div>

            </div>

        </nav>
          
    <div class="container-fluid">
        <div class="row row-cols-12 justify-content-center">
            <div class="col-10">
                <p>Приветствуем Вас на сайте, посвященном тестированию МКЭ-задач! </p>
                <p>Воспользоваться предлагаемыми услугами вы можете нажав на "МКЭ" в шапке нашего сайта, а затем выбрав необходимый вам вариант решения.</p>
                <p>О разработчиках сайта вы можете узнать во вкладке "О нас".</p>
                <p>Итак, перед началом работы рекомендуем ознакомиться с теорией по методу конечных элементов (МКЭ).</p>
                <p>МКЭ стал основным инструментом большинства исследователей, работающих с математическими моделями в виде краевых и начально-краевых задач для дифференциальных уравнений с частными производными.</p>
                <p>Мир, в котором мы живем, имеет уникальный набор проблем. Эти проблемы могут варьироваться от экологических, таких как загрязнение и изменение климата, до социальных и экономических, таких как бедность и безработица.
                Решение этих проблем имеет решающее значение для устойчивого развития и благополучия разных регионов и их жителей. Одним из подходов, который привлек значительное внимание и оказался эффективным в решении подобных проблем, является использование конечных элементов.
                </p>
                <p>Анализ конечных элементов – это числовой метод, используемый для решения сложных инженерных и научных проблем путем разделения их на более мелкие, более управляемые элементы. Данный метод широко применяется в различных областях, включая гражданское строительство, машиностроение и физику.
                Тем не менее, его потенциал в решении разных проблем еще пока не до конца использован.</p>
                <p>Таким образом, метод конечных элементов может быть применен для решения широкого спектра задач. Понимая основы этого метода, мы можем получить представление о его применимости и потенциальных ограничениях в решении реальных проблем.</p>
              </div>
        </div>
    </div>

    <div id="id01" class="modal">
      <form class="modal-content animate" action="authorization-action.php" method="post">
        <div class="container">
          <label for="uname"><b>Логин</b></label>
          <input type="text" placeholder="Введите логин" name="login" required>

          <label for="psw"><b>Пароль</b></label>
          <input type="password" placeholder="Введите пароль" name="password" required>

          <button class="button" type="submit">Войти</button>
          <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>

        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>

    <div id="id02" class="modal">
      <form class="modal-content animate" action="" method="post">
        <div class="container">
          <label for="uname"><b>ФИ</b></label>
          <input type="text" placeholder="Введите фамилию и имя" name="full-name" required>

          <label for="uname"><b>Логин</b></label>
          <input type="text" placeholder="Введите логин" name="login" required>

          <label for="psw"><b>Пароль</b></label>
          <input type="password" placeholder="Введите пароль" name="password" required>

          <label for="psw"><b>Подтверждение пароля</b></label>
          <input type="password" placeholder="Введите пароль повторно" name="password_confirm" required>

          <?php
                if (isset($_POST['submit']) && $_POST['password'] != $_POST['password_confirm']):
                  ?>
                
                  <input type="password" placeholder="Введите пароль повторно" name="password_confirm" required>
                      <?php endif;
            ?>
          <button class="button" type="submit">Зарегистрироваться</button>


        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>


    </main>   
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script>
// Get the modal
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal || event.target == modal1) {
        modal1.style.display = "none";
        modal.style.display = "none";
    }
}

</script>
    <footer class ="">&copy 2023 НГТУ </footer>
    </body>
</html>