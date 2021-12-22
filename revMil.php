<?php
   require_once 'Login.php';
   include_once 'reviewtest.html';
   $conn = mysqli_connect($host, $user, $pass, $db, $port); 
   if($conn->connect_error) die($conn->connect_error);       

   $option = isset($_POST['stars']) ? : false;
   if ($option){
       $request = $_POST['stars'];
        if ($request <2){$sadstring ="I'm sorry that you did not like it";}
        elseif ($request <3){$sadstring ="That's unfortunate";}
        elseif ($request <4){$sadstring ="Sorry you feel that way";}
        elseif ($request <5){$sadstring ="Great! Try another recipe";}
        else{$sadstring ="I'm glad you enjoyed!";}
        

       $query = "insert into rev2(revstr,revnum)values('" . $sadstring . "'," . $request . ");";
       mysqli_query($conn, $query); 
       echo $sadstring;
   }
   $conn->close();
?>