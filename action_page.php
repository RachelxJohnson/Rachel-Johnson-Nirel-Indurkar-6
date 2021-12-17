<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<?php if(isset($_GET['name']) && isset($_GET['stars'])): ?>
        <br/>
        Your name is <?php echo $_GET["name"]; ?>
        <br/>
        Your stars is <?php echo $_GET["stars"]; ?>
<?php endif; ?>
</body>
</html>
