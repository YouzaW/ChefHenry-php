<?php
    session_start();
?>

<!DOCTYPE html>
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
        
        .menu-item {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        
        .menu-item img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
            margin-right: 10px;
            box-shadow: 3px 5px 5px 2px rgb(0, 0, 0, 0.5);
        }
        
        .menu-item-details {
            text-align: left;
        }
        
        .menu-item-details h3 {
            margin: 0;
        }
        
        .menu-item-details input {
            flex-wrap: wrap;
            margin: 0;
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
                <li><a href="Home.html">HOME</a></li>
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
                <button id="table1" name = "t" value = "tt1" onclick="doborder('table1'); setTableNo1()">
                    <h3><b><img src="images/small-1.png" height="100" width="120"></b></h3>
                </button>
            </div>

            <div class="tables"><form id = "t2" method = "post"></form>
                <button id="table2" name = "t" value = "tt2" onclick="doborder('table2'); setTableNo2()">
                    <h3><b><img src="images/small-1.png" height="100" width="120"></b></h3>
                </button>
            </div>

            <div class="tables">
                <button id="table3" name = "t" value = "tt3" onclick="doborder('table3'); setTableNo3()">
                    <h3><b><img src="images/small-1.png" height="100" width="120"></b></h3>
                </button>
            </div>

            <div class="tables">
                <button id="table4" name = "t" value = "tt4" onclick="doborder('table4'); setTableNo4()">
                    <h3><b><img src="images/small-1.png" height="100" width="120"></b></h3>
                </button>
            </div>
        </div>



        <div class="row">
            <div class="tables">
                <button id="table5" name = "t" value = "tt5" onclick="doborder('table5'); setTableNo5()">
                    <h3><b><img src="images/small-1.png" height="100" width="120"></b></h3>
                </button>
            </div>


            <div class="tables">
                <button id="table6" name = "t" value = "tt6" onclick="doborder('table6'); setTableNo6()">
                    <h3><b><img src="images/small-1.png" height="100" width="120"></b></h3>
                </button>
            </div>


            <div class="tables">
                <button id="table7" name = "t" value = "tt7" onclick="doborder('table7'); setTableNo7()">
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
            <form id="order" name="odr" method="post" action="InsertOrder_MP.php">
                <h2>Menu</h2>
                <input type="text" id="tableNum" name = "tableNo" value ="0">
                <div class="menu-item">
                    <img src="images/burger.jpg" alt="Menu Item 1">
                    <div class="menu-item-details">
                        <h3>Chicken Burger</h3>
                        <p>Description 1</p>
                        <p>Price: RM10.99</p>
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="burger" name="burger" min="0" max="100" step="1" value="0" onchange=" gettotalprice(); getAmount1()">
                        <br>
                        <label for="quantity">Amount:</label>
                        <input type="text" id="amount1" name="burgerAmt" size="7" value="0.00">
                    </div>
                </div>
                <div class="menu-item">
                    <img src="images/pizza.jpeg" alt="Menu Item 2">
                    <div class="menu-item-details">
                        <h3>Peperoni Pizza</h3>
                        <p>Description 2</p>
                        <p>Price: RM12.99</p>
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="pizza" name="pizza" min="0" max="100" step="1" value="0" onchange=" gettotalprice(); getAmount2()">
                        <br>
                        <label for="quantity">Amount:</label>
                        <input type="text" id="amount2" name="pizzaAmt" size="7" value="0.00">
                    </div>
                </div>
                <div class="menu-item">
                    <img src="images/sushi.jpg" alt="Menu Item 3">
                    <div class="menu-item-details">
                        <h3>Sushi</h3>
                        <p>Description 3</p>
                        <p>Price: RM11.59</p>
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="sushi" name="sushi" min="0" max="100" step="1" value="0" onchange=" gettotalprice(); getAmount3()">
                        <br>
                        <label for="quantity">Amount:</label>
                        <input type="text" id="amount3" name="sushiAmt" size="7" value="0.00">
                    </div>
                </div>
                <div class="menu-item">
                    <img src="images/pasta.jpeg" alt="Menu Item 3">
                    <div class="menu-item-details">
                        <h3>Pasta</h3>
                        <p>Description 3</p>
                        <p>Price: RM24.99</p>
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="pasta" name="pasta" min="0" max="100" step="1" value="0" onchange=" gettotalprice(); getAmount4()">
                        <br>
                        <label for="quantity">Amount:</label>
                        <input type="text" id="amount4" name="pastaAmt" size="7" value="0.00">
                    </div>
                </div>
                <h2>Desserts</h2>
                <div class="menu-item">
                    <img src="images/crepe.jpeg" alt="Menu Item 3">
                    <div class="menu-item-details">
                        <h3>Crepe</h3>
                        <p>Description 3</p>
                        <p>Price: RM22.99</p>
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="crepe" name="crepe" min="0" max="100" step="1" value="0" onchange=" gettotalprice(); getAmount5()">
                        <br>
                        <label for="quantity">Amount:</label>
                        <input type="text" id="amount5" name="crepeAmt" size="7" value="0.00">
                    </div>
                </div>
                <h2>Drinks</h2>
                <div class="menu-item">
                    <img src="images/water.jpg" alt="Menu Item 3">
                    <div class="menu-item-details">
                        <h3>Water</h3>
                        <p>Description 3</p>
                        <p>Price: RM1.99</p>
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="water" name="water" min="0" max="100" step="1" value="0" onchange=" gettotalprice(); getAmount6()">
                        <br>
                        <label for="quantity">Amount:</label>
                        <input type="text" id="amount6" name="waterAmt" size="7" value="0.00">
                    </div>
                </div>
                <div class="menu-item">
                    <img src="images/juice.jpg" alt="Menu Item 3">
                    <div class="menu-item-details">
                        <h3>Juice</h3>
                        <p>Description 3</p>
                        <p>Price: RM9.99</p>
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="juice" name="juice" min="0" max="100" step="1" value="0" onchange=" gettotalprice(); getAmount7()">
                        <br>
                        <label for="quantity">Amount:</label>
                        <input type="text" id="amount7" name="juiceAmt" size="7" value="0.00">
                    </div>
                </div>
                <div class="menu-item">
                    <img src="images/soft.jpeg" alt="Menu Item 3">
                    <div class="menu-item-details">
                        <h3>Softdrink</h3>
                        <p>Description 3</p>
                        <p>Price: RM3.59</p>
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="soft" name="soft" min="0" max="100" step="1" value="0" onchange="gettotalprice(); getAmount8()">

                        <br>
                        <label for="quantity">Amount:</label>
                        <input type="text" id="amount8" name="softAmt" size="7" value="0.00">
                    </div>
                </div>

                <div class="menu-item">
                    <div class="menu-item-details">

                        The Total Price is : <span id="totalAmount" name="totalAmt"></span>

                    </div>
                </div>
                <button id="closeBtn">Close</button>
                <button id="nextBtn">Place Order</button>
            </form>
        </div>
    </div>

    <div id="orderdetailscontainer">
        <div id="orderdetailcontent">
            <form id="totalform">
                <h3>Your order is being prepared, Payment can be on the counter</h3><br>
                <h2 style="font-family:monospace; color:cadetblue;">Thank you</h2>
                <br>
            </form>
            <button id="closeBtn" onclick="hello(); clearPopupContainer(); removeborder();">Close</button>


        </div>
        
    </div>

    <script>

function removeborder(tables) {
  // Remove border from previously selected table
  var prevTable = document.querySelector('.borders');
  
    prevTable.classList.remove('borders');
}

function doborder(tableId) {
  // Apply border to the clicked table
  var table = document.getElementById(tableId);
  table.classList.add('borders');
}

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

        function hello(){

            orderdetailscontainer.style.display = 'none';

        }


        function gettotalprice() {
            var burger = parseInt(document.getElementById('burger').value);
            var pizza = parseInt(document.getElementById('pizza').value);
            var sushi = parseInt(document.getElementById('sushi').value);
            var pasta = parseInt(document.getElementById('pasta').value);
            var crepe = parseInt(document.getElementById('crepe').value);
            var water = parseInt(document.getElementById('water').value);
            var juice = parseInt(document.getElementById('juice').value);
            var soft = parseInt(document.getElementById('soft').value);
            var total = (burger * 10.99) + (pizza * 12.99) + (sushi * 11.59) + (pasta * 24.99) + (crepe * 22.99) + (water * 1.99) + (juice * 9.99) + (soft * 3.59);
            document.getElementById("totalAmount").textContent = "RM" + total.toFixed(2);
        };
        function getAmount1(){
            var burger = parseInt(document.getElementById('burger').value);
            var amount = burger * 10.99;
            document.getElementById("amount1").value = amount.toFixed(2);
        };
        function getAmount2(){
            var pizza = parseInt(document.getElementById('pizza').value);
            var amount = pizza * 12.99;
            document.getElementById("amount2").value = amount.toFixed(2);
        };
        function getAmount3(){
            var sushi = parseInt(document.getElementById('sushi').value);
            var amount = sushi * 11.59;
            document.getElementById("amount3").value = amount.toFixed(2);
        };
        function getAmount4(){
            var pasta = parseInt(document.getElementById('pasta').value);
            var amount = pasta * 24.99;
            document.getElementById("amount4").value = amount.toFixed(2);
        };
        function getAmount5(){
            var crepe = parseInt(document.getElementById('crepe').value);
            var amount = crepe * 22.99;
            document.getElementById("amount5").value = amount.toFixed(2);
        };
        function getAmount6(){
            var water = parseInt(document.getElementById('water').value);
            var amount = water * 1.99;
            document.getElementById("amount6").value = amount.toFixed(2);
        };
        function getAmount7(){
            var juice = parseInt(document.getElementById('juice').value);
            var amount = juice * 9.99;
            document.getElementById("amount7").value = amount.toFixed(2);
        };
        function getAmount8(){
            var soft = parseInt(document.getElementById('soft').value);
            var amount = soft * 3.59;
            document.getElementById("amount8").value = amount.toFixed(2);
        };

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

  t1.addEventListener('click', function(){
      // Show the popup container
      popupContainer.style.display = 'block';
    });

    t2.addEventListener('click', function(){
      // Show the popup container
      popupContainer.style.display = 'block';
    });


    t3.addEventListener('click', function(){
      // Show the popup container
      popupContainer.style.display = 'block';
    });


    t4.addEventListener('click', function(){
      // Show the popup container
      popupContainer.style.display = 'block';
    });


    t5.addEventListener('click', function(){
      // Show the popup container
      popupContainer.style.display = 'block';
    });


    t6.addEventListener('click', function(){
      // Show the popup container
      popupContainer.style.display = 'block';
    });


    t7.addEventListener('click', function(){
      // Show the popup container
      popupContainer.style.display = 'block';
    });



  nextBtn.addEventListener('click', function() {
    popupContainer.style.display = 'none';
    orderdetailscontainer.style.display = 'block';

    t1.setItem("#table1 .selected img");

});

// Close pop-up
closeBtn.addEventListener('click', function() {
    popupContainer.style.display = 'none';
    orderdetailscontainer.style.display = 'none';
});



function clearPopupContainer() {
    const burgerInput = document.getElementById("burger");
    const pizzaInput = document.getElementById("pizza");
    const sushiInput = document.getElementById('sushi');
    const pastaInput = document.getElementById('pasta');
    const crepeInput = document.getElementById('crepe');
    const waterInput = document.getElementById('water');
    const juiceInput = document.getElementById('juice');
    const softInput = document.getElementById('soft');
    
    const amount1 = document.getElementById("amount1");
    const amount2 = document.getElementById('amount2');
    const amount3 = document.getElementById('amount3');
    const amount4 = document.getElementById('amount4');
    const amount5 = document.getElementById('amount5');
    const amount6 = document.getElementById('amount6');
    const amount7 = document.getElementById('amount7');
    const amount8 = document.getElementById('amount8');

    // Clear the user input fields
    burgerInput.value = '0';
    pizzaInput.value = '0';
    sushiInput.value = '0';
    pastaInput.value = '0';
    crepeInput.value = '0';
    waterInput.value = '0';
    juiceInput.value = '0';
    softInput.value = '0';

    amount1.value = '0';
    amount2.value = '0';
    amount3.value = '0';
    amount4.value = '0';
    amount5.value = '0';
    amount6.value = '0';
    amount7.value = '0';
    amount8.value = '0';

    document.getElementById("totalAmount").textContent = "RM00.00";
    
    const popupContainer = document.getElementById("popupContainer");
    popupContainer.classList.add("hidden"); // Hide the container
}

// Add event listener to close button
document.getElementById("closeBtn").addEventListener("click", clearPopupContainer);

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
                    echo"<script type='text/javascript'> doborder('table1'); document.getElementById('table1').disabled = true;  </script>";
                }
                else if($table == 2)
                {
                    echo"<script type='text/javascript'> doborder('table2');document.getElementById('table2').disabled = true;  </script>";
                }
                else if($table == 3)
                {
                    echo"<script type='text/javascript'> doborder('table3');document.getElementById('table3').disabled = true;  </script>";
                }
                else if($table == 4)
                {
                    echo"<script type='text/javascript'> doborder('table4'); document.getElementById('table4').disabled = true; </script>";
                }
                else if($table == 5)
                {
                    echo"<script type='text/javascript'> doborder('table5');document.getElementById('table5').disabled = true;  </script>";
                }
                else if($table == 6)
                {
                    echo"<script type='text/javascript'> doborder('table6');document.getElementById('table6').disabled = true;  </script>";
                }
                else if($table == 7)
                {
                    echo"<script type='text/javascript'> doborder('table7');document.getElementById('table7').disabled = true;  </script>";
                }
            }
        }

        mysqli_close($conn);
?>

</body>


</html>


