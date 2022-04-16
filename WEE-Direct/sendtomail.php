<?php

require 'phpmailer/phpmail.php';


if(isset($_POST['sendmail'])){
    echo $mail = "Name : ".$_POST['text1']."<br> Email : ".$_POST['text2']."<br> Phone : ".$_POST['text3']."<br> Message : ".$_POST['text4'];
     sendmail($mail);
     Header("Location:index.php");
}