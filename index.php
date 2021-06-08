<?php include 'include/header.php';?>


<div class="container">
	<div class="jumbotron">
		<div class="login-form">
    	<form action="include/login.inc.php" method="post">
            <h2 class="text-center">Log in</h2>       
            <div class="form-group">
                <input type="text" name="uid" class="form-control" placeholder="Username" required="required">
            </div>
            <div class="form-group">
                <input type="password" name="pwd" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Log in</button>
            </div><br>
                   
        </form>
        <?php
        //error GET 
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p class=\"text-center\">Fill in all fields!</p>";
                }
                else if ($_GET["error"] == "wronglogin") {
                    echo "<p class=\"text-center\">Incorrect login information!</p>";
                }
            }
        ?>
    <p class="text-center"><a href="signup.php">Create an Account</a></p>
</div>


<?php include 'include/footer.php';?>

