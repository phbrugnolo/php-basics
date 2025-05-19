<?php
require_once "./model/conn.php";

function createCustomer($customer){
    $pdo = getConn();
    $stmt = $pdo->prepare("INSERT INTO customers VALUES(null, ?, ?, ?, ?)");
    $stmt->execute(array_values($customer));
    return $pdo->lastInsertId();
}

function getCustomers() {
    $pdo = getConn();
    $stmt = $pdo->prepare("SELECT * FROM customers ORDER BY name");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getCustomerById(int $id) {
    $pdo = getConn();
    $stmt = $pdo->prepare("SELECT * FROM customers WHERE id = :id");
    $stmt->execute(array(':id' => $id));
    return $stmt->fetch(PDO::FETCH_NUM);
}

function deleteCustomer(int $id) {
    $pdo = getConn();
    $pdo->exec("DELETE FROM customers WHERE id = $id");
}

function editCustomer($id, $name, $surname, $ddd, $phone) {
    $pdo = getConn();
    $stmt = $pdo->prepare("UPDATE customers SET name = :name, surname = :surname, ddd = :ddd, phone = :phone WHERE id = :id");
    $stmt->execute([
        ':name' => $name,
        ':surname' => $surname,
        ':ddd' => $ddd,
        ':phone' => $phone,
        ':id' => $id
    ]);
}