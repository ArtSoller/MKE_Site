<?php
    exec('Project1.exe > output.txt');
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
                          <li><a class="dropdown-item" href="MKE1.php">Биквадр базис прямоуг Парабол Кранк</a></li>
                          <li><a class="dropdown-item" href="MKE2.php">МКЭ 2</a></li>
                          <li><a class="dropdown-item" href="MKE3.php">МКЭ 3</a></li>
                        </ul>
                    </li>

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="about.html">О нас</a>
              </li>            
            </ul>
          </div>

        </div>
    </nav>

    <h1>Результат выполнения exe-файла</h1>
    <textarea rows="20" cols="25">
        <?php
            // Читаем данные из txt-файла
            $fileContents = file_get_contents('output.txt');
            echo $fileContents;
        ?>
    </textarea>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>