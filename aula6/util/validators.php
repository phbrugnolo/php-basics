<?php 
    function validateInput($data) : string {
        $data = trim($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>