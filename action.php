<?php 

 $to ="prakashtiwari901@gmail.com";
 $name= $_POST['name'];
 $headers= $_POST['email'];  // $headers=$_POST['mail'];
 $subject= $_POST['subject'];
 $message =$_POST['message'];
  if(mail($to,$subject,$message,$headers)){
      echo "mail sent successfully !!";
  }
  else
  {
      echo "Cannot send mail !! Try again.";
  }


?> 