<?php 
session_start();

if(isset($_POST['submit'])){

        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'hotelspan';
        
        $con = new PDO("mysql:host=$host; dbname=$database",$user,$password);

        $name = $_POST['user'];
        $pass = $_POST['password'];

        //Script for Setting new password 
       
        // $name = 'enter user name here';
        // $pass = 'enter password here';
        
        // //password hasing
        // $passw = password_hash("$pass",PASSWORD_BCRYPT);


        // $statement = $con->prepare("INSERT INTO login(name,password)VALUES(:name,:password)");
        // $statement->execute(array(
        //     'name' => $name,
        //     'password' => $passw
        //  ));

        
        //counting number of rows
        $stmt = $con->prepare(" select count(*) from login where name= ?");
        $stmt->execute([$name]);
        $number_of_rows = $stmt->fetchColumn();

           if($number_of_rows > 0)
               {

                    //verifying the password
                    $sth = $con->prepare("SELECT *  FROM login where name=?");
                    $sth->execute([$name]);

                        while($row = $sth->fetch(PDO::FETCH_BOTH))
                        {
                    
                            if(password_verify($pass,$row["password"]))
                            {
                            $_SESSION['username']=$name;
                            header('location:../spandashboard/gallery.php');
                    
                            }else
                            {
                            $_SESSION['wrong']="Incorrect username or password !!";
                                header('location:login.php');
                            }
                        }
                }else{
                    $_SESSION['wrong']="Incorrect username or password !!";
                    header('location:login.php');
                }

 }else{

    header('location:../login/login.php');

}

?>