<?php
$conn=mysqli_connect("localhost","root","","schools")or die(mysqli_error($conn));
$id=$_GET['id'];
echo $id;
$delete_query=mysqli_query($conn,"delete from students where id=$id")or die(mysqli_error($conn));
if($delete_query){
    echo "<script>windows.alert('record deleted')</script>";
    header ("refresh:5,url=view.php");
}else{
    echo "<script>windows.alert('could not delete')</script>";
    header ("refresh:5,url=all.php");
}
?>