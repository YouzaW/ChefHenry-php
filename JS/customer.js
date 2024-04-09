// Get elements
const closeBtn = document.getElementById('closeBtn');
const popupContainer = document.getElementById('popupContainer');
const orderdetailscontainer = document.getElementById('orderdetailscontainer');

       
  // Get all the table buttons
  const t1 = document.getElementById('table1');
  const t2 = document.getElementById('table2');
  const t3 = document.getElementById('table3');
  const t4 = document.getElementById('table4');
  const t5 = document.getElementById('table5');
  const t6 = document.getElementById('table6');
  const t7 = document.getElementById('table7');
/*
  const n1 = document.getElementById('table1');
  const n2 = document.getElementById('table2');
  const n3 = document.getElementById('table3');
  const n4 = document.getElementById('table4');
  const n5 = document.getElementById('table5');
  const n6 = document.getElementById('table6');
  const n7 = document.getElementById('table7');


  const c1 = document.getElementById('table1');
  const c2 = document.getElementById('table2');
  const c3 = document.getElementById('table3');
  const c4 = document.getElementById('table4');
  const c5 = document.getElementById('table5');
  const c6 = document.getElementById('table6');
  const c7 = document.getElementById('table7');

  */ 
  // Get the popup container element

  // Add event listeners to each table button
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


/*
const table = document.getElementById(tableId);
function doborder(tableId) {
const tableID = document.getElementById("tableID").textContent;
const tableElement = document.getElementById(tableID);

// Perform actions for the specific table
tableElement.classList.add("borders");

// Hide the order details container
document.getElementById("orderdetailscontainer").style.display = "none";
}

function hello(){
    orderdetailscontainer.style.display = 'none';
}
*/ 
