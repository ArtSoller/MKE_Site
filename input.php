<?php
    session_start();

    include 'connect_users.php';

    
    if (isset($_POST["add"]) && isset($_POST["Nn"]) && isset($_POST["XY"]) && isset($_POST["Ne"]) && isset($_POST["elems"])) 
    {
        $k=0;
        for ($i = 0; $i<(strlen($_POST["Nn"])); $i++)
            if ($_POST["Nn"][$i] == ' ')
                $k++;
        $Nn_flag = $k;

        $k=0;
        for ($i = 0; $i<(strlen($_POST["XY"])); $i++)
            if ($_POST["XY"][$i] == ' ')
                $k++;
        $Nn = ++$k;

        $k=0;
        for ($i = 0; $i<(strlen($_POST["Ne"])); $i++)
            if ($_POST["Ne"][$i] == ' ')
                $k++;
        $Ne_flag = $k;

        $k=0;
        for ($i = 0; $i<(strlen($_POST["elems"])); $i++)
        {
            if ($_POST["elems"][$i] == ' ')
                $k++;
            if ($_POST["elems"][$i] == "\r")
                $k++;
        }
        $Ne = ++$k;

        if ($Nn_flag != 0)
        {
            $_SESSION['message'] = "Неверное количество координат. При вводе количества введено более одного числа или нажат пробел";
            header("Location: MKE1.php");
            die();
        }

        if ($Nn % 2 == 1)
        {
            $_SESSION['message'] = "Нечетное количество чисел при указании координат. Их количество должно быть четным";
            header("Location: MKE1.php");
            die();
        }

        if ($Nn / 2 != $_POST["Nn"])
        {
            $_SESSION['message'] = "Неверное количество координат. Их количество должно быть равно числу, введенному в поле 'Количество точек'";
            header("Location: MKE1.php");
            die();
        }

        if ($Ne_flag != 0)
        {
            $_SESSION['message'] = "Неверное количество элементов. При вводе количества введено более одного числа или нажат пробел";
            header("Location: MKE1.php");
            die();
        }

        if ($Ne % 10 != 0)
        {
            $_SESSION['message'] = "Неверное количество чисел при указании элементов. Их количество должно быть кратно 10";
            header("Location: MKE1.php");
            die();
        }

        if ($Ne / 10 != $_POST["Ne"])
        {
            $_SESSION['message'] = "Неверное количество элементов. Их количество должно быть равно числу, введенному в поле 'Количество элементов'";
            header("Location: MKE1.php");
            die();
        }
        
        $f = fopen('XY.txt', 'w'); // Открываем файл
        fwrite($f, $_POST["Nn"]. "\n"); // Записываем количество координат
        fwrite($f, $_POST["XY"]. "\n"); // Записываем координаты ХY
        fclose($f); // Закрываем 
        
        $f = fopen('elems.txt', 'w'); // Открываем файл
        fwrite($f, $_POST["Ne"]. "\n"); // Записываем количество координат
        fwrite($f, $_POST["elems"]. "\n"); // Записываем координаты ХY
        fclose($f); // Закрываем файл

        $selectedOption = $_POST["variant_time"];
        $f = fopen('time_mesh_var.txt', 'w'); // Открываем файл
        if ($selectedOption == "other") {
            $otherInput = $_POST["otherInput"];
            $k=0;
            for ($i = 0; $i<(strlen($otherInput)); $i++)
                if ($otherInput[$i] == ' ')
                    $k++;
            $other_flag = $k;
            if ($other_flag != 4)
            {
                $_SESSION['message'] = "Неверное разбиение по времени. При выборе варианта 'Другое' введено не 4 числа";
                header("Location: MKE1.php");
                die();
            }
            fwrite($f, $otherInput. "\n"); // Записываем количество координат
        } else {
            fwrite($f, $_POST["variant_time"]. "\n"); // Записываем количество координат
        }           
        fclose($f); // Закрываем файл        
    
        header("Location: solver.php");
        // header("Location: MKE1.php");
        die();
    }
    else
    {
        echo "Некоторые поля не заполнены";
    }
?>