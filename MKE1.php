<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"/>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&family=Poppins:wght@100&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel ="icon" href="images/logo_site.png">

        <script>
        function showOtherField() {
            var selectBox = document.getElementById("selection");
            var otherField = document.getElementById("otherField");

            if(selectBox.value == "other") {
                otherField.style.display = "block";
            } else {
                otherField.style.display = "none";
            }
        }
        </script>

        <title>FPMI - MKE HELP!</title>
    </head>
    <body>
      <nav class="navbar navbar-dark sticky-top" aria-label="First navbar example">
        <div class="container-fluid">
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

    <main>    
      <div class="container container-fluid">
          <h3>МКЭ для параболического уравнения в декартовой системе координат, схема Кранка-Николсона для аппроксимации по времени. Базисные функции биквадратичные на прямоугольниках.</h3>
          <div class="row row-cols-12">
              <div class="col-12">
                  <div class="card h-100 text-white">
                      <div class="card-body">
                          <div class="info my-2">
                            <p class="text-center">
                              <a class="" data-bs-toggle="collapse" href="#collapseHermite" role="button">
                                Информация о МКЭ-задаче
                              </a>
                            </p>
                            <div class="collapse" id="collapseHermite">
                              <div class="card card-body text-black">
                                <p>Для решения данной задачи мы воспользуемся следующим дифференциальным уравнением: <img src="images/difur1.png" alt="" width="252" height="63"></p>
                                <p>Схема Кранка-Николсона после выполнения конечноэлементной аппроксимации краевой задачи, перейдет в СЛАУ:</p>
                                <img src="images/schema1.png" alt="" width="460" height="63">
                                <p>Каждая биквадратичная базисная функция строится как произведение одномерных квадратичных базисных функций координат x и y – X и Y, выраженных следующим образом:
                                  <img src="images/bikv0.png" alt="" width="252" height="88"></p>
                                <p>Тогда, исходя из формулы для функций, представленной выше, локальные функции ψ имеют вид:</p>
                                <img src="images/bikv1.png" alt="" width="559" height="116">
                              </div>
                            </div>
                          </div>
                          <div class="build">
                              <div class="row">
                                <div class="col"></div>
                                <div class="col-auto">
                                  <div class="container">
                                    <form action="input.php" method="post" class="my-4">

                                        <lable class="form-lable text-dark">Количество точек</lable>
                                        <input type="text" class="form-control" name="Nn" placeholder="Введите количество точек сетки">

                                        <lable class="form-lable text-dark">XY</lable>
                                        <input type="text" class="form-control" name="XY" placeholder="Введите координаты каждой точки через пробел без знаков препинания">


                                        <lable class="form-lable text-dark">Количество элементов</lable>
                                        <input type="text" class="form-control" name="Ne" placeholder="Введите количество элементов сетки">

                                        <lable class="form-lable text-dark">Элементы</lable>
                                        <textarea type="text" class="form-control" name="elems" rows="5" placeholder="Введите номера узлов каждого элемента от меньшего к большему, в каждом элементе их должно быть 9"></textarea>

                                        <lable class="form-lable text-dark">Выбрать вариант разбиения сетки по времени, где 1.коэффициент разбиения, 2.кол-во разбиений, 3 и 4. временной промежуток</lable>
                                        <p><select id="selection" name="variant_time" onchange="showOtherField()">
                                            <option>1 10 0 1</option>
                                            <option>1 20 0 1</option>
                                            <option>1 40 0 1</option>
                                            <option>1 80 0 1</option>
                                            <option>1 160 0 1</option>
                                            <option value="other">Другое</option>
                                        </select></p>
                                        <div id="otherField" style="display: none;">
                                            <label for="otherInput">Другое:</label>
                                            <input type="text" name="otherInput">
                                        </div>
                                                                               
                                        <input class="btn btn-success my-3" style="font-famility:Goudy Stout" type="submit" value="Calculate" name="add">
                                        <?php
                                          if (isset($_SESSION['message']))
                                          {
                                              echo '<p class="msg">'  . $_SESSION['message'] .  '</p>';
                                          }
                                          unset($_SESSION['message']);
                                        ?>
                                    </form>
                                </div>
                                </div>
                                <div class="col"></div>
                              </div>
                          </div>
                      </div>
                    </div>
              </div>
          </div>
      </div>
    </main>
    <footer class ="sticky-bottom">&copy 2023 НГТУ </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    
    </body>
</html>