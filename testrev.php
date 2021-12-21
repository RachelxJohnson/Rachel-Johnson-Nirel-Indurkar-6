<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="review.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
</head>
<body>
    <div class="row">
        <div class="column">
            <h1 id="Title"><svg width='600' height='200'>
                <filter id='money'>
                  <feMorphology in='SourceGraphic' operator='dilate' radius='2' result='expand'/>
              
                  <feOffset in='expand' dx='1' dy='1' result='shadow_1'/>
                  <feOffset in='expand' dx='2' dy='2' result='shadow_2'/>
                  <feOffset in='expand' dx='3' dy='3' result='shadow_3'/>
                  <feOffset in='expand' dx='4' dy='4' result='shadow_4'/>
                  <feOffset in='expand' dx='5' dy='5' result='shadow_5'/>
                  <feOffset in='expand' dx='6' dy='6' result='shadow_6'/>
                  <feOffset in='expand' dx='7' dy='7' result='shadow_7'/>
              
                  <feMerge result='shadow'>
                    <feMergeNode in='expand'/>
                    <feMergeNode in='shadow_1'/>
                    <feMergeNode in='shadow_2'/>
                    <feMergeNode in='shadow_3'/>
                    <feMergeNode in='shadow_4'/>
                    <feMergeNode in='shadow_5'/>
                    <feMergeNode in='shadow_6'/>
                    <feMergeNode in='shadow_7'/>
                  </feMerge>
              
                  <feFlood flood-color='#ebe7e0'/>
                  <feComposite in2='shadow' operator='in' result='shadow'/>
              
                  <feMorphology in='shadow' operator='dilate' radius='1' result='border'/>
                  <feFlood flood-color='#35322a' result='border_color'/>
                  <feComposite in2='border' operator='in' result='border'/>
              
                  <feOffset in='border' dx='1' dy='1' result='secondShadow_1'/>
                  <feOffset in='border' dx='2' dy='2' result='secondShadow_2'/>
                  <feOffset in='border' dx='3' dy='3' result='secondShadow_3'/>
                  <feOffset in='border' dx='4' dy='4' result='secondShadow_4'/>
                  <feOffset in='border' dx='5' dy='5' result='secondShadow_5'/>
                  <feOffset in='border' dx='6' dy='6' result='secondShadow_6'/>
                  <feOffset in='border' dx='7' dy='7' result='secondShadow_7'/>
                  <feOffset in='border' dx='8' dy='8' result='secondShadow_8'/>
                  <feOffset in='border' dx='9' dy='9' result='secondShadow_9'/>
                  <feOffset in='border' dx='10' dy='10' result='secondShadow_10'/>
                  <feOffset in='border' dx='11' dy='11' result='secondShadow_11'/>
              
                  <feMerge result='secondShadow'>
                    <feMergeNode in='border'/>
                    <feMergeNode in='secondShadow_1'/>
                    <feMergeNode in='secondShadow_2'/>
                    <feMergeNode in='secondShadow_3'/>
                    <feMergeNode in='secondShadow_4'/>
                    <feMergeNode in='secondShadow_5'/>
                    <feMergeNode in='secondShadow_6'/>
                    <feMergeNode in='secondShadow_7'/>
                    <feMergeNode in='secondShadow_8'/>
                    <feMergeNode in='secondShadow_9'/>
                    <feMergeNode in='secondShadow_10'/>
                    <feMergeNode in='secondShadow_11'/>
                  </feMerge>
              
                  <feImage x='0' y='0' width='600' height='200' xlink:href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/78779/stripes.svg'/>
                  <feComposite in2='secondShadow' operator='in' result='secondShadow'/>
              
                  <feMerge>
                    <feMergeNode in='secondShadow'/>
                    <feMergeNode in='border'/>
                    <feMergeNode in='shadow'/>
                    <feMergeNode in='SourceGraphic'/>
                  </feMerge>
                </filter>
              
                <text dominant-baseline='middle' text-anchor='middle' x='50%' y='50%'>
                  Reviews!
                </text>
              </svg></h1> <h>Write a Review!</h>
              <div class="form-container">
                <form name="frmContact" id="" frmContact"" method="post"
                    action="" enctype="multipart/form-data"
                    onsubmit="return validateContactForm()">
        
                    <div class="input-row">
                        <label style="padding-top: 20px;">Name</label> <span
                            id="userName-info" class="info"></span><br /> <input
                            type="text" class="input-field" name="userName"
                            id="userName" />
                    </div>
                    <div class="input-row">
                        <label>Email</label> <span id="userEmail-info"
                            class="info"></span><br /> <input type="text"
                            class="input-field" name="userEmail" id="userEmail" />
                    </div>
                    <div class="input-row">
                        <label>Recipe</label> <span id="subject-info"
                            class="info"></span><br />  <textarea name="recipe"
                            class="input-field" name="recipe" id="recipe" cols="60" rows="6"></textarea>
                    </div>
                    <div class="input-row">
                        <label>Message</label> <span id="userMessage-info"
                            class="info"></span><br />
                        <textarea name="content" id="content"
                            class="input-field" cols="60" rows="6"></textarea>
                    </div>
                    <div>
                        <input type="submit" name="send" class="btn-submit"
                            value="Send" />
        
                        <div id="statusMessage"> 
                                <?php
                                if (! empty($message)) {
                                    ?>
                                    <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                                <?php
                                }
                                ?>
                            </div>
                    </div>
                </form>
                // Check if the form is submitted if ( isset( $_GET['submit'] ) ) { // retrieve the form data by using the element's name attributes value as key $firstname = $_GET['firstname']; $lastname = $_GET['lastname']; // display the results echo '<h3>Form GET Method</h3>'; echo 'Your name is ' . $lastname . ' ' . $firstname; exit;
}
<form action="get-method.php" method="get"> <input type="text" name="firstname" placeholder="First Name" /> <input type="text" name="lastname" placeholder="Last Name" /> <input type="submit" name="submit" /> </form> 
            </div>
        
            <script src="https://code.jquery.com/jquery-2.1.1.min.js"
                type="text/javascript"></script>
            <script type="text/javascript">
                function validateContactForm() {
                    var valid = true;
        
                    $(".info").html("");
                    $(".input-field").css('border', '#e0dfdf 1px solid');
                    var userName = $("#userName").val();
                    var userEmail = $("#userEmail").val();
                    var subject = $("#subject").val();
                    var content = $("#content").val();
                    
                    if (userName == "") {
                        $("#userName-info").html("Required.");
                        $("#userName").css('border', '#e66262 1px solid');
                        valid = false;
                    }
                    if (userEmail == "") {
                        $("#userEmail-info").html("Required.");
                        $("#userEmail").css('border', '#e66262 1px solid');
                        valid = false;
                    }
                    if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
                    {
                        $("#userEmail-info").html("Invalid Email Address.");
                        $("#userEmail").css('border', '#e66262 1px solid');
                        valid = false;
                    }
        
                    if (subject == "") {
                        $("#subject-info").html("Required.");
                        $("#subject").css('border', '#e66262 1px solid');
                        valid = false;
                    }
                    if (content == "") {
                        $("#userMessage-info").html("Required.");
                        $("#content").css('border', '#e66262 1px solid');
                        valid = false;
                    }
                    return valid;
                }
        </script>
              </div>
              <div class="topnav" id="myTopnav">
                <a href="#home">Home</a>
                <a href="#review" class="active">Review</a>
                <a href="#applepie" >Apple Pie</a>
                <a href="#pumpkinpie" >Pumpkin Pie</a>
                <a href="#ccpie">Chicken Pot Pie</a>
                <a href="#sugarcookies">Sugar Cookies</a>
                <a href="#chocolatechipcookies">Chocolate Chip Cookies</a>
                <a href="#gbcookies">Gingerbread Cookies</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                  <i class="fa fa-bars"></i>
          
                </a>
            </div>
        </div>
        <?php
$servername = "localhost";
$username = "csp";
$password = "1234";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
        <div class="column">
            <h>Your Review is below</h>
        </div>
      </div>
</body>0
</html>