<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="review1.css"/>
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
            <div class="container">
                <form action="action_page.php" method="get">
             
                  <label for="name">Name</label>
                  <input type="text" id="name" name="name" placeholder="Your name..">
                  <br>
                  <label for="email">Email</label>
                  <input type="text" id="email" name="email" placeholder="Your email is..">
                  <br>
                  <label for="recipe">Recipe</label>
                  <input type="text" id="recipe" name="recipe" placeholder="Your recipe is..">
                  <br>
                  <label for="stars">Stars</label>
                  <select id="stars" name="stars">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                  <br>
                  <textarea id="review" name="review" placeholder="Write your thoughts on the recipes.." style="height:200px"></textarea>
             
                  <input type="submit" value="Submit">
             
                  <form action="/action_page.php"></form>
               
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
        <div class="column">
            <h></h>
        </div>
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
       
        if (name == "") {
            $("#userName-info").html("Required.");
            $("#userName").css('border', '#e66262 1px solid');
            valid = false;
        }
        if (email == "") {
            $("#userEmail-info").html("Required.");
            $("#userEmail").css('border', '#e66262 1px solid');
            valid = false;
        }
 
        if (recipe == "") {
            $("#subject-info").html("Required.");
            $("#subject").css('border', '#e66262 1px solid');
            valid = false;
        }
        if (stars == "") {
            $("#userMessage-info").html("Required.");
            $("#content").css('border', '#e66262 1px solid');
            valid = false;
        }
        return valid;
    }
</script>
<html>
<body>
 

 
</body>
</html>
</body>
</html>
