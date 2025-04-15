<?php 

function validateInput($data) : string {
    return htmlspecialchars(trim($data));
}

function errorMessage() {

}