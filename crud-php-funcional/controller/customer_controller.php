<?php
require_once "./util/functions.php";
require_once "./model/customer.php";

function newCustomer(){
    if (isset($_GET["edit"])) {
        [$id, $name, $surname, $ddd, $phone] = getCustomerById((int)$_GET["edit"]);
        $confirm = true;
        $message = "Clienete alterado com sucesso";
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST["name"])) {
        
        $customer = array(
            "name" => formatInput($_POST["name"]),
            "surname" => formatInput($_POST["surname"]),
            "ddd" => formatInput($_POST["ddd"]),
            "phone" => formatInput($_POST["phone"]),
        );

        if(isset($_POST["id"])){
            editCustomer((int)$_POST["id"], $_POST["name"], $_POST["surname"], $_POST["ddd"], $_POST["phone"]);
        } else {
            createCustomer($customer);
        }
        
        header("location:?page=list");
    }
    require_once "./view/customer_form.php";
}

function listCustomers($delete = null) {
    require_once "./view/customer_view.php";
    
    if(isset($_GET["del"])) {
        $delete = (int)$_GET["del"];
    }
    
    $customers = getCustomers();
    readCustomers($customers, $delete);
}

function removeCustomer() {
    if(isset($_GET["delete"])) {
        deleteCustomer((int)$_GET["delete"]);
        header("location:?page=list");
    }
}