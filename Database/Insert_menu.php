<?php
require_once("config.php");

	    $sql1 = "INSERT INTO Menu(menu_id,menu_name, menu_description, menu_type,menu_price) VALUES ('F01','Chicken Burger', 'Crunchy and savory chicken sandwiched between two puffy buns', 'Food',10.99)";
        $sql2 = "INSERT INTO Menu(menu_id,menu_name, menu_description, menu_type,menu_price) VALUES ('F02','Peperoni Pizza', 'Thick crust pizza topped with sliced peperoni', 'Food',12.99)";
        $sql3 = "INSERT INTO Menu(menu_id,menu_name, menu_description, menu_type,menu_price) VALUES ('F03','Sushi', 'Sticky rice and filling wrapped with seaweed', 'Food',11.59)";
        $sql4 = "INSERT INTO Menu(menu_id,menu_name, menu_description, menu_type,menu_price) VALUES ('F04','Pasta', 'Olive oil pasta with sausages and spice', 'Food',24.99)";
        $sql5 = "INSERT INTO Menu(menu_id,menu_name, menu_description, menu_type,menu_price) VALUES ('S01','Crepe', 'Crispy Crepes filled with sweet fillings and fruit toppings', 'Desert',22.99)";
        $sql6 = "INSERT INTO Menu(menu_id,menu_name, menu_description, menu_type,menu_price) VALUES ('D01','Water', 'Plain Refreshing water', 'Drink',1.99)";
        $sql7 = "INSERT INTO Menu(menu_id,menu_name, menu_description, menu_type,menu_price) VALUES ('D02','Juice', 'Delicious fruits juiced into refreshing drinks', 'Drink',9.99)";
		$sql8 = "INSERT INTO Menu(menu_id,menu_name, menu_description, menu_type,menu_price) VALUES ('D03','SoftDrink', 'Fizzy and cold soft drinks', 'Drink',3.59)";

		
		if (mysqli_query($conn, $sql1)) {
			echo "New Menu created successfully". "<br>" ;
		} else {
			echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql2)) {
			echo "New Menu created successfully". "<br>"  ;
		} else {
			echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql3)) {
			echo "New Menu created successfully". "<br>" ;
		} else {
			echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql4)) {
			echo "New Menu created successfully". "<br>" ;
		} else {
			echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql5)) {
			echo "New Menu created successfully". "<br>" ;
		} else {
			echo "Error: " . $sql5 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql6)) {
			echo "New Menu created successfully". "<br>" ;
		} else {
			echo "Error: " . $sql6 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql7)) {
			echo "New Menu created successfully". "<br>" ;
        }
        else {
			echo "Error: " . $sql7 . "<br>" . mysqli_error($conn);
		}
        if (mysqli_query($conn, $sql8)) {
			echo "New Menu created successfully". "<br>";
		} else {
			echo "Error: " . $sql8 . "<br>" . mysqli_error($conn);
		}
		
        
        

	     mysqli_close($conn);
         
         
?>