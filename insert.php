<?php
    function insert($login,$pass,$access){
       if(!empty($_POST['login']) && !empty($_POST['pass'])){
           if ($_POST['access'] == "on"){
               $login = $_POST['login'];
               $pass = $_POST['pass'];
               $access = 1;
               echo '$login';
               echo  '$pass';
               echo $access;
           }
           else{
               $login = $_POST['login'];
               $pass = $_POST['pass'];
               $access = 0;
               echo $login;
               echo  $pass;
               echo $access;
           }







        }
}
