<!DOCTYPE html>
<html>
<head>
    <title> Thank you for your time!</title>
</head>
<body>
    

<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$interest1 = $_POST['interest1'];
$interest2 = $_POST['interest2'];
$interest3 = $_POST['interest3'];
$interest4 = $_POST['interest4'];
$interest5 = $_POST['interest5'];
$interest6 = $_POST['interest6'];
$contribution = $_POST['contribution'];
$mailing = $_POST['mailing'];
$comments = $_POST['comments'];

print "<p> Thank you, $first_name, for filling out this contact form! </p>";
print "<p> We will be contacting you to your email address $email regarding any new information. </p>";

?>
</body>
</html>
