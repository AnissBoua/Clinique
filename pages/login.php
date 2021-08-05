<?php require '../logic/root_url.php' ?>
<?php require './components/head.php' ?>
<?php require './components/header.php' ?>

<div class="sign_in_container">
    <div class="sign_in_container_form">
        <h3>Sign into your AnimalCare account</h3>
        <p>You don't have an account? <a href="./signin.php">Click here</a></p>
        <form method="POST" action="signin">
            <div class="sign_in_container_form_email">
                <label for="e-mail">E-mail</label>
                <input type="email" name="e-mail" id="e-mail">
            </div>
            <div class="sign_in_container_form_pass">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <input class="sign_in_container_form_submit" type="submit" value="Sign in">
        </form>
    </div>

</div>