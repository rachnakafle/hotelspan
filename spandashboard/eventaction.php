<?php 
session_start();
if(!isset($_SESSION['username'])){
    header('location:../login/login.php');
}

?>
<?php 

         $conn = mysqli_connect("localhost","root","","hotelspan");

         if(isset($_POST['submit'])){
                 
                $title = $_POST['title'];
              //  print_r($title);
                $description =$_POST['description'];
                $date =$_POST['date'];
                $time =$_POST['time'];
                $venue=$_POST['venue'];
                $organizer=$_POST['organizer'];
                $files=$_FILES['file'];
                
                $filename =$files['name'];
                // -----------------------
                $fileerror = $files['error'];
                $filetmp = $files['tmp_name'];
                $fileext =explode('.',$filename);
                print_r($fileext);
                $filecheck = strtolower(end($fileext)); // file ko extension lai lowercase ma convert gareko
                // print_r($filecheck);
                $fileextstored = array('png','jpg','jpeg');

                        if(in_array($filecheck,$fileextstored)){  //check gareko $filecheck vanni extension $fileextstored vanni array ma xa ki nai 
                        $destinationfile = '../uploads/events/'.$filename; //yedi condition satisfy vayo vani upload vanni folder ma gayera $filename save hunxa 
                        move_uploaded_file($filetmp,$destinationfile);
                                // -------------------------------------------------------------
                        $sql ="INSERT INTO events(title,description,image,date,time,venue,organizer) VALUES ('$title','$description','$destinationfile','$date','$time','$venue','$organizer')";
                        $result =mysqli_query($conn,$sql);
                                        if($result){
                                        echo "data inserted Successfully";
                                        header('location:                                                                                                                                                                                                                                                                                                                                                                                                                                                       event.php')
                                        ?>
                                        <?php
                                   }
                                   
                                        else{
                                                echo "sorry!! data couldn't be inserted";
                                        
                                                }
                        }
        }
        else{
                echo "couldn't be inserted";
        }
?>