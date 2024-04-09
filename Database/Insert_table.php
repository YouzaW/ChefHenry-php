<?php
require_once("config.php");

		$sql = "SET GLOBAL FOREIGN_KEY_CHECKS=0;";
	    $sql1 = "INSERT INTO TABLES(table_no, table_type, table_capacity, table_status,customer_no) VALUES (1, 'LONG', 8, 'UNOCCUPIED',1)";
        $sql2 = "INSERT INTO TABLES(table_no, table_type, table_capacity, table_status,customer_no) VALUES (2, 'LONG', 8, 'UNOCCUPIED',1)";
        $sql3 = "INSERT INTO TABLES(table_no, table_type, table_capacity, table_status,customer_no) VALUES (3, 'LONG', 8, 'UNOCCUPIED',1)";
        $sql4 = "INSERT INTO TABLES(table_no, table_type, table_capacity, table_status,customer_no) VALUES (4, 'LONG', 8, 'UNOCCUPIED',1)";
        $sql5 = "INSERT INTO TABLES(table_no, table_type, table_capacity, table_status,customer_no) VALUES (5, 'SMALL', 4, 'UNOCCUPIED',1)";
        $sql6 = "INSERT INTO TABLES(table_no, table_type, table_capacity, table_status,customer_no) VALUES (6, 'SMALL', 4, 'UNOCCUPIED',1)";
        $sql7 = "INSERT INTO TABLES(table_no, table_type, table_capacity, table_status,customer_no) VALUES (7, 'SMALL', 4, 'UNOCCUPIED',1)";
		$sql8 = "SET GLOBAL FOREIGN_KEY_CHECKS=1;";

		if (mysqli_query($conn, $sql)) {
			echo "Connected Successfully" . "<br>" ;
		} else {
			echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
		}
		if (mysqli_query($conn, $sql1)) {
			echo "New Table created successfully" . "<br>" ;
		} else {
			echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql2)) {
			echo "New Table created successfully" . "<br>" ;
		} else {
			echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql3)) {
			echo "New Table created successfully" . "<br>" ;
		} else {
			echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql4)) {
			echo "New Table created successfully" . "<br>" ;
		} else {
			echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql5)) {
			echo "New Table created successfully" . "<br>" ;
		} else {
			echo "Error: " . $sql5 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql6)) {
			echo "New Table created successfully" . "<br>" ;
		} else {
			echo "Error: " . $sql6 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql7)) {
			echo "New Table created successfully" . "<br>" ;
			if (mysqli_query($conn, $sql8)) {
			echo "Disconneced Successfully";
		} else {
			echo "Error: " . $sql8 . "<br>" . mysqli_error($conn);
		}
		} else {
			echo "Error: " . $sql7 . "<br>" . mysqli_error($conn);
		}
		
        
        

	     mysqli_close($conn);
         
         
?>