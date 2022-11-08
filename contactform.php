<?php
  
  if (isset($_POST['submit'])) {
   $name = $_POST['name']; 
   $mailFrom = $_POST['email']; 
   $phonenumber = $_POST['phonenumber']; 
   $experience = $_POST['experience']; 
   $availability = $_POST['availability']; 
    
   $mailTo = "kavitagupta101@yahoo.com";
   $headers = "From: ".$mailFrom;
   $txt = "You have received an e-mail from ".$name;
    
   mail($mailTo, $txt, $headers);
   header("Location: index.html?mailsend");
  }
