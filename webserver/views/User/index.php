<div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <h3 class="text-center">Welcome</h3>
        <h5>Yay, <span class="text-warning"><?php echo $_SESSION['student'];?></span> is here.</h5>
        <br>
        <p>You can either <a href="<?php echo USER_SIGN_UP; ?>">create</a> new record or <a href="<?php echo USER_SIGN_IN; ?>">login</a> with the existing user!</p><br><br>
        <p>
        	<i>Challenge description:</i>
        	You have to find a password hash for the user admin!
        </p>
        <br><br>
        <p>
            For more details please click <i>Lab info</i>
        </p>
    </div>
</div>
