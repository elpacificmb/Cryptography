<?php

  $encryption = $decryption = "";

  if (isset($_POST['encrypt'])) {

    $text = $_POST['text'];
    // echo "Original Data: " . $text;
    // echo "</br>";

    $ciphering = "AES-128-CTR"; //it stores the cipher method
    $option = 0; //it holds the bitwise disjunction of the flags
    $encryption_iv = "1234567890123456"; //it holds the initialization vector which is not null
    $encryption_key = "hello";

    $encryption = openssl_encrypt($text, $ciphering, $encryption_key, $option, $encryption_iv);

    // echo "Encypted Data: " . $encryption;
    // echo "<?br>";

  }

  if (isset($_POST['decrypt'])) {

    $text = $_POST['text'];
    // echo "Encrypted Data: " . $text;
    // echo "</br>";

    $ciphering = "AES-128-CTR";
    $option = 0;
    $encryption_iv = "1234567890123456";
    $encryption_key = "hello";

    $decryption = openssl_decrypt($text, $ciphering, $encryption_key, $option, $encryption_iv);

    // echo "Decypted Data: " . $decryption;
    // echo "<?br>";

  }

  if (isset($_POST['reset'])) {

    $text = "";
    $encryption = "";
    $decryption = "";

  }


?>