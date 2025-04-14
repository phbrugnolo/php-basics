<?php $page = $_GET["page"] ?? "home" ?>
<!DOCTYPE html>
<html lang="pt-br">
<?php require_once "./head.php"; ?>

<body>
    <?php require_once "./header.php"; ?>
    <main>
        <?php require_once match ($page) {
            "home" => "./pages/home.php",
            "table" => "./pages/table.php",
            "form" => "./pages/form.php",
            default => "./pages/404.php"
        }; ?>
    </main>
    <?php require_once "./footer.php"; ?>
</body>

</html>