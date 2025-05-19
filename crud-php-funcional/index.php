<?php
$page = $_GET["page"] ?? "home";
require_once "./controller/customer_controller.php";
?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>
    <?php 
    echo match($page){
        "home" => "Início",
        "create" => "Novo Cliente",
        "list" => "Lista",
        default => "Não Encontrado"
    }
    ?>
    </title>
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav>
            <?php require_once("./menu.php"); ?>
        </nav>
    </header>
    <main>
    <?php
    match($page){
        "home" => require_once "./view/home.php",
        "create" => newCustomer(),
        "list" => listCustomers(),
        "delete" => removeCustomer(),
        default => require_once "./view/404.php",
    };
    ?>
    </main>
    <footer>
        <small>
            Copyright &copy; - 2025
        </small>
    </footer>
</body>
</html>
