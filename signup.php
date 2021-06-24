<?php
include 'login_header.php';
?>

<form method="post" action="signup_logic.php">
    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

    <div class="form-floating">
        <input type="text" name="pseudo" class="form-control" id="floatingInput" placeholder="Tntrunks">
        <label for="floatingInput">Username</label>
    </div>

    <div class="form-floating">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Tntrunks">
        <label for="floatingInput">Email Address</label>
    </div>
    <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>

    <div class="form-floating">
        <input type="password" name="password_retype" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password retype</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
    <span>I've already a account </span><a href="login.php" class="btn btn-link">Login</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
</form>

<?php include 'login_footer.php'?>
