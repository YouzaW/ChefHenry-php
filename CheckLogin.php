<?php
require_once("Database/config.php");
$emails = $_POST["email"];
$passwords = $_POST["password"];

$sql1 = "SELECT * FROM STAFF WHERE staff_email='$emails' AND staff_password='$passwords'";
$result = mysqli_query($conn, $sql1);

/*
        staff_id VARCHAR(5) PRIMARY KEY,
      staff_name VARCHAR(50) NOT NULL,
      staff_password VARCHAR(50) NOT NULL,
      staff_type VARCHAR(20) NOT NULL,
      staff_phone_num INT(15) NOT NULL,
      staff_email VARCHAR(50) NOT NULL,
      staff_address VARCHAR(100) NOT NULL,
      staff_status VARCHAR(20) NOT NULL

      Username and Password
        smith@yahoo.com Smh123
        sakura@yahoo.com IsUse1ess
        arnold@yahoo.com German3hout0
        karen@yahoo.com Now1Mng
        shah@yahoo.com RKDanc3 
        aida@yahoo.com G00dLecturer
*/
if (mysqli_num_rows($result) > 0) {
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) 
	{
		$staffid = $row["staff_id"];
		$staffname = $row["staff_name"];
        $staffpassword = $row["staff_password"];
		$stafftype = $row["staff_type"];
        $staffphonenum = $row["staff_phone_num"];
        $staffemail = $row["staff_email"];
        $staffaddress = $row["staff_address"];
        $staffstatus = $row["staff_status"];
	}
}

$count=mysqli_num_rows($result);

if($count==1){
		
    $_SESSION["Login"] = "YES";
     
    $_SESSION['STAFFID'] = $staffid;
    $_SESSION['STAFFNAME'] = $staffname;
    $_SESSION['STAFFPASSWORD'] = $staffpassword;
    $_SESSION['STAFFTYPE'] = $stafftype;
    $_SESSION['STAFFPHONENUM'] = $staffphonenum;
    $_SESSION['STAFFEMAIL'] = $staffemail;
    $_SESSION['STAFFADDRESS'] = $staffaddress;
    $_SESSION['STAFFSTATUS'] = $staffstatus;
    header('Location: staff.php');
     
    }
    
    else {
    
    $_SESSION["Login"] = "NO";
    header('Location: Relogin.html');
    }
?>
