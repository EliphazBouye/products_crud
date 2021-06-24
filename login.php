<?php
include 'login_header.php';
session_start();
    if(isset($_SESSION['user'])){
        header('Location: /');
    }
?>
    <form method="post" action="connection.php">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        <div class="form-floating">
            <input type="text" name="pseudo" class="form-control" id="floatingInput" placeholder="Tntrunks">
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

<!--        <div class="checkbox mb-3">-->
<!--            <label>-->
<!--                <input type="checkbox" value="remember-me"> Remember me-->
<!--            </label>-->
<!--        </div>-->
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <span>I've not account </span><a href="signup.php" class="btn btn-link">Sign up</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </form>

    <?php include 'login_footer.php'?>
