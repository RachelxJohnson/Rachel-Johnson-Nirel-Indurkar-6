<?php
   require_once 'Login.php';
   include_once 'reviewtest.html';
   $conn = mysqli_connect($host, $user, $pass, $db, $port); 
   if($conn->connect_error) die($conn->connect_error);       

   $option = isset($_POST['stars']) ? : false;
   if ($option){
       $request = $_POST['stars'];
        if ($request <2){$sadstring ="We hate you";}
        elseif ($request <3){$sadstring ="We don't ike you";}
        elseif ($request <4){$sadstring ="Meh";}
        elseif ($request <5){$sadstring ="We like you";}
        else{$sadstring ="Hubba hubba";}
        

       $query = "insert into rev2(revstr,revnum)values('" . $sadstring . "'," . $request . ");";
       mysqli_query($conn, $query); 
       echo $sadstring;
   }
   $result->close();
   $conn->close();
?>