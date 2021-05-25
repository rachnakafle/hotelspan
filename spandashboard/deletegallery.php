<!--For  Deleting the events -->
<?php 

$conn= mysqli_connect("localhost","root","","hotelspan") or die();

$id =$_GET['id'];
//print_r($id);
$sql ="DELETE FROM gallery WHERE id= $id";
$result =mysqli_query($conn,$sql);
if($result){
        
echo "<script type='text/javascript'>alert('$message');</script>";
    header('location:gallery.php');
}
?>