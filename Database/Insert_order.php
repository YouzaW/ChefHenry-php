<?php
require_once("config.php");

/*
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
*/
	    $sql1 = "INSERT INTO ORDERS(order_quantity,order_description,order_price,table_no,menu_id,staff_id) VALUES (3,'NO SPICY',74.97,1,'F03',NULL)";




		if (mysqli_query($conn, $sql1)) {
			echo "New Order Added successfully" . "<br>" ;
		} else {
			echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
		}
        
        

	     mysqli_close($conn);
         
         
?>