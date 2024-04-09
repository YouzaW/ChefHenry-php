<?php
require_once("Database/config.php");

    $tableNo = $_POST["tableNumber"];

    $sqlDltOdr = "DELETE FROM ORDERS WHERE table_no='$tableNo' AND staff_id is NULL";

    if(mysqli_query($conn, $sqlDltOdr))
    {
        echo "Record updated successfully";
    } 

    else 
    {
        echo "Error: " . $sqlDltOdr . "<br>" . mysqli_error($conn);
    }

    $sqlSetUnocccupied = "UPDATE TABLES SET customer_no = 1, table_status = 'UNOCCUPIED' WHERE table_no = '$tableNo'";
    
    if(mysqli_query($conn, $sqlSetUnocccupied))
    {
        echo "Record updated successfully";
        header('Location: Staff.php');
    } 

    else 
    {
        echo "Error: " . $sqlSetUnocccupied . "<br>" . mysqli_error($conn);
    }

    
    mysqli_close($conn);
?>