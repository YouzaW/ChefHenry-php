<?php
require_once("config.php");

/*staff_id VARCHAR(5) PRIMARY KEY,
staff_name VARCHAR(50) NOT NULL,
staff_type VARCHAR(20) NOT NULL,
staff_phone_num INT(15) NOT NULL,
staff_email VARCHAR(50) NOT NULL,
staff_address VARCHAR(100) NOT NULL,
staff_status VARCHAR(20) NOT NULL
*/
	    $sql1 = "INSERT INTO STAFF(staff_id,staff_name, staff_password, staff_type,staff_phone_num,staff_email,staff_address,staff_status) VALUES ('WT001','Smith', 'Smh123','Waiter','0114567777','smith@yahoo.com','Block A, Jalan America 1, Taman States, California', 'OnDuty')";
        $sql2 = "INSERT INTO STAFF(staff_id,staff_name, staff_password, staff_type,staff_phone_num,staff_email,staff_address,staff_status) VALUES ('WT002','Sakura', 'IsUse1ess','Waiter','0116548888','sakura@yahoo.com','Block B, Jalan Japan 11, Taman Nihon, Kyoto', 'OffDuty')";
        $sql3 = "INSERT INTO STAFF(staff_id,staff_name, staff_password, staff_type,staff_phone_num,staff_email,staff_address,staff_status) VALUES ('WT003','Schwarzenegger', 'German3hout','Waiter','0164267877','arnold@yahoo.com','Block C, Jalan Austria 2, Taman America, Thal', 'OnDuty')";
        $sql4 = "INSERT INTO STAFF(staff_id,staff_name, staff_password, staff_type,staff_phone_num,staff_email,staff_address,staff_status) VALUES ('MN001','Karen', 'Now1Mng','Manager','0166547777','karen@yahoo.com','Block D, Jalan America 4, Taman States, California', 'OnDuty')";
        $sql5 = "INSERT INTO STAFF(staff_id,staff_name, staff_password, staff_type,staff_phone_num,staff_email,staff_address,staff_status) VALUES ('SP001','Rukh Khan', 'RKDanc3','Supervisor','0113542343','shah@yahoo.com','Block E, Jalan India 1, Taman Kumar, New Dehli', 'OnDuty')";
        $sql6 = "INSERT INTO STAFF(staff_id,staff_name, staff_password, staff_type,staff_phone_num,staff_email,staff_address,staff_status) VALUES ('OW001','Dr Aida', 'G00dLecturer','Owner','0115568777','aida@yahoo.com','Block F, Jalan Malaysia 1, Taman Johor Bahru, Johor', 'OffDuty')";



		if (mysqli_query($conn, $sql1)) {
			echo "New Staff Added successfully" . "<br>" ;
		} else {
			echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql2)) {
			echo "New Staff Added successfully" . "<br>" ;
		} else {
			echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql3)) {
			echo "New Staff Added successfully" . "<br>" ;
		} else {
			echo "Error: " . $sq3 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql4)) {
			echo "New Staff Added successfully" . "<br>" ;
		} else {
			echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql5)) {
			echo "New Staff Added successfully" . "<br>" ;
		} else {
			echo "Error: " . $sql5 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql6)) {
			echo "New Staff Added successfully" . "<br>" ;
		} else {
			echo "Error: " . $sql6 . "<br>" . mysqli_error($conn);
		}

        

	     mysqli_close($conn);
         
         
?>