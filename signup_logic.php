<?php

session_start();

require 'ManagerUser.php';

if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype'])){
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);

    $user = new ManagerUser();
    $getUser = $user->getUser($pseudo);
    $data = $user->data;
    $row = $user->row;
    var_dump($pseudo);



if($row === 0){
    if ($pseudo <= 100){
        if($email <= 100){
            if($password === $password_retype){
                $password = password_hash($password, PASSWORD_DEFAULT);
                $ip = $_SERVER['REMOTE_ADDR'];
                $setUser = $user->setUser($pseudo, $email, $password, $ip);
                $_SESSION['user'] = $data->pseudo;
            }else{header('Location: signup.php?signup_err=password');}
        }else{header('Location: signup.php?signup_err=email');}
    }else{header('Location: signup.php?signup_err=username');}
}else{header('Location: login.php');}

}else{header('Location: login.php');}
