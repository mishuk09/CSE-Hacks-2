<html>
   
   <head>
     
   </head>
   
   <body>
    <h1>Mahadi Hasan Mishuk</h1>
    <h3>Assignmen-11 <br>
Question -3</h3>
      <?php
         // define variables and set to empty values
         $nameErr = $emailErr = $genderErr = $websiteErr = "";
         $name = $email = $gender = $comment = $website = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["name"]);
            }
            
            
            if (empty($_POST["hobby"])) {
               $hobbyErr = "Hobby is required";
            }else {
               $hobby = test_input($_POST["hobby"]);
            }
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
     
      <h3>Fill the form</h3>
     
       
     
      <form method = "post" action = "<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <table>
            <tr>
               <td>Name:</td>
               <td><input type = "text" name = "name">
                  <span class = "error"> <?php echo $nameErr;?></span>
               </td>
            </tr>
        
            <tr>
               <td>Hobby:</td>
               <td>
                  <input type = "radio" name = "hobby" value = "game">Game
                  <input type = "radio" name = "hobby" value = "gardening">Gardening
                  <input type = "radio" name = "hobby" value = "traveling">Travaling
                  <span class = "error"> <?php echo $hobbyErr;?></span>
               </td>
            </tr>	
            <td>
               <input type = "submit" name = "submit" value = "Submit"> 
            </td>
				
         </table>
			
      </form>
      
      <?php
         echo "<h2>Display:</h2>";
         echo $name;
         echo "<br>";
         echo $hobby;
      ?>
   
   </body>
</html>