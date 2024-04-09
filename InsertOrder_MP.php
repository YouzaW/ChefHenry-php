<?php

    session_start();
    require_once("Database/config.php");

    $orderQty1 = $_POST["burger"];
    $orderQty2 = $_POST["pizza"];
    $orderQty3 = $_POST["sushi"];
    $orderQty4 = $_POST["pasta"];
    $orderQty5 = $_POST["crepe"];
    $orderQty6 = $_POST["water"];
    $orderQty7 = $_POST["juice"];
    $orderQty8 = $_POST["soft"];

    $orderPrice1 = $_POST["burgerAmt"];
    $orderPrice2 = $_POST["pizzaAmt"];
    $orderPrice3 = $_POST["sushiAmt"];
    $orderPrice4 = $_POST["pastaAmt"];
    $orderPrice5 = $_POST["crepeAmt"];
    $orderPrice6 = $_POST["waterAmt"];
    $orderPrice7 = $_POST["juiceAmt"];
    $orderPrice8 = $_POST["softAmt"];

    

    //$totalAmountOrdered = $_POST["totalAmt"];
    
    $tableNum = $_POST["tableNo"];

    if(isset($_SESSION['CUSTOMERNAME'])) {
        $customName = $_SESSION['CUSTOMERNAME']; 
        $customPhone = $_SESSION['CUSTOMERPHONE']; 
        $customMail = $_SESSION['CUSTOMEREMAIL']; 
        $customAmount = $_SESSION['CUSTOMERAMOUNT'];
        }
    

    //$sql1 = "SELECT * FROM CUSTOMER WHERE customer_name='$customName' AND customer_email='$customMail' AND customPhone = $customPhone";
    $sql1 = "SELECT * FROM CUSTOMER";
    $result3 = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($result3) > 0) {

        while($row = mysqli_fetch_assoc($result3)) 
        {
            $customerNumber = $row["customer_no"];
            
        }
    }


    $sql2 = "UPDATE TABLES SET customer_no = '$customerNumber', table_status = 'OCCUPIED' WHERE table_no = '$tableNum'";
    $result2 = mysqli_query($conn, $sql2);

    if($orderQty1 > 0)
    {
        $sqlOrder1 = "INSERT INTO orders(order_quantity, order_description, order_price, table_no, menu_id, staff_id) VALUES('$orderQty1', '-', '$orderPrice1', '$tableNum', 'F01', NULL)";
        if(mysqli_query($conn, $sqlOrder1))
        {
            echo "New record created successfully";
        } 

        else 
        {
            echo "Error: " . $sqlOrder1 . "<br>" . mysqli_error($conn);
        }
    }

    if($orderQty2 > 0)
    {
        $sqlOrder2 = "INSERT INTO orders(order_quantity, order_description, order_price, table_no, menu_id, staff_id) VALUES('$orderQty2', '-', '$orderPrice2', '$tableNum', 'F02', NULL)";
        if(mysqli_query($conn, $sqlOrder2))
        {
            echo "New record created successfully";
        } 

        else 
        {
            echo "Error: " . $sqlOrder2 . "<br>" . mysqli_error($conn);
        }
    }

    if($orderQty3 > 0)
    {
        $sqlOrder3 = "INSERT INTO orders(order_quantity, order_description, order_price, table_no, menu_id, staff_id) VALUES('$orderQty3', '-', $orderPrice3, $tableNum, 'F03', NULL)";
        if(mysqli_query($conn, $sqlOrder3))
        {
            echo "New record created successfully";
        } 

        else 
        {
            echo "Error: " . $sqlOrder3 . "<br>" . mysqli_error($conn);
        }
    }

    if($orderQty4 > 0)
    {
        $sqlOrder4 = "INSERT INTO orders(order_quantity, order_description, order_price, table_no, menu_id, staff_id) VALUES('$orderQty4', '-', $orderPrice4, $tableNum, 'F04', NULL)";
        if(mysqli_query($conn, $sqlOrder4))
        {
            echo "New record created successfully";
        } 

        else 
        {
            echo "Error: " . $sqlOrder4 . "<br>" . mysqli_error($conn);
        }
    }

    if($orderQty5 > 0)
    {
        $sqlOrder5 = "INSERT INTO orders(order_quantity, order_description, order_price, table_no, menu_id, staff_id) VALUES('$orderQty5', '-', $orderPrice5, $tableNum, 'S01', NULL)";
        if(mysqli_query($conn, $sqlOrder5))
        {
            echo "New record created successfully";
        } 

        else 
        {
            echo "Error: " . $sqlOrder5 . "<br>" . mysqli_error($conn);
        }
    }

    if($orderQty6 > 0)
    {
        $sqlOrder6 = "INSERT INTO orders(order_quantity, order_description, order_price, table_no, menu_id, staff_id) VALUES('$orderQty6', '-', $orderPrice6, $tableNum, 'D01', NULL)";
        if(mysqli_query($conn, $sqlOrder6))
        {
            echo "New record created successfully";
        } 

        else 
        {
            echo "Error: " . $sqlOrder6 . "<br>" . mysqli_error($conn);
        }
    }

    if($orderQty7 > 0)
    {
        $sqlOrder7 = "INSERT INTO orders(order_quantity, order_description, order_price, table_no, menu_id, staff_id) VALUES('$orderQty7', '-', $orderPrice7, $tableNum, 'D02', NULL)";
        if(mysqli_query($conn, $sqlOrder7))
        {
            echo "New record created successfully";
        } 

        else 
        {
            echo "Error: " . $sqlOrder7 . "<br>" . mysqli_error($conn);
        }
    }

    if($orderQty8 > 0)
    {
        $sqlOrder8 = "INSERT INTO orders(order_quantity, order_description, order_price, table_no, menu_id, staff_id) VALUES('$orderQty8', '-', $orderPrice8, $tableNum, 'D03', NULL)";
        if(mysqli_query($conn, $sqlOrder8))
        {
            echo "New record created successfully";
        } 

        else 
        {
            echo "Error: " . $sqlOrder8 . "<br>" . mysqli_error($conn);
        }
    }

    

    /*$sqlFindTable = "SELECT * FROM TABLES WHERE table_no='$tableNum'";
    $result = mysqli_query($conn, $sqlFindTable);
    
    $count=mysqli_num_rows($result);

    if($count==1)
    {
        $sqlTotalAmountOrdered = "UPDATE TABLES SET order_total_amount = $totalAmountOrdered WHERE table_no='$tableNum'";
        if(mysqli_query($conn, $sqlTotalAmountOrdered))
        {
            echo "Record updated successfully";
        } 

        else 
        {
            echo "Error: " . $sqlTotalAmountOrdered . "<br>" . mysqli_error($conn);
        }
    }

    if($totalAmountOrdered > 0)
    {
        $sqlTotalAmountOrdered = "INSERT INTO table(order_total_amount) VALUES($totalAmountOrdered)";
        if(mysqli_query($conn, $sqlTotalAmountOrdered))
        {
            echo "New record created successfully";
        } 

        else 
        {
            echo "Error: " . $sqlTotalAmountOrdered . "<br>" . mysqli_error($conn);
        }
    }
    */

    mysqli_close($conn);
    header('Location: main_page.php');
?>