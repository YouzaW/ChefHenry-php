<?php
    session_start();
?>

<html>

<head>
    <title>CHEF HENRY RIBS HOUSE BOOKING PAGE</title>


    <style>
        @import url("https://fonts.googleapis.com/css?family=Lato&display=swap");
        * {
            box-sizing: border-box;
        }
        
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: "Lato", sans-serif;
            margin: 0;
            background-image: url('images/Background.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        
        .menu {
            position: relative;
            width: 100%;
            font-size: 120%;
        }
        
        nav {
            display: flex;
            width: 84%;
            margin: auto;
            padding: 20px 0;
            align-items: center;
            justify-content: space-between;
        }
        
        nav ul li {
            display: inline-block;
            list-style: none;
            margin: 10px 20px;
        }
        
        nav ul li a {
            display: inline-block;
            color: white;
            font-weight: bold;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        
        nav ul li a:hover {
            color: coral;
        }
        
        .container {
            perspective: 1000px;
            margin-bottom: 30px;
            width: 80%;
        }
        
        .tables {
            position: relative;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        
        img {
            margin-top: -10px;
        }
        
        .tables.sold {
            background-color: #fff;
        }
        
        .tables:nth-of-type(2) {
            margin-right: 30px;
        }
        
        .tables:nth-last-of-type(2) {
            margin-left: 30px;
        }
        
        .tables:not(.sold):hover {
            cursor: pointer;
            transform: scale(1.2);
        }
        
        .showcase .tables:not(.sold):hover {
            cursor: default;
            transform: scale(1);
        }
        
        .showcase {
            background: rgba(0, 0, 0, 0.1);
            padding: 5px 10px;
            border-radius: 5px;
            color: #fff;
            list-style-type: none;
            display: flex;
            justify-content: space-between;
        }
        
        .showcase li {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 10px;
        }
        
        .showcase li small {
            margin-left: 2px;
        }
        
        .row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(70px, 1fr));
            grid-gap: 30px;
            justify-items: center;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .screen {
            background-color: #fff;
            height: 120px;
            width: 100%;
            margin: 15px 0;
            transform: rotateX(-48deg);
            box-shadow: 0 3px 10px rgba(255, 255, 255, 0.7);
        }
        
        p.text {
            color: whitesmoke;
            margin: 5px 0;
        }
        
        p.text span {
            color: aqua;
        }
        
        #entrance {
            margin: 10hw;
            height: 8vh;
            width: 10vw;
            background-color: coral;
            border: 2px solid black;
            display: flex;
            justify-content: space-around;
            align-items: center;
            position: relative;
            z-index: 1;
        }
        
        #counter {
            margin: 10hw;
            height: 8vh;
            width: 24vw;
            background-color: coral;
            border: 2px solid black;
            display: flex;
            justify-content: space-around;
            align-items: center;
            position: relative;
            z-index: 1;
        }
        
        button {
            all: unset;
        }
        
        button:hover {
            cursor: pointer;
        }
        
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Adjust the transparency here */
            z-index: -1;
        }
        
        #popupContainer {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            overflow: auto;
            padding: 50px 0;
            z-index: 9999;
        }
        
        #popupContent {
            position: relative;
            top: 50%;
            left: 15%;
            transform: translate(-50%, -50%);
            width: 70%;
            max-width: 500px;
            padding: 20px;
            background-color: #fff;
            border-radius: 15px;
            text-align: center;
            margin: 0 auto;
            overflow-y: auto;
            /* Enable vertical scrolling */
            max-height: 80vh;
        }
        
        #orderdetailscontainer {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            overflow: auto;
            /* Add overflow property */
            padding: 50px 0;
            /* Add padding to create space for the scroll bar */
        }
        
        #orderdetailcontent {
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 600px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            text-align: center;
        }
        
        #closeBtn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        #nextBtn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: blue;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        #orderdetailscontainer {
            position: absolute;
            z-index: 2;
        }

        .borders {
            border: yellow solid 3px;
        }
        
        .hidden {
            display: none;
        }
    </style>

    <script>
    </script>







</head>

<body style=" background-image: url('images/Background.jpg');
background-size: cover;
background-position: center; 
background-repeat: no-repeat;">

    <div class="menu">

        <nav>
            <img src="images/logo.png" alt="This is a logo for my website" class="logo" style="height: 12%; width: 12%;" />

            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="About.html" target="_blank">ABOUT</a></li>
            </ul>

        </nav>
    </div>



    <h2 style="color: beige;"><b>Please, select a table</b></h2>



    <div id="entrance">
        <h3><b>ENTRANCE</b></h3>
    </div>

    <div class="overlay"></div>

    <div class="container">
        <div class="row">
            <div class="tables">
                <button id="table1" name="t1" onclick="setTableNo1()">
                    <h3><b><img src="images/small-1.png" height="100" width="120"></b></h3>
                </button>
            </div>

            <div class="tables">
                <button id="table2" name="t2" onclick="setTableNo2()">
                    <h3><b><img src="images/small-1.png" height="100" width="120"></b></h3>
                </button>
            </div>

            <div class="tables">
                <button id="table3" name="t3" onclick="setTableNo3()">
                    <h3><b><img src="images/small-1.png" height="100" width="120"></b></h3>
                </button>
            </div>

            <div class="tables">
                <button id="table4" name="t4" onclick="setTableNo4()">
                    <h3><b><img src="images/small-1.png" height="100" width="120"></b></h3>
                </button>
            </div>
        </div>

        <div class="row">
            <div class="tables">
                <button id="table5" name="t5" onclick="setTableNo5()">
                    <h3><b><img src="images/small-1.png" height="100" width="120"></b></h3>
                </button>
            </div>


            <div class="tables">
                <button id="table6" name="t6" onclick="setTableNo6()">
                    <h3><b><img src="images/small-1.png" height="100" width="120"></b></h3>
                </button>
            </div>


            <div class="tables">
                <button id="table7" name="t7" onclick="setTableNo7()">
                    <h3><b><img src="images/small-1.png" height="100" width="120"></b></h3>
                </button>
            </div>

        </div>

    </div>

    <div id="counter">
        <h3><b>COUNTER</b></h3>
    </div>



    <div id="popupContainer" class="hidden">
        <div id="popupContent">
            <form id="billout" name="bill" method="post" action="BillCustomer.php">
            <input type="text" id="tableNum" name = "tableNumber" value ="0">
            <h3><b>Order Summary for This Table</b></h3>
            <h4>The order is as following :</h4>
            <table>
                <thead>
                    <tr>
                    <th>Order ID</th>
                    <th>Quantity</th>
                    <th>Order Price</th>
                    <th>Table Number</th>
                    <th>Menu ID</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                        require_once("Database/config.php");
                        $tableNo = 1; 
                        //To take the table number then select the order with the table number on it and display the order in the bill interface in tabular form

                        $totalAmount = 0;

                        $sqlFindOrder = "SELECT * FROM ORDERS WHERE table_no='$tableNo' AND staff_id is NULL";
                        $result = mysqli_query($conn, $sqlFindOrder);

                        if (mysqli_num_rows($result) > 0)
                        {
                            while($row = mysqli_fetch_assoc($result)) 
                            {
                                echo "
                                <tr>
                                    <td>$row[order_id]</td>
                                    <td>$row[order_quantity]</td>
                                    <td>$row[order_price]</td>
                                    <td>$row[table_no]</td>
                                    <td>$row[menu_id]</td>
                                </tr>
                                ";
                            }
                        }

                        else 
                        {
                            echo "0 results";
                        }
?>
                </tbody>
            </table>
            <br>
            <?php
                $tableNo = 1; 
                $sqlTotal = "SELECT SUM(order_price) AS total_Amount FROM ORDERS WHERE table_no='$tableNo' AND staff_id is NULL";

                $resultTotal = mysqli_query($conn, $sqlTotal);
                $row = mysqli_fetch_assoc($resultTotal);

                if (mysqli_num_rows($resultTotal) > 0)
                {
                    
                    echo "The Total Amount to be Paid is RM $row[total_Amount]"; 
                }

                else
                {
                    echo "No results found"; 
                }
            ?>
            <br>
            <button id="nextBtn">Pay</button>
            </form>

            <button id="closeBtn">Close</button>
            
        </div>
    </div>

    <script>

        function setTableNo1()
        {
            document.getElementById('tableNum').value = 1;
        }

        function setTableNo2()
        {
            document.getElementById('tableNum').value = 2;
        }

        function setTableNo3()
        {
            document.getElementById('tableNum').value = 3;
        }

        function setTableNo4()
        {
            document.getElementById('tableNum').value = 4;
        }

        function setTableNo5()
        {
            document.getElementById('tableNum').value = 5;
        }

        function setTableNo6()
        {
            document.getElementById('tableNum').value = 6;
        }

        function setTableNo7()
        {
            document.getElementById('tableNum').value = 7;
        }


        function doborder(tableId) {
            // Remove border from previously selected table

            // Apply border to the clicked table
            var table = document.getElementById(tableId);
            table.classList.add('borders');
        }



        const closeBtn = document.getElementById('closeBtn');
        const popupContainer = document.getElementById('popupContainer');
        const orderdetailscontainer = document.getElementById('orderdetailscontainer');


        const t1 = document.getElementById('table1');
        const t2 = document.getElementById('table2');
        const t3 = document.getElementById('table3');
        const t4 = document.getElementById('table4');
        const t5 = document.getElementById('table5');
        const t6 = document.getElementById('table6');
        const t7 = document.getElementById('table7');

        t1.addEventListener('click', function() {
            // Show the popup container
            popupContainer.style.display = 'block';
        });

        t2.addEventListener('click', function() {
            // Show the popup container
            popupContainer.style.display = 'block';
        });


        t3.addEventListener('click', function() {
            // Show the popup container
            popupContainer.style.display = 'block';
        });


        t4.addEventListener('click', function() {
            // Show the popup container
            popupContainer.style.display = 'block';
        });


        t5.addEventListener('click', function() {
            // Show the popup container
            popupContainer.style.display = 'block';
        });


        t6.addEventListener('click', function() {
            // Show the popup container
            popupContainer.style.display = 'block';
        });


        t7.addEventListener('click', function() {
            // Show the popup container
            popupContainer.style.display = 'block';
        });

        // Close pop-up
        closeBtn.addEventListener('click', function() {
            popupContainer.style.display = 'none';
            orderdetailscontainer.style.display = 'none';
        });



        function clearPopupContainer() {
            const popupContainer = document.getElementById("popupContainer");
            popupContainer.classList.add("hidden"); // Hide the container
            const totalprice = document.getElementById('totalprice');
            totalprice.value = '00.00';
        }

        // Add event listener to close button
        document.getElementById("nextBtn").addEventListener("click", clearPopupContainer);
    </script>

<?php
    require_once("Database/config.php");
        $sql1 = "SELECT * FROM TABLES WHERE table_status = 'OCCUPIED'";
        $result3 = mysqli_query($conn, $sql1);

        if (mysqli_num_rows($result3) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result3)) 
            {
                $table = $row["table_no"];
                if($table == 1)
                {
                    echo"<script type='text/javascript'> doborder('table1');</script>";
                }
                else if($table == 2)
                {
                    echo"<script type='text/javascript'> doborder('table2');</script>";
                }
                else if($table == 3)
                {
                    echo"<script type='text/javascript'> doborder('table3');</script>";
                }
                else if($table == 4)
                {
                    echo"<script type='text/javascript'> doborder('table4');</script>";
                }
                else if($table == 5)
                {
                    echo"<script type='text/javascript'> doborder('table5');</script>";
                }
                else if($table == 6)
                {
                    echo"<script type='text/javascript'> doborder('table6');</script>";
                }
                else if($table == 7)
                {
                    echo"<script type='text/javascript'> doborder('table7');</script>";
                }
            }
        }

        mysqli_close($conn);
?>
</body>


</html>