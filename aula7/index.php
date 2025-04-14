<?php 
$page = $_GET["page"] ?? "home";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 7</title>
    <link rel="stylesheet" href="./assets/stylesheets/style.css">
</head>
<body>
    <?php 
    require_once './components/header.php';
    require_once './components/menu.php';
    echo "<main>";
    require_once match($page) {
        "home" => "./views/home.php",
        "form" => "./views/form.php",
        "table" => "./views/table.php",
        default => "./views/404.php"
    };
    echo "</main>";
    require_once './components/footer.php';
    ?>
</body>
</html>