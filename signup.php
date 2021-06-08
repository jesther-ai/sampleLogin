<?php include 'include/header.php';?>
<div class="container">
	<div class="jumbotron">
		<div class="login-form">
    	<form action="include/signup.inc.php" method="post">
            <h2 class="text-center">Sign up</h2>  
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Full Name" required="required">
            </div>     
            <div class="form-group">
                <input type="text" name="uid" class="form-control" placeholder="Username" required="required">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <input type="password" name="passwordRepeat" class="form-control" placeholder="Repeat Password" required="required">
            </div>
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email" required="required">
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Sign up</button><br>
        
        <?php
        //error GET 
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p class=\"text-center\">Fill in all fields!</p>";
                }
                else if ($_GET["error"] == "invaliduid") {
                    echo "<p class=\"text-center\">Please Choose a proper username!</p>";
                }
                else if ($_GET["error"] == "invalidemail") {
                    echo "<p class=\"text-center\">Please choose a proper email!</p>";
                }
                else if ($_GET["error"] == "passworddontmatch") {
                    echo "<p class=\"text-center\">Passwords does not match!</p>";
                }
                else if ($_GET["error"] == "stmtfailed") {
                    echo "<p class=\"text-center\">Something went wrong, Try Again.</p>";
                }
                else if ($_GET["error"] == "usernametaken") {
                    echo "<p class=\"text-center\">User name already taken!</p>";
                }
                else if ($_GET["error"] == "none") {
                    echo "<p class=\"text-center\">You have signed up!</p>";
                }
                
            }
        ?>
        </form>
    </div>
</div>




<?php include 'include/footer.php';?>