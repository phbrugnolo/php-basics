<?php
require_once "./util/validators.php";

if (isset($_GET["name"])) {
    $attributes_map = ["name", "email", "age", "city", "state"];
    [$name, $email, $age, $city, $state] = array_map(fn($key) => validateInput($_GET[$key]), $attributes_map);
}
?>

<h1>Table</h1>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Age</th>
            <th>City</th>
            <th>State</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $name ?? ""; ?></td>
            <td><?= $email ?? ""; ?></td>
            <td><?= $age ?? ""; ?></td>
            <td><?= $state ?? ""; ?></td>
            <td><?= $city ?? ""; ?></td>
        </tr>
    </tbody>
</table>
