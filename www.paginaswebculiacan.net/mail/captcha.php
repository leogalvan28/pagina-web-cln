<?php

  $response_recaptcha = $POST["g-recaptcha-response"];
  if(isset($response_recaptcha)&& $response_recaptcha){
        $secret = "6LccKDAUAAAAADg07x0Gm9eZZ4zuGAahVC_8euo7";
        $ip = $SERVER['REMOTE_ADDR'];
        $validation_server = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=Ssecret&response=$response_recaptcha&remoteip=$ip");

        var_dump($validation_server);



  }


?>