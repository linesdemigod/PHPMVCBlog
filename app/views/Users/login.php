<?php 
    require APPROOT . '/views/includes/head.php';
?>


<?php 
    require APPROOT . '/views/includes/navigation.php';
?>

<section>
   
        <div class="container">
            <div class="row login-div">
                <div class="col s12 m6 offset-m3">
                <h5 class="center-align">Account Login</h5>
                    <form action="<?php echo URLROOT; ?>/users/login" method="post">
                        <div class="input-field">
                            <i class="material-icons prefix">person_pin</i>
                            <input type="text" name="username" id="name">
                            <label for="name">Username</label>
                            <p class="center-align red-text"><?php echo $data['usernameError']?></p>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">password</i>
                            <input type="password"  name="password" id="password">
                            <label for="password">Password</label>
                            <p class="center-align red-text"><?php echo $data['passwordError']?></p>
                        </div>
                        <div class="input-field center">
                            <button type="submit" name="submit" class="btn">Login</button>
                        </div>
                        <div class="input-field center">
                            <p>Not registered yet? <a href="<?php echo URLROOT; ?>/users/register">Create an account!</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

<?php 
    require APPROOT . '/views/includes/footer.php';
?>
