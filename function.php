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

    function displayContactUsDetails(){

        global $conn;

        $query = "SELECT * from contactus";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result;
    }

    function deleteAdmin($id){

        global $conn;

        $query = "DELETE FROM logindata WHERE Id = '$id'";
        $stmt = $conn->prepare($query);

        if($stmt->execute()){
            header("Location: admin-adminDetails.php");
        }
        
    }

?>