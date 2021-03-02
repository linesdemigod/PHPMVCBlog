<?php 
    require APPROOT . '/views/includes/head.php';
?>


<?php 
    require APPROOT . '/views/includes/navigation.php';
?>

<section>
   
        <div class="container">
            <div class="row">
                <div class="col s12 m6 offset-m3">
                <h5 class="center-align">Register Account</h5>
                    <form action="<?php echo URLROOT; ?>/users/register" method="post">
                        <div class="input-field">
                            <i class="material-icons prefix">person_pin</i>
                            <input type="text" name="username" id="name">
                            <label for="name">Username</label>
                            <span><?php echo $data['usernameError']?></span>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input type="text" name="email" id="name">
                            <label for="name">Email</label>
                            <span><?php echo $data['emailError']?></span>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">password</i>
                            <input type="password"  name="password" id="password">
                            <label for="password">Password</label>
                            <span><?php echo $data['passwordError']?></span>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">password</i>
                            <input type="password"  name="confirmPassword" id="confirmpassword">
                            <label for="confirmpassword">Confirm Password</label>
                            <span><?php echo $data['confirmPasswordError']?></span>
                        </div>
                        <div class="input-field center">
                            <button type="submit" name="submit" class="btn">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php 
    require APPROOT . '/views/includes/footer.php';
?>
