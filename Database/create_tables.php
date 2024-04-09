<?php
    require_once("config.php");


  $sql1 = "CREATE TABLE CUSTOMER(
        customer_no INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      customer_name VARCHAR(50) NOT NULL,
      customer_phone_no INT(15) NOT NULL,
      customer_email VARCHAR(50) NOT NULL,
      customer_status VARCHAR(20) NOT NULL,
      customer_payment_date DATE NOT NULL,
      people_amount INT(3) NOT NULL
  )";
  
  $sql2 = "CREATE TABLE MENU(
        menu_id VARCHAR(3) PRIMARY KEY,
      menu_name VARCHAR(50) NOT NULL,
      menu_description VARCHAR(100) NOT NULL,
      menu_type VARCHAR(20) NOT NULL,
      menu_price DOUBLE(4,2) UNSIGNED NOT NULL
  )";
  
  $sql3 = "CREATE TABLE STAFF(
      staff_id VARCHAR(5) PRIMARY KEY,
      staff_name VARCHAR(50) NOT NULL,
      staff_password VARCHAR(50) NOT NULL,
      staff_type VARCHAR(20) NOT NULL,
      staff_phone_num INT(15) NOT NULL,
      staff_email VARCHAR(50) NOT NULL,
      staff_address VARCHAR(100) NOT NULL,
      staff_status VARCHAR(20) NOT NULL
  )";
  
  $sql4 = "CREATE TABLE TABLES(
      table_no INT(2) PRIMARY KEY,
      table_type VARCHAR(20) NOT NULL,
      table_capacity INT(3) NOT NULL,
      table_status VARCHAR(20) NOT NULL,
      customer_no INT(5) UNSIGNED AUTO_INCREMENT,
      CONSTRAINT fk_cus_no FOREIGN KEY (customer_no) REFERENCES CUSTOMER(customer_no)
  )";
  
  
  $sql5 = "CREATE TABLE ORDERS(
    order_id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      order_quantity INT(3) NOT NULL,
      order_description VARCHAR(100) NOT NULL,
      order_price DOUBLE(4,2) UNSIGNED NOT NULL,
      table_no INT(2),
      menu_id VARCHAR(3),
      staff_id VARCHAR(5),
      CONSTRAINT fk_tab_no FOREIGN KEY (table_no) REFERENCES TABLES(table_no),
      CONSTRAINT fk_men_id FOREIGN KEY (menu_id) REFERENCES MENU(menu_id),
      CONSTRAINT fk_sta_id FOREIGN KEY (staff_id) REFERENCES STAFF(staff_id)
  )";
  

    if (mysqli_query($conn, $sql1)) {
      echo "Table created successfully";
    }
    else {
      echo "\nError creating table: " . mysqli_error($conn) . "<br>";
    }
    if (mysqli_query($conn, $sql2)) {
      echo "Table created successfully";
    } else {
      echo "\nError creating table: " . mysqli_error($conn) . "<br>";
    }

    if (mysqli_query($conn, $sql3)) {
      echo "\nTable created successfully";
    } else {
      echo "\nError creating table: " . mysqli_error($conn) . "<br>";
    }

    if (mysqli_query($conn, $sql4)) {
      echo "\nTable created successfully";
    } else {
      echo "\nError creating table: " . mysqli_error($conn) . "<br>";
    }

    if (mysqli_query($conn, $sql5)) {
      echo "\nTable created successfully";
    } else {
      echo "\nError creating table: " . mysqli_error($conn) . "<br>";
    }

    mysqli_close($conn);
?>