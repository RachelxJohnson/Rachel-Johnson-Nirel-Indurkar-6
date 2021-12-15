<html>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "test", "blog_samples") or die("Connection Error: " . mysqli_error($conn));
mysqli_query($conn, "INSERT INTO tblcontact (user_name, user_email,subject,content) VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $content. "')");
$insert_id = mysqli_insert_id($conn);
if(!empty($insert_id)) {
$message = "Your contact information is saved successfully";
?>

CREATE TABLE `tblcontact` (
  `contact_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


Welcome <?php echo $_POST["name"]; ?><br>
You rated our recipe as <?php echo $_POST["stars"]; ?><br>
Your review is: <?php echo $_GET["review"]; ?>

</body>
</html>