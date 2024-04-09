<?php
    session_start();
    require_once("Database/config.php");

    $custName = $_POST["cName"];
    $custPhone = $_POST["cPhoneN"];
    $custEmail = $_POST["cEmail"];
    $custAmount = $_POST["cAmt"];

    $sqlCustomer = "INSERT INTO customer(customer_name, customer_phone_no, customer_email, customer_status, people_amount) 
    VALUES('$custName', $custPhone, '$custEmail', '-', $custAmount)";

    if(mysqli_query($conn, $sqlCustomer))
    {
        echo('<script type="text/javascript">
        window.alert("New record created successfully")
        </script>');
        mysqli_close($conn);
        
        $_SESSION["REGISTER"] = "YES";
     
        $_SESSION['CUSTOMERNAME'] = $custName;
        $_SESSION['CUSTOMERPHONE'] = $custPhone;
        $_SESSION['CUSTOMEREMAIL'] = $custEmail;
        $_SESSION['CUSTOMERAMOUNT'] = $custAmount;
        header('Location: main_page.php');
    } 

    else 
    {
        echo "Error: " . $sqlCustomer . "<br>" . mysqli_error($conn);
        mysqli_close($conn);
        header('Location: CustomerRegister.html');
    }

    
?>