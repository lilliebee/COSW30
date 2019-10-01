<?php include 'header.php'; ?>

<main>
    <div id=loginpage >
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