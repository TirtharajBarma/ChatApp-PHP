<?php
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

    $sql =  mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%') ");
    $output = "";

    // if user found redirect to data.php
    if(mysqli_num_rows($sql) > 0){
        include "data.php";
    }else{
        $output .= 'No user found related to your search term';
    }
    echo $output;

    // echo $searchTerm
    // echo "hello testing"
?>