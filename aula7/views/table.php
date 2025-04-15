<?php
require_once "./helpers/validators.php";
if (isset($_POST["name"])) {
    $attributes = ["name", "email", "password", "confirm-password", "birthday", "birthday-time", "gender"];
    [$name, $email, $password, $confirmPassword, $birthday, $birthdayTime, $gender] = array_map(fn($key) => validateInput($_POST[$key]), $attributes);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "<div class=\"error-message\">Invalid E-mail</div>";
        $email = "";
    }
}
?>
<?php if(isset($errors)) foreach($errors as $e) echo $e ?>
<h2>Table</h2>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Password</th>
            <th>Birthday</th>
            <th>Age</th>
            <th>Period</th>
            <th>Gender</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $name ?? "" ?></td>
            <td><?= $email ?? "" ?></td>
            <td><?= $password ?? "" ?></td>
            <td><?= $birthday ?? "" ?></td>
            <td><?= "" ?></td>
            <td><?= "" ?></td>
            <td><?= $gender ?? "" ?></td>
        </tr>
    </tbody>
</table>
