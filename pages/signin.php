<?php require '../logic/root_url.php' ?>
<?php require './components/head.php' ?>
<?php require './components/header.php' ?>
<div class="sign_in_container">
    <div class="sign_in_container_form">
        <h3>Create your new AnimalCare account</h3>
        <p>You already have an account? <a href="./login.php">Click here</a></p>
        <form id="signin_form" method="POST" action="">
            <div class="sign_in_container_form_name">
                <label for="accountname">Name</label>
                <input type="text" name="name" id="name">
                <span id="nameerrmsg"></span>
            </div>
            <div class="sign_in_container_form_email">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email">
                <span id="emailerrmsg"></span>
            </div>
            <div class="sign_in_container_form_pass">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="sign_in_container_form_confpass">
                <label for="confirm_password">Confirm your Password</label>
                <input type="password" name="confirm_password" id="confirm_password">
                <span id="passerrmsg"></span>
            </div>
            <input class="sign_in_container_form_submit" type="submit" name="signinsubmit" value="Sign in">
            <script src="../javascipt/passwordMatch.js"></script>
        </form>
    </div>
</div>
<?php
try {
    $pdo_options[pdo::ATTR_ERRMODE] = pdo::ERRMODE_EXCEPTION;
    $db = new PDO('mysql:host=localhost; dbname=clinique', 'root', '',$pdo_options);
    $sql_checkusers = 'SELECT name, email FROM users WHERE email = ?';
    $request_checkusers = $db->prepare($sql_checkusers);
    $request_checkusers -> execute(['$name, $email']);
    $testinfo = $request_checkusers->fetch();
    if($testinfo['$name']){
        echo 'this username is already been used';
    }
    else if($testinfo['$email']){
        echo 'this email is already been used';
    }
    else if(isset($_POST['password'], $_POST['confirm_password'])){
        if($_POST['password'] == $_POST['confirm_password']){
            $sql_adduser = 'INSERT INTO users(name, email, password) VALUE(:name, :email, :password)';//!!ANISSE RICORDA CHE HAI CAMBIATO IL DATABASE ORA NON SI CHIAMA PIU NAME MA USERNAME RISOLVI!!
            $request_adduser = $db->prepare($sql_adduser);
            if(isset($_POST['name'], $_POST['email'], $_POST['password'])){
                $request_adduser->execute(array('name' => $_POST['name'], 'email' => $_POST['email'], 'password' => $_POST['password']));
                if(isset($_POST['signinsubmit'])){
                    header('Location: ../index.php');
                }
            }
        }
        else{
        };
    }
    
} 
catch (Exception $e) {
    die('Error:' . $e->getMessage());
}

?>
<?php require './components/footer.php' ?>