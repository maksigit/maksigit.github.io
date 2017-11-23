<?php
if (isset($_POST["send"])) {
    //var_dump($_POST);

    $from = htmlspecialchars($_POST["from"]);
    $email = htmlspecialchars($_POST["email"]);
    $mes = htmlspecialchars($_POST["mes"]);

    $_SESSION["from"] = $from;
    $_SESSION["email"] = $email;
    $_SESSION["mes"] = $mes;

    $error_from = "";
    $error_email = "";
    $error_mes = "";
    $error = false;
    if ($from == "") {
        $error_from = "Введите имя";
        $error = true;
    }
    if ($email == "") {
        $error_email = "Введите Email";
        $error = true;
    }
    if (strlen($mes) == 0) {
        $error_mes = "Введите Сообщение";
        $error = true;
    }
    if(!$error) {
        mail($from, $email, $mes);
        //exit;
    }
}