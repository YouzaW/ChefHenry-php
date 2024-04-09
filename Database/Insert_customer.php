<?php
require_once("config.php");


	    $sql1 = "INSERT INTO CUSTOMER(customer_name,customer_phone_no,customer_email,customer_status,people_amount) VALUES ('-',0,'-','-', 0)";
        $sql2 = "INSERT INTO CUSTOMER(customer_name,customer_phone_no,customer_email,customer_status,people_amount) VALUES ('Chok',0165678904,'chokjie@graduate.utm.my','Unseated', 2)";
        $sql3 = "INSERT INTO CUSTOMER(customer_name,customer_phone_no,customer_email,customer_status,people_amount) VALUES ('Yousef',0163335555,'yousef@graduate.utm.my','Unseated', 6)";
        $sql4 = "INSERT INTO CUSTOMER(customer_name,customer_phone_no,customer_email,customer_status,people_amount) VALUES ('Moataz',0162220000,'moataz@graduate.utm.my','Unseated', 6)";
        $sql5 = "INSERT INTO CUSTOMER(customer_name,customer_phone_no,customer_email,customer_status,people_amount) VALUES ('Mohammed',0162345678,'mohammed@graduate.utm.my','Unseated', 2)";
        $sql6 = "INSERT INTO CUSTOMER(customer_name,customer_phone_no,customer_email,customer_status,people_amount) VALUES ('John',0160987654,'john@graduate.utm.my','Unseated', 2)";
        $sql7 = "INSERT INTO CUSTOMER(customer_name,customer_phone_no,customer_email,customer_status,people_amount) VALUES ('Aaron',0167749536,'aarontan@graduate.utm.my','Unseated', 4)";


		if (mysqli_query($conn, $sql1)) {
			echo "New Customer Added successfully" . "<br>" ;
		} else {
			echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql2)) {
			echo "New Customer Added successfully" . "<br>" ;
		} else {
			echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql3)) {
			echo "New Customer Added successfully" . "<br>" ;
		} else {
			echo "Error: " . $sq3 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql4)) {
			echo "New Customer Added successfully" . "<br>" ;
		} else {
			echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql5)) {
			echo "New Customer Added successfully" . "<br>" ;
		} else {
			echo "Error: " . $sql5 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql6)) {
			echo "New Customer Added successfully" . "<br>" ;
		} else {
			echo "Error: " . $sql6 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql7)) {
			echo "New Customer Added successfully" . "<br>" ;
		} else {
			echo "Error: " . $sql7 . "<br>" . mysqli_error($conn);
		}
        

	     mysqli_close($conn);
         
         
?>