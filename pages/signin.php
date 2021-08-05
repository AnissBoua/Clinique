<?php require './components/footer.php' ?>
<?php require '../logic/root_url.php' ?>
<?php require './components/head.php' ?>
<?php require './components/header.php' ?>

<div class="sign_in_container">
    <div class="sign_in_container_form">
        <h3>Create your new AnimalCare account</h3>
        <p>You already have an account? <a href="./login.php">Click here</a></p>
        <form method="POST" action="signin">
            <div class="sign_in_container_form_name">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="sign_in_container_form_email">
                <label for="e-mail">E-mail</label>
                <input type="email" name="e-mail" id="e-mail">
            </div>
            <div class="sign_in_container_form_pass">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="sign_in_container_form_confpass">
                <label for="confirm_password">Confirm your Password</label>
                <input type="password" name="confirm_password" id="confirm_password">
            </div>
            <input class="sign_in_container_form_submit" type="submit" value="Sign in">
        </form>
    </div>

</div>

<?php require './components/footer.php' ?>