<?php

require 'ManagerUser.php';
session_start();

if(isset($_POST['pseudo']) && isset($_POST['password'])){
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $password = htmlspecialchars($_POST['password']);

    $user = new ManagerUser();
    $getUser = $user->getUser($pseudo);
    $data = $user->data;
    $row = $user->row;


    if($row === 1){
            if($pseudo <= 100){
                if($pseudo === $data->pseudo){
                        $password = password_verify($password, $data->password);
                        if($password){
                            $_SESSION['user'] = $data->pseudo;
                            header('Location: /');
                        }else{header('Location: login.php?login_err=password_err');}
                }else{header('Location: login.php?login_err=pseudo_err');}
            }else{header('Location: login.php?login_err=pseudo');}
    }else{header('Location: login.php?login_err=already');}
}else{header('Location: login.php');}