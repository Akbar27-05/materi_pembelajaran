<h1>Login Admin</h1>
<form action="" method="post">
    email:
    <input type="email" value="" name="email">
    <br>
    password:
    <input type="password" name="password" id="">
    <input type="submit" value="login" name="login">
</form>

<?php 
    session_start();

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $dbemail = 'a@gmail.com';
        $dbpassword = 'a';
        
        if ($email==$dbemail && $password==$dbpassword) {
            $_SESSION['email'] = $email;

            header('location:index.php');
        }else{
            echo 'email/password salah';
        }
    }
?>