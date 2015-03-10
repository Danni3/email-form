<!--Daniel Hawinkels-->
<?php
//comment needed

  if (isset($_POST['Firstname']))  {
  
          //comment needed
          $admin_email = "1dhawinkels@tawacollege.school.nz";
          $email = "1dhawinkels@tawacollege.school.nz";
          $subject = $_POST['Daniel Hawinkels Pizza Hut form'];
          $comment = $_POST['This is the results'];
          $body = "First name: ".$Firstname/n;
          $body  .= "Last name: ".$Lastname/n;
          $body  .= "Address: ".$Address/n;
          $body  .= "Phone number: ".$Phonenumber/n;
          $body  .= "Pizza 1: ".$Pizza1/n;
          $body  .= "Pizza 2: ".$Pizza2/n;
          $body  .= "Pizza 3: ".$Pizza3;
  
  //comment needed
  mail($admin_email, "$subject", $body,$email);
  
  //comment needed
  echo "Thank you for contacting us!";
  }
  
  //comment needed
  else  <?php endif ?>{
        <html>
            <head>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>Pizza Hut Form</title>
                <script type="text/javascript" src="https://code.jquery.com/jquery-2.0.2.js"></script>
                <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
                <link rel="stylesheet" type="text/css" href="styles.css">
                <!-- links the background to the defined stylesheet -->
            </head>
            <body>
                <div class="center">
                        <h1>Pizza Hut online ordering form</h1>
                        <h3>For a complete menu click the 'Menu' button</h3>
                        <!-- heading instructions for the user -->
                        <a href="http://www.pizzahut.co.nz/takeawaymenu.pdf" class="pure-button pure-button-primary">Menu</a> <!-- Links to the pizzahut menu -->      
                </div>
        <!-- divider tellong the user how to use the online form -->
                <div class="center">
                        <p class="spacing"> Please enter your details. Note that you can only order up to 3 pizzas online. </p>
                        <p class="spacing">If you wish to order less than 3 pizzas then leave the space blank. </p>
                        <p class="spacing">If you wish to order more please visit us in store or complete more than one online order</p>
                </div>
                <!-- Divider for the products being ordered -->
                <form method="post">
                    <div class="center">
                    <table>
                        <th>First name</th>
                        <th>Last name</th>
                      <tr>
                        <td class="spacing"><input type="text" name="firstname"></td>
                        <td class="spacing"><input type="text" name="lastname"></td> 
                      </tr>
                     <br>
        <!-- Variables collecting the user's first and last names -->
                    <th>Phone Number</th>
                    <th>Address</th>
                      <tr>
                        <td class="spacing"><input type="text" name="phone"></td>
                        <td class="spacing"><input type="text" name="address"></td> 
                      </tr>  
                    <th>Pizza 1</th>
                    <th>Pizza 2</th>
                      <tr>
                        <td class="spacing">
                        <select name="pizza1" class="sum">
                        <option value="0">Please select</option>
                        <option value="5.00">Pepperoni - $5.00</option>
                        <option value="6.00">Meatlovers - $6.00</option>
                        <option value="4.50">Pure Cheese - $4.50</option>
                        <option value="8.50">Supreme - $8.50</option>
                        </select>    
                     </td>
                <td class="spacing">
                <select name="pizza2" class="sum">
                <option value="0">Please select</option>
                <option value="5.00">Pepperoni - $5.00</option>
                <option value="6.00">Meatlovers - $6.00</option>
                <option value="4.50">Pure Cheese - $4.50</option>
                <option value="8.50">Supreme - $8.50</option>
               </select>  	
                </td>
             </tr>
        <!-- collects the order information from the user -->
              </tr>
            <th>Pizza 3</th>
              <tr>
                <td class="spacing">
               <select name="pizza3" class="sum">
                <option value="0">Please select</option>
                <option value="5.00">Pepperoni - $5.00</option>
                <option value="6.00">Meatlovers - $6.00</option>
                <option value="4.50">Pure Cheese - $4.50</option>
                <option value="8.50">Supreme - $8.50</option>
               </select>
            </form>
               <p>The total cost is: $<input id="cost" type="text" disabled/></p>
               <a href="Submit.html" class="pure-button pure-button-primary">Submit</a>
                </td>
              </tr>
             </div>
         </table>

 <div class="row">
		<a href="contact.html" class="pure-button pure-button-primary">Contact Us</a>
		<!--
		links to the Pizza hut site. I will make it so that the user can see their order in the future
		-->
		</div>
       
      </div>
<script type="text/javascript">
 $(".sum").change(function() { //execute everytime something is changed i.e pizza added/removed
    var total = 0; // set inital total at 0
    $.each($(".sum"), function() { //for each item with class "sum";
        total += parseFloat($(this).val()); // Parse the string and return the sum as a float
    });
    $("#cost").val(total) //Print the sum to input id "cost"
});
 </script>
 <!-- Script links to the styles.css file to make a higher density background image -->


</body>
</html>
  }
<?php
?>