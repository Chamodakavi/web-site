<?php

    include "connection.php";

    function displayLoginData(){

        global $conn;

        $query = "SELECT * from logindata";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result;
    }

?>