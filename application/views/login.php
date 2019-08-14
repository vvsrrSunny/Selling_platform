
    

    
    
  <div id="moveToCenter" style="width: 70%; padding-left: 25%">

      <?php if (strlen($status) > 0): echo '<div class="alert alert-danger"><h2>' . $status . '</h2></div>'; endif?>


  <!-- Default form login -->
<form class="text-center border border-light p-5" action="<?php echo base_url();?>Login/login" method="POST">

    <p class="h4 mb-4">Sign in</p>



    <!-- Email -->
    <input type="email" id="defaultLoginFormEmail" name="email" class="form-control mb-4" placeholder="E-mail" value="<?php if (isset($_COOKIE["email"])): echo $_COOKIE["email"]; endif ?>">

    <!-- Password -->
    <input type="password" id="defaultLoginFormPassword" name="password" class="form-control mb-4" placeholder="Password">

    <div class="d-flex justify-content-around">
        <div>
            <!-- Remember me -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember" <?php if (isset($_COOKIE["email"])): echo "checked"; endif ?> name="remember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
            </div>
        </div>
        <div>
            <!-- Forgot password -->
            <a href="<?php echo base_url(); ?>SecretQuestion/forgotPassword">Forgot password?</a>
        </div>
    </div>

    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" onclick="myfunction()" type="submit">Sign in</button>

    <!-- Register -->
    <p>Not a member?
        <a href="<?php echo base_url(); ?>Register/">Register</a>
    </p>

    <!-- Social login -->
    <!-- <p>or sign in with:</p>

    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-twitter"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-linkedin-in"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-github"></i>
    </a> -->

</form>
<!-- Default form login -->
  
</div>
</body>
</html>