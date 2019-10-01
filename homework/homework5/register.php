 <?php include 'header.php'; ?>
 <?php include 'inc_registration.php'; ?>
 
 <main>

            
           <img id=regimg src="https://imgc.artprintimages.com/img/print/classic-book-cover-collage_u-l-q19rm920.jpg?h=550&w=550">
            
          <?php
                if(isset($error_firstname)) {
                    echo "<p class=\"error\">$error_firstname</p>";
                }
                if(isset($error_lastname)) {
                    echo "<p class=\"error\">$error_lastname</p>";
                }
                if(isset($error)) {
                    echo "<p class=\"error\">$error</p>";
                }
                if(isset($error_password)) {
                    echo "<p class=\"error\">$error_password</p>";
                }
                if(isset($error_confirmpassword)) {
                    echo "<p class=\"error\">$error_confirmpassword</p>";
                }
                if(isset($congrats)) {
                   echo "<p><strong>$congrats</strong></p>";
                }
          ?>
          
          
          <form id=regform action="register.php" method="POST">
               <h1 id= regname >Registration Form</h1>

            

            <label for="first_name">First Name: </label>
            <input type="text" id="first_name" name="first_name" value="<?php echo $first_name; ?>">

            <br><br>

            <label for="last_name">Last Name: </label>
            <input type="text" id="last_name" name="last_name" value="<?php echo $last_name; ?>">

            <br><br>

            <label for="email">Email Address: </label>
            <input type="email" id="email" name="email" placeholder="example@example.com" value="<?php echo $email; ?>">

            <br><br>

            <label for="password">Password: </label>
            <input type="password" id="password" name="password" value="<?php echo $password; ?>" >

            <br><br>

            <label for="confirm_password">Confirm Password: </label>
            <input type="password" id="confirm_password" name="confirm_password" value="<?php echo $confirm_password; ?>">

            <br><br>


            <button id="buttonreg">Register!</button>
        </form>
        
         <?php include 'footer.php'; ?>