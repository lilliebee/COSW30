<?php include 'header.php'; ?>

<?php
    $email = "";
    $password = "";
    $correctEmail = "test@test.com";
    $correctPassword = "123456";
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
     
        $email = $_POST['email'];
        $password = $_POST['password'];
       
        if(empty($email)) {
            $error = 'Email must be entered';
        }
        if(empty($password)) {  
            $errorpass = 'Password must be entered';
        }
        else {
        if ($correctEmail == $email && $correctPassword == $password) {
             $success = 'You have successfully logged in!';
        } 
        else {
             $errorlogin = 'Your login information is not correct, please try again';
        }
        }
    }
?>

<main>
    <div id=loginpage >
    <?php
        if(isset($error)) {echo "<p class=\"error\">$error</p>";}   
        if(isset($errorpass)) {echo "<p class=\"error\">$errorpass</p>";}  
        if(isset($success)) {echo "<p><strong>$success</strong></p>";}  
        if(isset($errorlogin)) {echo "<p class=\"error\">$errorlogin</p>";} 
    ?>
        <div id=loginborder>
    <h1>Login Page</h1>
    <form action="login.php" method="POST">

    <label for="email">Email:</label>
    <input class= "loginin" type="email" id="email" name="email" placeholder="test@test.com" value=""></br>
        <label for="password">Password:</label>
    <input class= "loginin" type="password" id="password" name="password"></br>
        <label for="password">Confirm Your Password:</label>
    <input class= "loginin"  type="password" id="conf_password" name="conf_password"></br>
    
    <input class= "loginin" type="submit" name="loginButton" value="Enter">

        </form>
        </div>
        </div>
</main>




<?php include 'footer.php' ; ?>